@extends($activeTemplate . 'layouts.master')
@section('content')
<!-- dashboard section start -->
<section class="pt-100 pb-100 Purchase__history ">
    <div>
        <div class="row mt-3 me-5">
            <div>
                <div class="w-full d-flex justify-content-start">
                    <p class="Purchase__history__title">Purchase History</p>
                </div>
                <div class="pagination_buttons w-full d-flex align-items-center justify-content-end my-3">
                    <p class="me-2">Showing Results 1-10 of 20</p>
                    <button onclick="updateTable('prev')" class="me-4"><img class="w-75"
                            src="{{ asset($activeTemplateTrue . 'images/Arrow.svg') }}" alt="image"></button>
                    <button onclick="updateTable('next')"><img class="w-75"
                            src="{{ asset($activeTemplateTrue . 'images/Arrow.svg') }}" alt="image"></button>
                </div>
                <div class="recentTable mt-2">
                    <table id="dataTable" class="table table-bordered dt-responsive">
                        <thead>
                            <tr>
                                <th>Ticket Number</th>
                                <th>Draw Date</th>
                                <th>Game</th>
                                <th>Prize</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="ticketNumber1">Ticket Number</td>
                                <td id="drawDate1">20/1/2023</td>
                                <td id="game1">Game Name</td>
                                <td id="prize1">$5,000.00</td>
                            </tr>
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
<script>
    // Sample data array with 15 rows
    const dataArray = [
        ["Ticket Number 2", "21/1/2023", "Game Name 2", "$3,000.00"],
        ["Ticket Number 3", "21/1/2023", "Game Name 3", "$2,000.00"],
        ["Ticket Number 4", "21/1/2023", "Game Name 4", "$6,000.00"],
        ["Ticket Number 5", "21/1/2023", "Game Name 5", "$4,000.00"],
        ["Ticket Number 6", "21/1/2023", "Game Name 6", "$1,000.00"],
        ["Ticket Number 7", "21/1/2023", "Game Name 7", "$8,000.00"],
        ["Ticket Number 8", "21/1/2023", "Game Name 8", "$7,000.00"],
        ["Ticket Number 9", "21/1/2023", "Game Name 9", "$9,000.00"],
        ["Ticket Number 10", "21/1/2023", "Game Name 10", "$10,000.00"],
        ["Ticket Number 11", "21/1/2023", "Game Name 11", "$11,000.00"],
        ["Ticket Number 12", "21/1/2023", "Game Name 12", "$12,000.00"],
        ["Ticket Number 13", "21/1/2023", "Game Name 13", "$13,000.00"],
        ["Ticket Number 14", "21/1/2023", "Game Name 14", "$14,000.00"],
        ["Ticket Number 15", "21/1/2023", "Game Name 15", "$15,000.00"],
        ["Ticket Number 16", "21/1/2023", "Game Name 16", "$16,000.00"],
        ["Ticket Number 17", "21/1/2023", "Game Name 17", "$17,000.00"],
        ["Ticket Number 18", "21/1/2023", "Game Name 18", "$18,000.00"],
        ["Ticket Number 19", "21/1/2023", "Game Name 19", "$19,000.00"],
        ["Ticket Number 20", "21/1/2023", "Game Name 20", "$20,000.00"],
        ["Ticket Number 21", "21/1/2023", "Game Name 21", "$21,000.00"],
        ["Ticket Number 22", "21/1/2023", "Game Name 22", "$22,000.00"],
        ["Ticket Number 23", "21/1/2023", "Game Name 23", "$23,000.00"],
        ["Ticket Number 24", "21/1/2023", "Game Name 24", "$24,000.00"],
        ["Ticket Number 25", "21/1/2023", "Game Name 25", "$25,000.00"],
        ["Ticket Number 26", "21/1/2023", "Game Name 26", "$26,000.00"],
        ["Ticket Number 27", "21/1/2023", "Game Name 27", "$27,000.00"],
        ["Ticket Number 28", "21/1/2023", "Game Name 28", "$28,000.00"],
        ["Ticket Number 29", "21/1/2023", "Game Name 29", "$29,000.00"],
        ["Ticket Number 30", "21/1/2023", "Game Name 30", "$30,000.00"],
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
@endpush