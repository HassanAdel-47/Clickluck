@extends($activeTemplate . 'layouts.master')
@section('content')
<!-- dashboard section start -->
<section class="pt-100 pb-100 Win__history ">
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
    // Sample data array with 15 rows
    const dataArray = [
        ["Ticket Number 1", "21/1/2023", "Game Name 1", "1st", "$5,000.00"],
        ["Ticket Number 2", "21/1/2023", "Game Name 2", "2nd", "$3,000.00"],
        ["Ticket Number 3", "21/1/2023", "Game Name 3", "3rd", "$2,000.00"],
        ["Ticket Number 4", "21/1/2023", "Game Name 4", "4th", "$6,000.00"],
        ["Ticket Number 5", "21/1/2023", "Game Name 5", "5th", "$4,000.00"],
        ["Ticket Number 6", "21/1/2023", "Game Name 6", "6th", "$1,000.00"],
        ["Ticket Number 7", "21/1/2023", "Game Name 7", "7th", "$8,000.00"],
        ["Ticket Number 8", "21/1/2023", "Game Name 8", "8th", "$7,000.00"],
        ["Ticket Number 9", "21/1/2023", "Game Name 9", "9th", "$9,000.00"],
        ["Ticket Number 10", "21/1/2023", "Game Name 10", "10th", "$10,000.00"],
        ["Ticket Number 11", "21/1/2023", "Game Name 11", "11th", "$11,000.00"],
        ["Ticket Number 12", "21/1/2023", "Game Name 12", "12th", "$12,000.00"],
        ["Ticket Number 13", "21/1/2023", "Game Name 13", "13th", "$13,000.00"],
        ["Ticket Number 14", "21/1/2023", "Game Name 14", "14th", "$14,000.00"],
        ["Ticket Number 15", "21/1/2023", "Game Name 15", "15th", "$15,000.00"],
        ["Ticket Number 16", "21/1/2023", "Game Name 16", "16th", "$16,000.00"],
        ["Ticket Number 17", "21/1/2023", "Game Name 17", "17th", "$17,000.00"],
        ["Ticket Number 18", "21/1/2023", "Game Name 18", "18th", "$18,000.00"],
        ["Ticket Number 19", "21/1/2023", "Game Name 19", "19th", "$19,000.00"],
        ["Ticket Number 20", "21/1/2023", "Game Name 20", "20th", "$20,000.00"],
        ["Ticket Number 21", "21/1/2023", "Game Name 21", "21st", "$21,000.00"],
        ["Ticket Number 22", "21/1/2023", "Game Name 22", "22nd", "$22,000.00"],
        ["Ticket Number 23", "21/1/2023", "Game Name 23", "23rd", "$23,000.00"],
        ["Ticket Number 24", "21/1/2023", "Game Name 24", "24th", "$24,000.00"],
        ["Ticket Number 25", "21/1/2023", "Game Name 25", "25th", "$25,000.00"],
        ["Ticket Number 26", "21/1/2023", "Game Name 26", "26th", "$26,000.00"],
        ["Ticket Number 27", "21/1/2023", "Game Name 27", "27th", "$27,000.00"],
        ["Ticket Number 28", "21/1/2023", "Game Name 28", "28th", "$28,000.00"],
        ["Ticket Number 29", "21/1/2023", "Game Name 29", "29th", "$29,000.00"],
        ["Ticket Number 30", "21/1/2023", "Game Name 30", "30th", "$30,000.00"],
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
