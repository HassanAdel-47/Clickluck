<?php $__env->startSection('content'); ?>
<section class="wallet__charged pt-100 pb-100"
    style="background-image: url('<?php echo e(asset($activeTemplateTrue . 'images/walletCharged.svg')); ?>') ">
    <div class="w-100 h-100 d-flex align-items-center justify-content-center">
        <div class="d-flex flex-column align-items-center justify-content-center gap-4 ">
            <h1>
                Wallet Charged!
            </h1>
            <p>
                Your Wallet Has Been Charged With $50.00 Successfully
            </p>
            <a class="btn btn--primary" href="/">Go To Homepage</a>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script>
    (function ($) {
        "use strict";
        $('.detailBtn').on('click', function () {
            var modal = $('#detailModal');
            var userData = $(this).data('user_data');
            var html = ``;
            userData.forEach(element => {
                if (element.type != 'file') {
                    html += `
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>${element.name}</span>
                            <span">${element.value}</span>
                        </li>`;
                }
            });
            modal.find('.userData').html(html);

            if ($(this).data('admin_feedback') != undefined) {
                var adminFeedback = `
                        <div class="my-3">
                            <strong><?php echo app('translator')->get('Admin Feedback'); ?></strong>
                            <p>${$(this).data('admin_feedback')}</p>
                        </div>
                    `;
            } else {
                var adminFeedback = '';
            }

            modal.find('.feedback').html(adminFeedback);

            modal.modal('show');
        });
    })(jQuery);
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make($activeTemplate . 'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Web Development\Lotto\ClickLuck\ClickLuck\resources\views/templates/basic/user/withdraw/log.blade.php ENDPATH**/ ?>