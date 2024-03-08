<?php $__env->startSection('content'); ?>
<!-- dashboard section start -->
<section class="pt-100 pb-100 win__history ">
    <div class="container">
        <div class="row mt-3 me-5">
            <div>
                <div class="w-full d-flex justify-content-start">
                    <p class="win__history__title">Purchase History</p>
                </div>
                <div class="pagination_buttons w-full d-flex align-items-center justify-content-end">
                    <p class="me-2">Showing Results 1-10 of 20</p>
                    <button onclick="console.log('test')" class="me-4"><img class="w-75 "
                            src="<?php echo e(asset($activeTemplateTrue . 'images/Arrow.svg')); ?>" alt="image"></button>
                    <button onclick="console.log('test')"><img class="w-75"
                            src="<?php echo e(asset($activeTemplateTrue . 'images/Arrow.svg')); ?>" alt="image"></button>
                </div>
                <div class="recentTable mt-2">
                    <table class="table table-bordered dt-responsive">
                        <thead>
                            <tr>
                                <th>Ticket Number</th>
                                <th>Draw Date</th>
                                <th>Game</th>
                                <th>Winning Place</th>
                                <th>Prize</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ticket Number</td>
                                <td>20/1/2023</td>
                                <td>Game Name</td>
                                <td>1st</td>
                                <td>$5,000.00</td>
                            </tr>
                            <tr>
                                <td>Ticket Number</td>
                                <td>20/1/2023</td>
                                <td>Game Name</td>
                                <td>1st</td>
                                <td>$5,000.00</td>
                            </tr>
                            <tr>
                                <td>Ticket Number</td>
                                <td>20/1/2023</td>
                                <td>Game Name</td>
                                <td>1st</td>
                                <td>$5,000.00</td>
                            </tr>
                            <tr>
                                <td>Ticket Number</td>
                                <td>20/1/2023</td>
                                <td>Game Name</td>
                                <td>1st</td>
                                <td>$5,000.00</td>
                            </tr>
                            <tr>
                                <td>Ticket Number</td>
                                <td>20/1/2023</td>
                                <td>Game Name</td>
                                <td>1st</td>
                                <td>$5,000.00</td>
                            </tr>
                            <tr>
                                <td>Ticket Number</td>
                                <td>20/1/2023</td>
                                <td>Game Name</td>
                                <td>1st</td>
                                <td>$5,000.00</td>
                            </tr>
                            <tr>
                                <td>Ticket Number</td>
                                <td>20/1/2023</td>
                                <td>Game Name</td>
                                <td>1st</td>
                                <td>$5,000.00</td>
                            </tr>
                            <tr>
                                <td>Ticket Number</td>
                                <td>20/1/2023</td>
                                <td>Game Name</td>
                                <td>1st</td>
                                <td>$5,000.00</td>
                            </tr>
                            <tr>
                                <td>Ticket Number</td>
                                <td>20/1/2023</td>
                                <td>Game Name</td>
                                <td>1st</td>
                                <td>$5,000.00</td>
                            </tr>
                            <tr>
                                <td>Ticket Number</td>
                                <td>20/1/2023</td>
                                <td>Game Name</td>
                                <td>1st</td>
                                <td>$5,000.00</td>
                            </tr>
                            <tr>
                                <td>Ticket Number</td>
                                <td>20/1/2023</td>
                                <td>Game Name</td>
                                <td>1st</td>
                                <td>$5,000.00</td>
                            </tr>
                            <tr>
                                <td>Ticket Number</td>
                                <td>20/1/2023</td>
                                <td>Game Name</td>
                                <td>1st</td>
                                <td>$5,000.00</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- dashboard section end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Web Development\Lotto\ClickLuck\ClickLuck\resources\views/templates/basic/partials/lotteries.blade.php ENDPATH**/ ?>