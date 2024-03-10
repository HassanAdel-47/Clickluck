<?php $__env->startSection('content'); ?>
<section class="pt-100 pb-100">
    <div class="Deposit">
        <div class="row justify-content-center">
            <div class="d-flex align-items-center">
                <a href="/user/tickets" class="me-2"><img
                        src="<?php echo e(asset($activeTemplateTrue . 'images/Back_Arrow.svg')); ?>" alt="image"></a>
                <p class="Deposit__history__title ml-4">Deposit Money</p>
            </div>
            <form id="depositForm">
                <div class="d-flex flex-column w-25 mt-3">
                    <label for="depositAmount">Deposit Amount *</label>
                    <input type=" text" id="depositAmount" name="depositAmount" placeholder="50.00" required>
                </div>
                <div class="d-flex flex-column w-25 mt-3 ">
                    <label for="paymentMethod">Payment Method *</label>
                    <select id="paymentMethod" name="paymentMethod" required>
                        <option value="paypal" class="depositOption">PayPal</option>
                        <option value="creditCard" class="depositOption">Credit Card</option>
                        <option value="bankTransfer" class="depositOption">Bank Transfer</option>
                    </select>
                </div>


                <button class="btn btn--primary mt-3" type="submit" onclick="confirmDeposit()">Confirm
                    Deposit</button>
            </form>
        </div>
</section>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script>
    function confirmDeposit() {
        var depositAmount = document.getElementById("depositAmount").value;
        var paymentMethod = document.getElementById("paymentMethod").value;
        console.log("Deposit Amount: " + depositAmount + "\nPayment Method: " + paymentMethod);
    }
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make($activeTemplate . 'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Web Development\Lotto\ClickLuck\ClickLuck\resources\views/templates/basic/user/kyc/form.blade.php ENDPATH**/ ?>