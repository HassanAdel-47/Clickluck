<?php
$counters = getContent('counter.element', false, 3, true);
?>

<section class="overview-section pb-50 "
    style="background-image: url('<?php echo e(asset($activeTemplateTrue . 'images/money_gold.png')); ?>'); ">
    <div class="container w-100 ">
        <div class="w-100 row d-flex align-items-center justify-content-center">
            <h1 class="gold__title text-center ">Join Now</h1>
            <h1 class="black__title__bold  text-center">Join Now</h1>
            <p class="title__slogan text-center">Become one of our winners!</p>
        </div>
        <div class="row mt-4">
            <div
                class="left align-items-center align-items-lg-start col-lg-4 d-flex flex-column justify-content-center text-justify">
                <p>Lorem ipsum dolor sit amet consectetur. Integer egestas scelerisque ut phasellus pharetra nibh
                    molestie. Gravida et id condimentum mi condimentum sem quam. Viverra porttitor lectus ac imperdiet
                    at lectus lacus et imperdiet. Ut adipiscing libero nunc nisi nascetur dolor consequat quis in.</p>
                <a class="btn btn--base wow fadeInUp mt-4" data-wow-duration="0.5s" data-wow-delay="0.7s"
                    href="<?php echo e(@$banner->data_values->button_url); ?>">Become A Winner</a>
            </div>
            <div class="col-lg-2"> </div>
            <div class="right col-lg-6  d-flex flex-column align-items-end justify-content-end">
                <div class="row d-flex gap-4 justify-content-center justify-content-lg-end mt-4 mt-lg-0">
                    <div class="overview__square d-flex flex-column gap-4 justify-content-center align-items-center">
                        <h2>
                            +10K
                        </h2>
                        <p>
                            Total Winners
                        </p>
                    </div>
                    <div class="overview__square d-flex flex-column gap-4 justify-content-center align-items-center">
                        <h2>
                            +10K
                        </h2>
                        <p>
                            Total Users
                        </p>
                    </div>
                    <div class="overview__square d-flex flex-column gap-4 justify-content-center align-items-center">
                        <h2>
                            +10K
                        </h2>
                        <p>
                            Total Viewers
                        </p>
                    </div>
                    <div class="overview__square d-flex flex-column gap-4 justify-content-center align-items-center">
                        <h2>
                            +10K
                        </h2>
                        <p>
                            Total Visitors
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<?php /**PATH D:\Web Development\Lotto\ClickLuck\ClickLuck\resources\views/templates/basic/sections/counter.blade.php ENDPATH**/ ?>