@extends($activeTemplate . 'layouts.master')
@section('content')
<section class="pt-100 pb-100">
    <div class="Withdraw">
        <div class="row justify-content-center">
            <div class="d-flex align-items-center">
                <a href="/user/tickets" class="me-2"><img
                        src="{{ asset($activeTemplateTrue . 'images/Back_Arrow.svg') }}" alt="image"></a>
                <p class="Deposit__history__title ml-4">Witdraw Money</p>
            </div>
            <form id="withdrawForm">
                <div class="d-flex flex-column w-25 mt-3">
                    <label for="withdrawAmount">Withdraw Amount *</label>
                    <input type=" text" id="withdrawAmount" name="withdrawAmount" placeholder="50.00" required>
                </div>
                <div class="d-flex flex-column w-25 mt-3 ">
                    <label for="paymentMethod">Payment Method *</label>
                    <select id="paymentMethod" name="paymentMethod" required>
                        <option value="paypal" class="withdrawOption">PayPal</option>
                        <option value="creditCard" class="withdrawOption">Credit Card</option>
                        <option value="bankTransfer" class="withdrawOption">Bank Transfer</option>
                    </select>
                </div>


                <button class="btn btn--primary mt-3" type="submit" onclick="confirmWithdraw()">Confirm
                    Withdraw</button>
            </form>
        </div>
</section>
</div>
@endsection

@push('script')
<script>
    function confirmWithdraw() {
        var withdrawAmount = document.getElementById("withdrawAmount").value;
        var paymentMethod = document.getElementById("paymentMethod").value;
        console.log("Withdraw Amount: " + withdrawAmount + "\nPayment Method: " + paymentMethod);
    }
</script>
@endpush