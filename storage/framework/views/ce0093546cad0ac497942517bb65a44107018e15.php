<?php
$content = getContent('feature.content', true);
$features = getContent('feature.element', false, null, true);
?>

<!-- feature section start -->
<section class="featured__section pt-100 pb-50">
    <div class="container">
        <div class="w-100 row d-flex align-items-center justify-content-center">
            <h1 class="black__title text-center ">What Our Clients Say About Us</h1>
            <h1 class="black__title__bold  text-center ">What Our Clients Say About Us</h1>
        </div>
        <div class="row mt-5">
        </div><!-- row end -->
        <div class="row justify-content-center gy-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                <div class="feature-card">
                    <div class="feature-card__icon text--base text-shadow--base">
                        <img class="w-25" src="<?php echo e(asset($activeTemplateTrue . 'images/quotation.png')); ?>" alt="image">
                    </div>
                    <div class="feature-card__content mt-4">
                        <p class="mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium ipsum
                            ullam doloremque veritatis qui molestiae illo aliquid provident officia eaque beatae, nisi,
                            deleniti nemo neque quo modi placeat architecto a? </p>
                        <h3 class="title mt-3">Client Name</h3>
                    </div>
                </div><!-- feature-card end -->
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                <div class="feature-card">
                    <div class="feature-card__icon text--base text-shadow--base">
                        <img class="w-25" src="<?php echo e(asset($activeTemplateTrue . 'images/quotation.png')); ?>" alt="image">
                    </div>
                    <div class="feature-card__content mt-4">
                        <p class="mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium ipsum
                            ullam doloremque veritatis qui molestiae illo aliquid provident officia eaque beatae, nisi,
                            deleniti nemo neque quo modi placeat architecto a? </p>
                        <h3 class="title mt-3">Client Name</h3>
                    </div>
                </div><!-- feature-card end -->
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                <div class="feature-card">
                    <div class="feature-card__icon text--base text-shadow--base">
                        <img class="w-25" src="<?php echo e(asset($activeTemplateTrue . 'images/quotation.png')); ?>" alt="image">
                    </div>
                    <div class="feature-card__content mt-4">
                        <p class="mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium ipsum
                            ullam doloremque veritatis qui molestiae illo aliquid provident officia eaque beatae, nisi,
                            deleniti nemo neque quo modi placeat architecto a? </p>
                        <h3 class="title mt-3">Client Name</h3>
                    </div>
                </div><!-- feature-card end -->
            </div>
        </div>
    </div>
</section>
<!-- feature section end -->
<?php /**PATH D:\Web Development\Lotto\ClickLuck\ClickLuck\resources\views/templates/basic/sections/feature.blade.php ENDPATH**/ ?>