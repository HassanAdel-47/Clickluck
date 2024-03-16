@extends($activeTemplate . 'layouts.master')
@section('content')
<section class="pt-100 pb-100">
    <div class="Deposit">
        <div class="row justify-content-center">
            <div class="d-flex align-items-center">
                <a href="/user/tickets" class="me-2"><img
                        src="{{ asset($activeTemplateTrue . 'images/Back_Arrow.svg') }}" alt="image"></a>
                <p class="Deposit__history__title ml-4">Deposit Money</p>
            </div>
            <form id="depositForm">
                {{-- **************************** --}}
                @csrf
                <div class="d-flex align-items-center justify-content-between w-75 mt-3 me-4">
                    <label>
                        Payments we accept:
                    </label>
                    <p>
                        <img src="{{ asset($activeTemplateTrue . 'images/paymentmethods.svg')}}" alt="image">
                    </p>
                </div>
                <div id="inputErrorMessage" style="color: red;"></div>

                <div class="d-flex justify-content-between w-75 mt-5">
                    <div class="d-flex flex-column w-50 me-4">
                        <label for="depositAmount">Deposit Amount *</label>
                        <input type="text" id="depositAmount" name="depositAmount" placeholder="50.00" required>
                    </div>
                    <div class="d-flex flex-column w-50 ">
                        <label for="cardnumber">Card Number *</label>
                        <input type="text" id="cardnumber" name="cardnumber" placeholder="1234 5678 9012 3456 "
                            required>
                        <div id="cardErrorMessage" style="color: red;"></div>
                    </div>
                </div>
                <div class="d-flex flex-column w-75 mt-5 me-4">
                    <label for="nameoncard">Name on Card *</label>
                    <input type="text" id="nameoncard" name="nameoncard" placeholder="Ex. John Doe" required>
                </div>
                <div class="d-flex justify-content-between w-75 mt-5">
                    <div class="d-flex flex-column w-50 me-4">
                        <label for="expirydate">Expiry Date *</label>
                        <input type="text" id="expirydate" name="expirydate" placeholder="01/25" required>
                        <div id="expiryErrorMessage" style="color: red;"></div>
                    </div>
                    <div class="d-flex flex-column w-50 ">
                        <label for="securitycode">Security Code *</label>
                        <input type="password" id="securitycode" name="securitycode" value="127" required>
                    </div>
                </div>

                <button class="btn btn--primary mt-5" type="submit" onclick="confirmDeposit()">Confirm
                    Deposit</button>
            </form>
        </div>
</section>
</div>
@endsection
@push('script')
<script>

    var cardNumberInput = document.getElementById("cardnumber");
    var expiryDateInput = document.getElementById("expirydate");
    var cardErrorMessageElement = document.getElementById("cardErrorMessage");
    var expiryErrorMessageElement = document.getElementById("expiryErrorMessage");
    var inputErrorMessageElement = document.getElementById("inputErrorMessage");

    cardNumberInput.addEventListener("input", function (event) {
        var input = event.target.value.trim();
        var cardNumberRegex = /^[0-9]{16}$/;

        // Remove non-numeric characters
        var sanitizedInput = input.replace(/[^0-9]/g, "");

        // Limit the input to a maximum of 16 digits
        var formattedInput = sanitizedInput.substring(0, 16);

        // Insert space after every 4 digits
        formattedInput = formattedInput.replace(/(\d{4})(?=\d)/g, "$1 ");

        // Update the input field with the formatted value
        event.target.value = formattedInput;

        // Show an error message if the card number is not valid
        if (formattedInput.length < 16) {
            cardErrorMessageElement.textContent = "Please enter a valid 16-digit card number.";
        } else {
            cardErrorMessageElement.textContent = "";
        }
    });

    expiryDateInput.addEventListener("input", function (event) {
        var input = event.target.value.trim();
        var expiryDateRegex = /^(0[1-9]|1[0-2])\/(0[1-9]|[1-9][0-9])$/;



        // Remove non-numeric and non-slash characters
        var sanitizedInput = input.replace(/[^0-9/]/g, "");

        // Limit the input to a maximum of 5 characters (MM/YY)
        var formattedInput = sanitizedInput.substring(0, 5);

        // Insert slash after the first two digits
        // formattedInput = formattedInput.replace(/^(\d{2})/, "$1/");

        // Update the input field with the formatted value
        event.target.value = formattedInput;

        // Show an error message if the expiry date is not valid
        if (!formattedInput.match(expiryDateRegex)) {
            expiryErrorMessageElement.textContent = "Please enter a valid expiry date in the format MM/YY.";
        } else {
            expiryErrorMessageElement.textContent = "";
        }
        if (!cardNumber.match(cardNumberRegex)) {
            cardErrorMessageElement.textContent = "Please enter a valid 16-digit card number.";
        } else {
            cardErrorMessageElement.textContent = "";
        }

        if (!expiryDate.match(expiryDateRegex)) {
            expiryErrorMessageElement.textContent = "Please enter a valid expiry date in the format MM/YY.";
        } else {
            expiryErrorMessageElement.textContent = "";
        }
    });

    function confirmDeposit() {
        // Retrieve form elements
        var depositAmount = document.getElementById("depositAmount").value.trim();
        var cardNumber = cardNumberInput.value.trim().replace(/ /g, ""); // Remove spaces
        var expiryDate = expiryDateInput.value.trim();
        var securityCode = document.getElementById("securitycode").value.trim();
        var nameoncard = document.getElementById("nameoncard").value.trim();

        // Log the values
        console.log("Deposit Amount:", depositAmount);
        console.log("Card Number:", cardNumber);
        console.log("Expiry Date:", expiryDate);
        console.log("Security Code:", securityCode);
        console.log("Name on card:", nameoncard);
        window.location.href = '/user/withdraw/history'
    }
</script>
@endpush
