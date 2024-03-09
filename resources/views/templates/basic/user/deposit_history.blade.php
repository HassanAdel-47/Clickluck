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
                <div class="d-flex flex-column w-25 mt-3">
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

{{-- APPROVE MODAL --}}
<div class="modal fade" id="detailModal" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">@lang('Details')</h5>
                <span class="close" data-bs-dismiss="modal" type="button" aria-label="Close">
                    <i class="las la-times"></i>
                </span>
            </div>
            <div class="modal-body">
                <ul class="list-group userData mb-2">
                </ul>
                <div class="feedback"></div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn--danger text-white" data-bs-dismiss="modal"
                    type="button">@lang('Close')</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    function confirmWithdraw() {
        var withdrawAmount = document.getElementById("withdrawAmount").value;
        var paymentMethod = document.getElementById("paymentMethod").value;

        // You can perform further validation or processing here
        // For now, let's just display an alert with the values
        console.log("Withdraw Amount: " + withdrawAmount + "\nPayment Method: " + paymentMethod);
    }
</script>
@endpush