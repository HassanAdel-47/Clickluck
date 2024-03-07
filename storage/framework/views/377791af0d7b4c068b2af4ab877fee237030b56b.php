<?php $__env->startSection('content'); ?>
<section class="pt-100 pb-50">
    <div class="row">
        <div class="col-lg-12">
            
            <?php echo $__env->make($activeTemplate . 'sections.lottery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <?php echo $__env->make($activeTemplate . 'partials.auth_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if($phases->hasPages()): ?>
    <div class="d-flex justify-content-center mt-5">
        <?php echo e(paginateLinks($phases)); ?>

    </div>
    <?php endif; ?>
</section>
<?php echo $__env->make($activeTemplate . 'sections.cta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make($activeTemplate . 'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Web Development\Lotto\ClickLuck\ClickLuck\resources\views/templates/basic/lottery.blade.php ENDPATH**/ ?>