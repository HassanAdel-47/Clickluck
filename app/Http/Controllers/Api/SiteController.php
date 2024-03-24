<?php

namespace App\Http\Controllers\Api;

use App\Constants\Status;
use App\Http\Controllers\Controller;
use App\Models\AdminNotification;
use App\Models\Frontend;
use App\Models\Language;
use App\Models\Page;
use App\Models\Phase;
use App\Models\SupportMessage;
use App\Models\SupportTicket;
use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Validator;

class SiteController extends Controller
{
    public function index()
    {
        $reference = @$_GET['reference'];
        if ($reference) {
            session()->put('reference', $reference);
        }
        $sections = Page::where('tempname', $this->activeTemplate)->where('slug', '/')->first();
        $phases = Phase::available()->latest('draw_date')->with([
            'lottery',
            'lottery.bonuses' => function ($query) {
                $query->select('lottery_id', 'prize')
                    ->where('level', '1');
            }
        ])->paginate(getPaginate());
        $notify = ['Home'];
        return response()->json([
            'remark' => 'Home',
            'status' => 'success',
            'message' => ['success' => $notify],
            'data' => [
                'phases' => $phases,
                'sections' => $sections
            ]
        ]);
    }
    public function contactSubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required|string|max:255',
            'message' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'remark' => 'validation_error',
                'status' => 'error',
                'message' => ['error' => $validator->errors()->all()],
            ]);
        }

        if (!verifyCaptcha()) {
            $notify[] = ['error', 'Invalid captcha provided'];
            return response()->json([
                'remark' => 'captcha_error',
                'status' => 'error',
                'message' => ['error', $notify],
            ]);
        }
        $request->session()->regenerateToken();
        $random = getNumber();

        $ticket = new SupportTicket();
        $ticket->user_id = auth()->id() ?? 0;
        $ticket->name = $request->name;
        $ticket->email = $request->email;
        $ticket->priority = Status::PRIORITY_MEDIUM;

        $ticket->ticket = $random;
        $ticket->subject = $request->subject;
        $ticket->last_reply = Carbon::now();
        $ticket->status = Status::TICKET_OPEN;
        $ticket->save();

        $adminNotification = new AdminNotification();
        $adminNotification->user_id = auth()->user() ? auth()->user()->id : 0;
        $adminNotification->title = 'A new support ticket has opened ';
        $adminNotification->click_url = urlPath('admin.ticket.view', $ticket->id);
        $adminNotification->save();

        $message = new SupportMessage();
        $message->support_ticket_id = $ticket->id;
        $message->message = $request->message;
        $message->save();

        $notify[] = ['success', 'Ticket created successfully!'];
        return response()->json([
            'remark' => 'ticket_created',
            'status' => 'success',
            'message' => $notify,
            'data' => [
                'ticket' => $ticket
            ]
        ]);
    }

    public function changeLanguage($lang = null)
    {
        $language = Language::where('code', $lang)->first();
        if (!$language)
            $lang = 'en';
        session()->put('lang', $lang);
    }

    public function cookieAccept()
    {
        $general = gs();
        Cookie::queue('gdpr_cookie', $general->site_name, 43200);
    }

    public function cookiePolicy()
    {
        $pageTitle = 'Cookie Policy';
        $cookie = Frontend::where('data_keys', 'cookie.data')->first();
        return response()->json([
            'remark' => 'cookie_policy_page',
            'status' => 'success',
            'data' => [
                'pageTitle' => $pageTitle,
                'cookie' => $cookie
            ]
        ]);
    }

    public function maintenance()
    {
        $pageTitle = 'Maintenance Mode';
        $general = gs();
        if ($general->maintenance_mode == Status::DISABLE) {
            return response()->json([
                'remark' => 'maintenance_disabled',
                'status' => 'error',
                'message' => ['error' => 'Maintenance mode is disabled.']
            ]);
        }
        $maintenance = Frontend::where('data_keys', 'maintenance.data')->first();
        return response()->json([
            'remark' => 'maintenance_page',
            'status' => 'success',
            'data' => [
                'pageTitle' => $pageTitle,
                'maintenance' => $maintenance
            ]
        ]);
    }
    public function lottery()
    {
        $phases = Phase::runningAndComming()->latest('draw_date')->with([
            'lottery',
            'lottery.bonuses' => function ($query) {
                $query->select('lottery_id', 'prize')
                    ->where('level', '1');
            }
        ])->paginate(getPaginate());
        $sections = Page::where('tempname', $this->activeTemplate)->where('slug', 'lotteries')->first();

        $notify[] = 'All Lotteries';
        return response()->json([
            'remark' => 'lotteries',
            'status' => 'success',
            'message' => ['success' => $notify],
            'data' => [
                'phases' => $phases,
                'sections' => $sections
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


    public function toggleStatus($id)
    {
        $phase = Phase::available()->findOrFail($id);
        $phase->update(['draw_status' => Status::COMPLETE]);
        $notify[] = ['info', 'this phase closed!'];
        return response()->json([
            'remark' => 'phase_draw_status',
            'status' => 'success',
            'message' => ['success' => $notify],
            'data' => [
                'phase' => $phase,
            ]
        ]);
    }
}
