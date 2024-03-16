@extends($activeTemplate . 'layouts.master')
@section('content')
<!-- dashboard section start -->
<section class="pt-100 pb-100 Win__history ">
    <div>
        <div class="row ms-2 me-2 lg:mt-3 lg:me-5">
            <div>
                <div class="w-full d-flex justify-content-between">
                    <p class="Deposit__history__title">Diposits History</p>
                </div>
                <div class="pagination_buttons w-full d-flex align-items-center justify-content-between my-3">
                    <div class="mt-3">
                        {{ paginateLinks($deposits) }}
                    </div>
                </div>
                <div class="recentTable mt-2">
                    <table id="dataTable" class="table table-bordered dt-responsive">
                        <thead>
                            <tr>
                                <th>method_code</th>
                                <th>amount</th>
                                <th>method_currency</th>
                                <th>charge</th>
                                <th>rate</th>
                                <th>status</th>
                                <th>admin_feedback</th>
                                <th>deposit date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($deposits as $deposit)
                            <tr>
                                <td>{{ $deposit->method_code }}</td>
                                <td>{{ $deposit->amount }}</td>
                                <td>{{ $deposit->method_currency }}</td>
                                <td>{{ $deposit->charge }}</td>
                                <td>{{ $deposit->rate }}</td>
                                <td>{{ $deposit->status }}</td>
                                <td>{{ $deposit->admin_feedback }}</td>
                                <td>{{ $deposit->created_at }}</td>

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