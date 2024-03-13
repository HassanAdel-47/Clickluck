@extends($activeTemplate . 'layouts.master')
@section('content')
    <!-- dashboard section start -->
    <section class="pt-100 pb-100 Withdraw__history ">
        <div>
            <div class="row mt-3 me-5">
                <div>
                    <div class="w-full d-flex justify-content-between">
                        <p class="Deposit__history__title">Winning History</p>
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
                                    <th>Ticket Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($wins as $win)
                                    <tr>
                                        <td>{{ $win->ticket_number }}</td>
                                        <td>{{ $win->created_at }}</td>
                                        <td>{{ $win->win_bonus }}</td>
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
@push('script')
    {{-- <script>
    // Sample data array with 15 rows
    const dataArray = [
        ["Ticket Number 1", "21/1/2023", "$5,000.00"],
        ["Ticket Number 2", "21/1/2023", "$3,000.00"],
        ["Ticket Number 3", "21/1/2023", "$2,000.00"],
        ["Ticket Number 4", "21/1/2023", "$6,000.00"],
        ["Ticket Number 5", "21/1/2023", "$4,000.00"],
        ["Ticket Number 6", "21/1/2023", "$1,000.00"],
        ["Ticket Number 7", "21/1/2023", "$8,000.00"],
        ["Ticket Number 8", "21/1/2023", "$7,000.00"],
        ["Ticket Number 9", "21/1/2023", "$9,000.00"],
        ["Ticket Number 10", "21/1/2023", "$10,000.00"],
        ["Ticket Number 11", "21/1/2023", "$11,000.00"],
        ["Ticket Number 12", "21/1/2023", "$12,000.00"],
        ["Ticket Number 13", "21/1/2023", "$13,000.00"],
        ["Ticket Number 14", "21/1/2023", "$14,000.00"],
        ["Ticket Number 15", "21/1/2023", "$15,000.00"],
        ["Ticket Number 16", "21/1/2023", "$16,000.00"],
        ["Ticket Number 17", "21/1/2023", "$17,000.00"],
        ["Ticket Number 18", "21/1/2023", "$18,000.00"],
        ["Ticket Number 19", "21/1/2023", "$19,000.00"],
        ["Ticket Number 20", "21/1/2023", "$20,000.00"],
        ["Ticket Number 21", "21/1/2023", "$21,000.00"],
        ["Ticket Number 22", "21/1/2023", "$22,000.00"],
        ["Ticket Number 23", "21/1/2023", "$23,000.00"],
        ["Ticket Number 24", "21/1/2023", "$24,000.00"],
        ["Ticket Number 25", "21/1/2023", "$25,000.00"],
        ["Ticket Number 26", "21/1/2023", "$26,000.00"],
        ["Ticket Number 27", "21/1/2023", "$27,000.00"],
        ["Ticket Number 28", "21/1/2023", "$28,000.00"],
        ["Ticket Number 29", "21/1/2023", "$29,000.00"],
        ["Ticket Number 30", "21/1/2023", "$30,000.00"],
    ];


    let currentIndex = 0;

    // Function to update the table based on the current index
    function updateTable(direction) {
        const tableBody = document.querySelector('#dataTable tbody');
        tableBody.innerHTML = '';

        if (direction === 'prev' && currentIndex >= 10) {
            currentIndex -= 10;
        } else if (direction === 'next' && currentIndex + 10 < dataArray.length) {
            currentIndex += 10;
        }

        const endIndex = currentIndex + 10 <= dataArray.length ? currentIndex + 10 : dataArray.length;
        const slicedData = dataArray.slice(currentIndex, endIndex);

        slicedData.forEach(rowData => {
            const row = document.createElement('tr');
            rowData.forEach(value => {
                const cell = document.createElement('td');
                cell.textContent = value;
                row.appendChild(cell);
            });
            tableBody.appendChild(row);
        });

        const showingResults = `Showing Results ${currentIndex + 1}-${endIndex} of ${dataArray.length}`;
        document.querySelector('.pagination_buttons p').textContent = showingResults;
    }

    // Initial table update
    updateTable();
</script>
@endpush --}}
