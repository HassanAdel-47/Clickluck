<?php $__env->startSection('content'); ?>
<!-- dashboard section start -->
<section class="pt-100 pb-100 Win__history ">
    <div>
        <div class="row ms-2 me-2 lg:mt-3 lg:me-5">
            <div>
                <div class="w-full d-flex justify-content-between">
                    <p class="Deposit__history__title">My withdraws</p>
                </div>
                <div class="pagination_buttons w-full d-flex align-items-center justify-content-between my-3">
                    <div class="mt-3">
                        <?php echo e(paginateLinks($withdraws)); ?>

                    </div>
                </div>
                <div class="recentTable mt-2">
                    <table id="dataTable" class="table table-bordered dt-responsive">
                        <thead>
                            <tr>
                                <th>withdraw method</th>
                                <th>amount</th>
                                <th>currency</th>
                                <th>rate</th>
                                <th>charge</th>
                                <th>after_charge</th>
                                <th>withdraw_information</th>
                                <th>status</th>
                                <th>admin_feedback</th>
                                <th>withdraw date</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $withdraws; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $withdraw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($withdraw->method->name); ?></td>
                                <td><?php echo e($withdraw->amount); ?></td>
                                <td><?php echo e($withdraw->currency); ?></td>
                                <td><?php echo e($withdraw->rate); ?></td>
                                <td><?php echo e($withdraw->charge); ?></td>
                                <td><?php echo e($withdraw->after_charge); ?></td>
                                <td><?php echo e($withdraw->withdraw_information); ?></td>
                                <td><?php echo e($withdraw->status); ?></td>
                                <td><?php echo e($withdraw->admin_feedback); ?></td>
                                <td><?php echo e($withdraw->created_at); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td class="rounded-bottom text-center" colspan="100%"> <?php echo e(__($emptyMessage)); ?></td>
                            </tr>
                            <?php endif; ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make($activeTemplate . 'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Web Development\Lotto\ClickLuck\ClickLuck\resources\views/templates/basic/user/withdraw/log.blade.php ENDPATH**/ ?>