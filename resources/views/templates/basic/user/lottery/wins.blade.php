@extends($activeTemplate . 'layouts.master')
@section('content')
    <!-- dashboard section start -->
    <section class="pt-100 pb-100 Withdraw__history ">
        <div>
            <div class="row ms-2 me-2 lg:mt-3 lg:me-5 ">
                <div>
                    <div class="w-full d-flex justify-content-between">
                        <p class="Deposit__history__title">@lang('Win History')</p>
                    </div>
                    <div class="pagination_buttons w-full d-flex align-items-center justify-content-between my-3">
                        <div class="mt-3">
                            {{ paginateLinks($wins) }}
                        </div>
                    </div>
                    <div class="recentTable mt-2">
                        <table id="dataTable" class="table table-bordered dt-responsive">
                            <thead>
                                <tr>
                                    <th>Ticket Number</th>
                                    <th>Draw Date</th>
                                    <th>Game</th>
                                    <th>Winning Place</th>
                                    <th>Prize</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($wins as $win)
                                    <tr>
                                        <td>{{ $win->ticket_number }}</td>


                                        <td>{{ date('d-m-Y', strtotime($win->tickets->phase->draw_date)) }}</td>
                                        <td>{{ $win->tickets->lottery->name }}</td>
                                        <td>{{ $win->level == 1 ? $win->level . 'st' : ($win->level == 2 ? $win->level . 'nd' : $win->level . 'rd') }}
                                        </td>
                                        <td>{{ number_format($win->win_bonus, 2) }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="rounded-bottom text-center" colspan="100%"> {{ __($emptyMessage) }}</td>
                                    </tr>
                                @endforelse
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- dashboard section end -->
@endsection
