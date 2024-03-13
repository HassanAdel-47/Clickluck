@extends($activeTemplate . 'layouts.master')
@section('content')
    <!-- dashboard section start -->
    <section class="pt-100 pb-100 Win__history ">
        <div>
            <div class="row mt-3 me-5">
                <div>
                    <div class="w-full d-flex justify-content-between">
                        <p class="Deposit__history__title">My withdraws</p>
                    </div>
                    <div class="pagination_buttons w-full d-flex align-items-center justify-content-between my-3">
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
                                        <td>{{ $withdraw->amount }}</td>
                                        <td>{{ $withdraw->currency }}</td>
                                        <td>{{ $withdraw->rate }}</td>
                                        <td>{{ $withdraw->charge }}</td>
                                        <td>{{ $withdraw->after_charge }}</td>
                                        <td>{{ $withdraw->withdraw_information }}</td>
                                        <td>{{ $withdraw->status }}</td>
                                        <td>{{ $withdraw->admin_feedback }}</td>
                                        <td>{{ $withdraw->created_at }}</td>
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
