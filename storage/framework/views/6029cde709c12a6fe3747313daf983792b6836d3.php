<?php $__env->startSection('content'); ?>
<!-- dashboard section start -->
<section class="pt-100 pb-100 Deposit__history ">
    <div>
        <div class="row ms-2 me-2 lg:mt-3 lg:me-5">
            <div>
                <div class="w-full d-flex justify-content-between">
                    <p class="Deposit__history__title">My tickets</p>
                </div>
                <div class="pagination_buttons w-full d-flex align-items-center justify-content-between my-3">
                    
                    <div class="mt-3">
                        <?php echo e(paginateLinks($tickets)); ?>

                    </div>
                </div>
                <div class="recentTable mt-2">
                    <table id="dataTable" class="table table-bordered dt-responsive">
                        <thead>
                            <tr>
                                <th>Ticket Number</th>
                                <th>Purchase Date</th>
                                <th>Ticket Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($ticket->ticket_number); ?></td>
                                <td><?php echo e($ticket->created_at); ?></td>
                                <td><?php echo e($ticket->total_price); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td class="rounded-bottom text-center" colspan="100%"> <?php echo e(__($emptyMessage)); ?>

                                </td>
                            </tr>
                            <?php endif; ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- dashboard section end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Web Development\Lotto\ClickLuck\ClickLuck\resources\views/templates/basic/user/lottery/tickets.blade.php ENDPATH**/ ?>