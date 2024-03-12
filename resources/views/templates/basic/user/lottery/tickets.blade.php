    @extends($activeTemplate . 'layouts.master')
    @section('content')
    <!-- dashboard section start -->
    <section class="pt-100 pb-100 Deposit__history ">
        <div>
            <div class="row mt-3 me-5">
                <div>
                    <div class="w-full d-flex justify-content-between">
                        <p class="Deposit__history__title">My tickets</p>
                    </div>
                    <div class="pagination_buttons w-full d-flex align-items-center justify-content-between my-3">
                        {{-- <div class="d-flex align-items-center">
                            <p class="me-2">Showing Results {{$tickets->firstItem()}}-{{$tickets->lastItem()}} of {{$tickets->total()}}</p>
                            <button onclick="updateTable('prev')" class="me-4"><img class="w-75"
                                    src="{{ asset($activeTemplateTrue . 'images/Arrow.svg') }}" alt="image"></button>
                            <button onclick="updateTable('next')"><img class="w-75"
                                    src="{{ asset($activeTemplateTrue . 'images/Arrow.svg') }}" alt="image"></button>
                        </div> --}}
                        <div class="mt-3">
                            {{ paginateLinks($tickets) }}
                        </div>
                    </div>
                    <div class="recentTable mt-2">
                        <table id="dataTable" class="table table-bordered dt-responsive">
                            <thead>
                                <tr>
                                    <th>Ticket Number</th>
                                    <th>Purchase Date</th>
                                    <th>Ticket Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tickets as $ticket)
                            <tr>
                                <td>{{ $ticket->ticket_number }}</td>
                                <td>{{ $ticket->created_at }}</td>
                                <td>{{ $ticket->total_price }}</td>
                            </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- dashboard section end -->

    @endsection
    {{-- @push('script')
    <script>

        let currentIndex = 0;

        // Function to update the table based on the current index
        function updateTable(direction) {
            const tableBody = document.querySelector('#dataTable tbody');
            tableBody.innerHTML = '';

            if (direction === 'prev' && currentIndex >= 10) {
                currentIndex -= 10;
            } else if (direction === 'next' && currentIndex + 10 < {{$tickets}}.length) {
                currentIndex += 10;
            }

            const endIndex = currentIndex + 10 <= {{$tickets}}.length ? currentIndex + 10 : {{$tickets}}.length;
            const slicedData = {{$tickets}}.slice(currentIndex, endIndex);

            slicedData.forEach(rowData => {
                const row = document.createElement('tr');
                rowData.forEach(value => {
                    const cell = document.createElement('td');
                    cell.textContent = value;
                    row.appendChild(cell);
                });
                tableBody.appendChild(row);
            });

            const showingResults = `Showing Results ${currentIndex + 10}-${endIndex} of`. {{$tickets}}.length;
            document.querySelector('.pagination_buttons p').textContent = showingResults;
        }

        // Initial table update
        updateTable();
    </script>
    @endpush --}}
