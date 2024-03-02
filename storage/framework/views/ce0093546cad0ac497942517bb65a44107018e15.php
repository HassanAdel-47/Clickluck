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
        </div>
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
                        <p class="title mt-3">Client Name</p>
                    </div>
                </div>
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
                        <p class="title mt-3">Client Name</p>
                    </div>
                </div>
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
                        <p class="title mt-3">Client Name</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="machine" style="background-image:  url('<?php echo e(asset($activeTemplateTrue . 'images/Machine.jpg')); ?>') ">
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
            <div class="machineInfo">
                <p>
                    1st Place Winning Ticket:&nbsp; <span> - - - - - -</span>&nbsp;
                    2nd Place Winning Ticket: <span>14m:60s</span> 3rd Place Winning Ticket: <span>29m:60s</span>
                </p>
            </div>
        </div>

    </div> -->


</section>
<!-- feature section end -->

<script>
    function rnd(minVal, maxVal) {
        var randVal = minVal + (Math.random() * (maxVal - minVal));
        return Math.round(randVal);
    }
    odometer.innerHTML = 100;
    setTimeout(function () {
        odometer.innerHTML = rnd(0, 99);
        const num = '1'
        odometer.innerHTML = 1 + num;
        secondCounter()
    }, 1000);
    odometerTwo.innerHTML = 100;
    function secondCounter() {
        setTimeout(function () {
            odometerTwo.innerHTML = rnd(0, 99);
            const num = '2'
            odometerTwo.innerHTML = 1 + num;
            thirdCounter()
        }, 1500);
    }
    odometerThree.innerHTML = 100;
    function thirdCounter() {
        setTimeout(function () {
            odometerThree.innerHTML = rnd(0, 99);
            const num = '3'
            odometerThree.innerHTML = 1 + num;
            fourthCounter()
        }, 2000);
    }
    odometerFour.innerHTML = 100;
    function fourthCounter() {
        setTimeout(function () {
            odometerFour.innerHTML = rnd(0, 99);
            const num = '4'
            odometerFour.innerHTML = 1 + num;
            fiveCounter()
        }, 2000);
    }
    odometerFive.innerHTML = 100;
    function fiveCounter() {
        setTimeout(function () {
            odometerFive.innerHTML = rnd(0, 99);
            const num = '5'
            odometerFive.innerHTML = 1 + num;
            sixCounter()
        }, 2000);
    }
    odometerSix.innerHTML = 100;
    function sixCounter() {
        setTimeout(function () {
            odometerSix.innerHTML = rnd(0, 99);
            const num = '6'
            odometerSix.innerHTML = 1 + num;
            sevenCounter()
        }, 2000);
    }
    odometerSeven.innerHTML = 100;
    function sevenCounter() {
        setTimeout(function () {
            odometerSeven.innerHTML = rnd(0, 99);
            const num = '7'
            odometerSeven.innerHTML = 1 + num;
            eightCounter()
        }, 2000);
    }
    odometerEight.innerHTML = 100;
    function eightCounter() {
        setTimeout(function () {
            odometerEight.innerHTML = rnd(0, 99);
            const num = '8'
            odometerEight.innerHTML = 1 + num;
        }, 2000);
    }
</script><?php /**PATH D:\Web Development\Lotto\ClickLuck\ClickLuck\resources\views/templates/basic/sections/feature.blade.php ENDPATH**/ ?>