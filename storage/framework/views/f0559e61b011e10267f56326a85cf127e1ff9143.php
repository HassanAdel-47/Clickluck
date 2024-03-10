<?php $__env->startSection('panel'); ?>
<!-- scroll-to-top -->
<div class="scroll-to-top  d-flex justify-content-center align-items-center">
    <span class="scroll-icon">
        <img class="w-75" src="<?php echo e(asset($activeTemplateTrue . 'images/message.png')); ?>" alt="image">
    </span>
</div>

<?php echo $__env->make($activeTemplate . 'partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="main-wrapper">
    
    <?php echo $__env->yieldContent('content'); ?>
</div>
<!-- main-wrapper end -->


<?php echo $__env->make($activeTemplate . 'partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- cookies dark version start -->
<?php
$cookie = App\Models\Frontend::where('data_keys', 'cookie.data')->first();
?>
<?php if($cookie->data_values->status == Status::ENABLE && !\Cookie::get('gdpr_cookie')): ?>
<div class="cookies-card hide text-center">
    <div class="cookies-card__icon bg--base">
        <i class="las la-cookie-bite"></i>
    </div>
    <p class="cookies-card__content mt-4"><?php echo e($cookie->data_values->short_desc); ?>

        <a class="text--base" href="<?php echo e(route('cookie.policy')); ?>" target="_blank"><?php echo app('translator')->get('learn more'); ?></a>
    </p>
    <div class="cookies-card__btn mt-4">
        <a class="btn btn--base w-100 policy" href="javascript:void(0)"><?php echo app('translator')->get('Allow'); ?></a>
    </div>
</div>
<?php endif; ?>
<!-- cookies dark version end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make($activeTemplate . 'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Web Development\Lotto\ClickLuck\ClickLuck\resources\views/templates/basic/layouts/frontend.blade.php ENDPATH**/ ?>