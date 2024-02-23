<?php
$about = getContent('about.content', true);
?>
<section class="pt-100 pb-50 about__page"
    style="background-image: url('<?php echo e(asset($activeTemplateTrue . 'images/About.png')); ?>'); ">
    <div class="container ">
        <div class="row mt-5">
            <div class="col-lg-6 ps-lg-5 mt-lg-0">
                <h2 class="section-title my-4"><?php echo e(__(@$about->data_values->heading)); ?></h2>
                Lorem ipsum dolor sit amet consectetur. Integer egestas scelerisque ut phasellus pharetra nibh molestie.
                Gravida et id condimentum mi condimentum sem quam. Viverra porttitor lectus ac imperdiet at lectus lacus
                et imperdiet. Ut adipiscing libero nunc nisi nascetur dolor consequat quis in.
            </div>
        </div>
    </div>
</section><?php /**PATH D:\Web Development\Lotto\ClickLuck\ClickLuck\resources\views/templates/basic/sections/about.blade.php ENDPATH**/ ?>