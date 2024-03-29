<!doctype html>
<html lang="{{ config('app.locale') }}" itemscope itemtype="http://schema.org/WebPage">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> {{ $general->siteName(__($pageTitle)) }}</title>

    @include('partials.seo')

    <link href="{{ asset('assets/global/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/global/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/global/css/line-awesome.min.css') }}" rel="stylesheet" />

    <link href="{{ asset($activeTemplateTrue . 'css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset($activeTemplateTrue . 'css/main.css') }}" rel="stylesheet">
    <link href="{{ asset($activeTemplateTrue . 'css/bootstrap-fileinput.css') }}" rel="stylesheet">
    <link href="{{ asset($activeTemplateTrue . 'css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset($activeTemplateTrue . 'css/animation.css') }}" rel="stylesheet">
    <link href="{{ asset($activeTemplateTrue . 'css/odometer.css') }}" rel="stylesheet">

    @stack('style-lib')

    @stack('style')

    <link
        href="{{ asset($activeTemplateTrue . 'css/color.php') }}?color={{ $general->base_color }}&secondColor={{ $general->secondary_color }}"
        rel="stylesheet">
</head>

<body>

    <div class="preloader">
        <div class="preloader-container ">
            <img src="{{ asset($activeTemplateTrue . 'images/logo.png')}}" alt="Logo">
            <p>loading...</p>
            <div class="preloader__progress">
                <div class="preloader__progress-value"></div>
            </div>
        </div>
    </div>

    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
        <span class="scroll-icon">
            <i class="fa fa-rocket" aria-hidden="true"></i>
        </span>
    </div>
    <!-- scroll-to-top end -->
    @include($activeTemplate . 'partials.auth_header')
    <div class="main-wrapper">
        @include($activeTemplate . 'partials.breadcrumb')
        <div class="row">
            <div class="dashboard__sidebar col-12 col-lg-2 text-center">
                <div class="sidebar">
                    <ul>
                        <li class="active">
                            <img src="{{ asset($activeTemplateTrue . 'images/Cup.svg') }}" alt="image">
                            <a href="{{route('user.wins')}}">Win History</a>
                        </li>
                        <li>
                            <img src="{{ asset($activeTemplateTrue . 'images/Dollar.svg') }}" alt="image">
                            <a href="{{route('user.tickets')}}">Purchase History</a>
                        </li>
                        <li>
                            <img src="{{ asset($activeTemplateTrue . 'images/ExportDollar.svg') }}" alt="image">
                            <a href="{{route('user.withdraw.history')}}">Withdraw History</a>
                        </li>
                        <li>
                            <img src="{{ asset($activeTemplateTrue . 'images/ImportDollar.svg') }}" alt="image">
                            <a href="{{route('user.deposit.history')}}">Deposit History</a>
                        </li>
                        <li>
                            <img src="{{ asset($activeTemplateTrue . 'images/user.svg') }}" alt="image">
                            <a href="{{ route('user.profile.setting') }}">@lang('Profile')</a></a>
                        </li>
                    </ul>
                    <div class="dashboard__line"></div>
                </div>

            </div>
            <div class="col-lg-9 ">
                @yield('content')
            </div>
        </div>

    </div>

    @include($activeTemplate . 'partials.footer')

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/global/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/global/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset($activeTemplateTrue . 'js/slick.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'js/wow.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'js/odometer.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'js/jquery.countdown.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'js/app.js') }}"></script>

    <script src="{{ asset($activeTemplateTrue . 'js/jquery.validate.js') }}"></script>

    @stack('script-lib')

    @include('partials.notify')

    @include('partials.plugins')

    @stack('script')

    <script>
        (function ($) {
            "use strict";
            $(".langSel").on("change", function () {
                window.location.href = "{{ route('home') }}/change/" + $(this).val();
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

</html>