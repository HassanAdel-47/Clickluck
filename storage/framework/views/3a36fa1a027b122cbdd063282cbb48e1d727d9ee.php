<?php $__env->startSection('content'); ?>
<section class="wallet__charged pt-100 pb-100 "
    style="background-image: url('<?php echo e(asset($activeTemplateTrue . 'images/walletCharged.svg')); ?>') ">
    <div class="w-100 h-100 d-flex align-items-center justify-content-center">
        <div class="d-flex flex-column align-items-center justify-content-center gap-4 ">
            <h1>
                Password Changed!
            </h1>
            <p>
                Your Password Has Been Changed Successfully
            </p>
            <a class="btn btn--primary" href="/">Go To Homepage</a>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make($activeTemplate . 'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Web Development\Lotto\ClickLuck\ClickLuck\resources\views/templates/basic/user/support/index.blade.php ENDPATH**/ ?>