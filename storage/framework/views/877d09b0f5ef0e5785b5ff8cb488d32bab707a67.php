<?php $__env->startSection('content'); ?>
<!-- blog section start -->
<section>
    <!-- <div class="machine"> -->
    <div class="machine" style="background-image:  url('<?php echo e(asset($activeTemplateTrue . 'images/Machine1.jpg')); ?>') ">
        <!-- <img src="<?php echo e(asset($activeTemplateTrue . 'images/Machine1.jpg')); ?>" alt=""> -->
        <div class="red">
            <div class="machine__counter">
                <div id="odometer" class="odometer ">
                    0
                </div>
                <div id="odometerTwo" class="odometer ">
                    0
                </div>
                <div id="odometerThree" class="odometer ">
                    0
                </div>
                <div id="odometerFour" class="odometer ">
                    0
                </div>
                <div id="odometerFive" class="odometer ">
                    0
                </div>
                <div id="odometerSix" class="odometer ">
                    0
                </div>
                <div id="odometerSeven" class="odometer ">
                    0
                </div>
                <div id="odometerEight" class="odometer ">
                    0
                </div>
            </div>
        </div>
        <div class="machineInfo">
            <p>
                1st Place Winning Ticket:&nbsp; <span> - - - - - -</span>&nbsp;
                2nd Place Winning Ticket: <span>14m:60s</span> 3rd Place Winning Ticket: <span>29m:60s</span>
            </p>
        </div>

    </div>

</section>
<?php if($sections->secs != null): ?>
<?php $__currentLoopData = json_decode($sections->secs); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make($activeTemplate . 'sections.' . $sec, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<!-- blog section end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make($activeTemplate . 'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Web Development\Lotto\ClickLuck\ClickLuck\resources\views/templates/basic/blog.blade.php ENDPATH**/ ?>