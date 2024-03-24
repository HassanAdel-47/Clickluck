<?php

namespace App\Http\Controllers\Api;

use App\Constants\Status;
use App\Http\Controllers\Controller;
use App\Models\Phase;
use App\Models\Ticket;
use App\Models\Transaction;
use App\Models\Winner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LotteryController extends Controller
{

    public function lottery()
    {
        $phases = Phase::runningAndComming()->latest('draw_date')->with([
            'lottery',
            'lottery.bonuses' => function ($query) {
                $query->select('lottery_id', 'prize')
                    ->where('level', '1');
            }
        ])->paginate(getPaginate());
        $notify[] = 'All Lotteries';
        return response()->json([
            'remark' => 'lotteries',
            'status' => 'success',
            'message' => ['success' => $notify],
            'data' => [
                'phases' => $phases
            ]
        ]);
    }
    public function lotteryDetails($id)
    {
        $phase = Phase::available()->findOrFail($id);
        $tickets = Ticket::where('user_id', auth()->user()->id)->where('lottery_id', $phase->lottery_id)->with('phase')->orderByDesc('id')->paginate(getPaginate());
        $notify[] = "Details of" . ' ' . $phase->lottery->name;
        return response()->json([
            'remark' => 'lottery phase details',
            'status' => 'success',
            'message' => ['success' => $notify],
            'data' => [
                'phase' => $phase,
                'tickets' => $tickets
            ]
        ]);

    }
    public function lotteryMachine($id)
    {
        $phase = Phase::available()->findOrFail($id);
        $tickets = Ticket::where('user_id', auth()->id())->where('lottery_id', $phase->lottery_id)->with('phase')->orderByDesc('id')->paginate(getPaginate());
        $notify[] = 'phase ' . $phase->phase_number . ' ' . $phase->lottery->name;
        return response()->json([
            'remark' => 'lottery phase draw page',
            'status' => 'success',
            'message' => ['success' => $notify],
            'data' => [
                'phase' => $phase,
                'tickets' => $tickets
            ]
        ]);
    }
    public function buyTicket(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'lottery_id' => 'required',
            'number' => 'required|array',
            'number.*' => 'required|numeric|gt:0',
        ], [
            'number.*.required' => 'All Ticket number Field is required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'remark' => 'validation_error',
                'status' => 'error',
                'message' => ['error' => $validator->errors()->all()],
            ]);
        }
        $ticketQuantity = collect($request->number)->count();
        $phase = Phase::available()->findOrFail($request->phase_id);
        $totalPrice = $phase->lottery->price * $ticketQuantity;
        $user = auth()->user();
        if ($phase->available < $ticketQuantity) {
            return response()->json([
                'remark' => 'ticket_unavailable',
                'status' => 'error',
                'message' => ['error' => 'Oops! Ticket quantity is not available.'],
            ]);
        }
        if ($user->balance < $totalPrice) {
            return response()->json([
                'remark' => 'insufficient_balance',
                'status' => 'error',
                'message' => ['error' => 'Oops! Insufficient balance.'],
            ]);
        }
        $tickets = [];
        foreach ($request->number as $ticketNo) {
            $ticketAvailability = Ticket::where('ticket_number', $ticketNo)->first();
            if ($ticketAvailability) {
                return response()->json([
                    'remark' => 'ticket_already_sold',
                    'status' => 'error',
                    'message' => ['error' => $ticketAvailability->ticket_number . ' - Ticket already sold please try another.'],
                ]);
            }
            $ticket = [];
            $ticket['lottery_id'] = $request->lottery_id;
            $ticket['phase_id'] = $request->phase_id;
            $ticket['user_id'] = $user->id;
            $ticket['ticket_number'] = $ticketNo;
            $ticket['total_price'] = $phase->lottery->price;
            $ticket['status'] = Status::UNPUBLISHED;
            $ticket['created_at'] = now();
            $ticket['updated_at'] = now();
            $tickets[] = $ticket;
        }
        Ticket::insert($tickets);
        $user->balance -= $totalPrice;
        $user->save();
        $phase->available -= $ticketQuantity;
        $phase->sold += $ticketQuantity;
        $phase->save();
        $transaction = new Transaction();
        $transaction->user_id = auth()->user()->id;
        $transaction->amount = getAmount($totalPrice);
        $transaction->charge = 0;
        $transaction->trx_type = '-';
        $transaction->details = 'Payment from user balance for ' . $ticketQuantity . ' ticket of lottery ' . $phase->lottery->name;
        $transaction->trx = getTrx();
        $transaction->remark = 'buy_ticket';
        $transaction->post_balance = auth()->user()->balance;
        $transaction->save();


        $general = gs();
        if ($general->buy_commission == 1) {
            levelCommission($user->id, $totalPrice, 'buy_commission');
        }
        $notify[] = 'Ticket purchased successfully';

        return response()->json([
            'remark' => 'ticket_purchased',
            'status' => 'success',
            'message' => ['success' => $notify],
            'data' => [
                'tickets' => $tickets,
            ],
        ]);
    }

    public function tickets()
    {
        $tickets = Ticket::where('user_id', auth()->user()->id)->with('lottery', 'phase')->orderByDesc('id')->paginate(getPaginate());
        $notify[] = 'Purchased Tickets';
        return response()->json([
            'remark' => 'Purchased Tickets',
            'status' => 'success',
            'message' => ['success' => $notify],
            'data' => [
                'tickets' => $tickets
            ]
        ]);
    }

    public function wins()
    {
        $wins = Winner::where('user_id', auth()->user()->id)->with('tickets', 'tickets.phase', 'tickets.lottery')->paginate(getPaginate());
        $notify[] = 'Total Wins';
        return response()->json([
            'remark' => 'Total Wins',
            'status' => 'success',
            'message' => ['success' => $notify],
            'data' => [
                'wins' => $wins
            ]
        ]);
    }
}
