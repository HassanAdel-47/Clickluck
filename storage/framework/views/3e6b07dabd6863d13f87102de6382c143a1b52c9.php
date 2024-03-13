<!doctype html>
<html lang="<?php echo e(config('app.locale')); ?>" itemscope itemtype="http://schema.org/WebPage">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> <?php echo e($general->siteName(__($pageTitle))); ?></title>

    <?php echo $__env->make('partials.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <link href="<?php echo e(asset('assets/global/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/global/css/all.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/global/css/line-awesome.min.css')); ?>" rel="stylesheet" />

    <link href="<?php echo e(asset($activeTemplateTrue . 'css/slick.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset($activeTemplateTrue . 'css/main.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset($activeTemplateTrue . 'css/bootstrap-fileinput.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset($activeTemplateTrue . 'css/custom.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset($activeTemplateTrue . 'css/odometer.css')); ?>" rel="stylesheet">

    <?php echo $__env->yieldPushContent('style-lib'); ?>

    <?php echo $__env->yieldPushContent('style'); ?>

    <link
        href="<?php echo e(asset($activeTemplateTrue . 'css/color.php')); ?>?color=<?php echo e($general->base_color); ?>&secondColor=<?php echo e($general->secondary_color); ?>"
        rel="stylesheet">
</head>

<body>

    <div class="preloader">
        <div class="preloader-container">
            <span class="animated-preloader"></span>
        </div>
    </div>

    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
        <span class="scroll-icon">
            <i class="fa fa-rocket" aria-hidden="true"></i>
        </span>
    </div>
    <!-- scroll-to-top end -->
    <?php echo $__env->make($activeTemplate . 'partials.auth_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-wrapper">
        <?php echo $__env->make($activeTemplate . 'partials.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">
            <div class="dashboard__sidebar col-lg-2 text-center pt-100 pb-100">
                <div class="sidebar">
                    <ul>
                        <li class="active">
                            <img src="<?php echo e(asset($activeTemplateTrue . 'images/Cup.svg')); ?>" alt="image">
                            <a href="/user/dashboard">Win History</a>
                        </li>
                        <li>
                            <img src="<?php echo e(asset($activeTemplateTrue . 'images/Dollar.svg')); ?>" alt="image">
                            <a href="/user/lottery">Purchase History</a>
                        </li>
                        <li>
                            <img src="<?php echo e(asset($activeTemplateTrue . 'images/ExportDollar.svg')); ?>" alt="image">
                            <a href="/user/wins">Withdraw History</a>
                        </li>
                        <li>
                            <img src="<?php echo e(asset($activeTemplateTrue . 'images/ImportDollar.svg')); ?>" alt="image">
                            <a href="/user/tickets">Deposit History</a>
                        </li>
                        <li>
                            <img src="<?php echo e(asset($activeTemplateTrue . 'images/User.svg')); ?>" alt="image">
                            <a href="/user/deposit">Profile</a>
                        </li>
                    </ul>
                    <div class="dashboard__line"></div>
                </div>

            </div>
            <div class="col-lg-9 ">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>

    </div>

    <?php echo $__env->make($activeTemplate . 'partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo e(asset('assets/global/js/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/global/js/bootstrap.bundle.min.js')); ?>"></script>

    <script src="<?php echo e(asset($activeTemplateTrue . 'js/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue . 'js/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue . 'js/odometer.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue . 'js/jquery.countdown.js')); ?>"></script>
    <script src="<?php echo e(asset($activeTemplateTrue . 'js/app.js')); ?>"></script>

    <script src="<?php echo e(asset($activeTemplateTrue . 'js/jquery.validate.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('script-lib'); ?>

    <?php echo $__env->make('partials.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('partials.plugins', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldPushContent('script'); ?>

    <script>
        (function ($) {
            "use strict";
            $(".langSel").on("change", function () {
                window.location.href = "<?php echo e(route('home')); ?>/change/" + $(this).val();
            });

        })(jQuery);
    </script>

    <script>
        (function ($) {
            "use strict";

            $('form').on('submit', function () {
                if ($(this).valid()) {
                    $(':submit', this).attr('disabled', 'disabled');
                }
            });

            var inputElements = $('[type=text],[type=password],select,textarea');
            $.each(inputElements, function (index, element) {
                element = $(element);
                element.closest('.form-group').find('label').attr('for', element.attr('name'));
                element.attr('id', element.attr('name'))
            });

            $.each($('input, select, textarea'), function (i, element) {

                if (element.hasAttribute('required')) {
                    $(element).closest('.form-group').find('label').addClass('required');
                }

            });


            $('.showFilterBtn').on('click', function () {
                $('.responsive-filter-card').slideToggle();
            });

        })(jQuery);

        // SideBar
        document.addEventListener('DOMContentLoaded', function () {
            // Get the active menu item from local storage
            var activeMenuItem = localStorage.getItem('activeMenuItem');

            // Set the initial active state based on local storage
            if (activeMenuItem) {
                document.querySelector('.sidebar .active').classList.remove('active');
                document.querySelector('.sidebar a[href="' + activeMenuItem + '"]').parentElement.classList.add('active');
            }

            // Add an event listener to set the 'active' class on click
            var menuItems = document.querySelectorAll('.sidebar a');
            menuItems.forEach(function (item) {
                item.addEventListener('click', function () {
                    // Remove 'active' class from all items
                    menuItems.forEach(function (innerItem) {
                        innerItem.parentElement.classList.remove('active');
                    });

                    // Add 'active' class to the clicked item's parent (li)
                    item.parentElement.classList.add('active');

                    // Store the active menu item in local storage
                    localStorage.setItem('activeMenuItem', item.getAttribute('href'));
                });
            });
        });
    </script>





</body>

</html><?php /**PATH D:\Web Development\Lotto\ClickLuck\ClickLuck\resources\views/templates/basic/layouts/master.blade.php ENDPATH**/ ?>