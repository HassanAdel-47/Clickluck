@extends($activeTemplate . 'layouts.master')
@section('content')
<!-- dashboard section start -->
<section class="pt-100 pb-100 Deposit__history ">
    <div>
        <div class="row mt-3 me-5">
            <div>
                <div class="w-full d-flex justify-content-between">
                    <p class="Deposit__history__title">Deposit History</p>
                    <a class="btn btn--primary" href="/user/deposit/history">Deposit Now</a>
                </div>
                <div class="pagination_buttons w-full d-flex align-items-center justify-content-between my-3">
                    <p class="d-none Deposit__history__title">Balance: $500.00
                    </p>
                    <p class="Deposit__history__title" style="font-size: 1.8rem !important;">Balance: $500.00</p>
                    <div class="d-flex align-items-center">
                        <p class="me-2">Showing Results 1-10 of 20</p>
                        <button onclick="updateTable('prev')" class="me-4"><img class="w-75"
                                src="{{ asset($activeTemplateTrue . 'images/Arrow.svg') }}" alt="image"></button>
                        <button onclick="updateTable('next')"><img class="w-75"
                                src="{{ asset($activeTemplateTrue . 'images/Arrow.svg') }}" alt="image"></button>
                    </div>
                </div>
                <div class="recentTable mt-2">
                    <table id="dataTable" class="table table-bordered dt-responsive">
                        <thead>
                            <tr>
                                <th>Transaction Number</th>
                                <th>Deposit Date</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="ticketNumber1">Ticket Number</td>
                                <td id="drawDate1">20/1/2023</td>
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
@endpush