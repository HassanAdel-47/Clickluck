@extends($activeTemplate . 'layouts.master')
@section('content')
<!-- dashboard section start -->
<section class="pt-50 pb-100 Win__history ">
    <div>
        <div class="row ms-2 me-2 lg:mt-3 lg:me-5">
            <div>
                <div class="w-full d-flex justify-content-between">
                    <p class="Deposit__history__title">Withdraw History</p>
                    <div class="d-flex justify-content-between mb-3 flex-wrap gap-3">

                        <a class="btn btn--primary flex-shrink-0" href="{{ route('user.withdraw') }}">
                            @lang('Withdraw Now')
                        </a>
                    </div>
                </div>
                <div class="pagination_buttons w-full d-flex align-items-center justify-content-between my-3">
                    <div class="d-flex justify-content-between mb-3 flex-wrap gap-3">
                        @lang('Balance'): {{ formateNumber(Auth::user()->balance)}}
                    </div>
                    <div class="mt-3">
                        {{ paginateLinks($withdraws) }}
                    </div>


                </div>
                <div class="recentTable mt-2">
                    <table id="dataTable" class="table table-bordered dt-responsive">
                        <thead>
                            <tr>
                                <th>withdraw method</th>
                                <th>amount</th>
                                <th>currency</th>
                                <th>rate</th>
                                <th>charge</th>
                                <th>after_charge</th>
                                <th>withdraw_information</th>
                                <th>status</th>
                                <th>admin_feedback</th>
                                <th>withdraw date</th>


                            </tr>
                        </thead>
                        <tbody>
                            @forelse($withdraws as $withdraw)
                            <tr>
                                <td>{{ $withdraw->method->name }}</td>
                                <td>{{ formateNumber($withdraw->amount) }}</td>
                                <td>{{ $withdraw->currency }}</td>
                                <td>{{ formateNumber($withdraw->rate) }}</td>
                                <td>{{ formateNumber($withdraw->charge) }}</td>
                                <td>{{ formateNumber($withdraw->after_charge) }}</td>
                                <td>{{ $withdraw->withdraw_information }}</td>
                                <td>{{ $withdraw->status }}</td>
                                <td>{{ $withdraw->admin_feedback }}</td>
                                <td>{{ date('d-m-Y', strtotime($withdraw->created_at)) }}</td>
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
@endsection