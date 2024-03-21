@php
    $banner = getContent('banner.content', true);
    $banner_phase = getBannerPhase($banner->data_values->related_lottery_phase_id);
@endphp
<section class="hero bg_img" style="background-image: url('{{ asset($activeTemplateTrue . 'images/banner-bg.png') }}'); ">
    <div class="blackLayout"></div>
    <div class="container">
        <div class="row justify-content-center justify-content-lg-start">
            <div class="col-xxl-7 col-xl-8 col-lg-10 text-center text-lg-start w-100">
                <h2 class="hero__title text-center text-lg-start wow fadeInUp col-lg-7 mt-4 mt-lg-0"
                    data-wow-duration="0.5s" data-wow-delay="0.3s">
                    ClickLuck - Your Ticket to Excitement!</h2>
                <p class="hero__description text-justify wow fadeInUp mt-5 mt-lg-3 col-lg-5" data-wow-duration="0.5s"
                    data-wow-delay="0.5s">
                    {{ __(@$banner->data_values->subheading) }}</p>

                @if (@$banner_phase != null )
                    <div class="d-flex gap-4 my-5 my-lg-4 justify-content-center justify-content-lg-start">
                        <div class="hero__square ">
                            <div class="hero__square__inner d-flex justify-content-center align-items-center">
                                <p id="days">0</p>
                            </div>
                            <p class="mt-2 hero__square__text">Days</p>
                        </div>
                        <div class="hero__square ">
                            <div class="hero__square__inner d-flex justify-content-center align-items-center">
                                <p id="hours">0</p>
                            </div>
                            <p class="mt-2 hero__square__text">Hours</p>
                        </div>
                        <div class="hero__square ">
                            <div class="hero__square__inner d-flex justify-content-center align-items-center">
                                <p id="minutes">0</p>
                            </div>
                            <p class="mt-2 hero__square__text">Minutes</p>
                        </div>
                        <div class="hero__square ">
                            <div class="hero__square__inner d-flex justify-content-center align-items-center">
                                <p id="seconds">0</p>
                            </div>
                            <p class="mt-2 hero__square__text">Seconds</p>
                        </div>
                    </div>

                    <div class="d-flex w-100 justify-content-evenly justify-content-lg-between mt-4 mt-lg-0">
                        <a class="btn btn--base wow fadeInUp mt-4" data-wow-duration="0.5s" data-wow-delay="0.7s"
                            href="{{ route('lottery.machine', @$banner_phase->id) }}">{{ __(@$banner->data_values->button_name) }}</a>

                    </div>
                @else
                    <div class="d-flex w-100 justify-content-evenly justify-content-lg-between mt-4 mt-lg-0">
                        <a class="btn btn--base wow fadeInUp mt-4" data-wow-duration="0.5s" data-wow-delay="0.7s"
                            href="{{ route('lottery') }}">{{ __(@$banner->data_values->button_name) }}</a>

                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@push('script')
    <script>
        // var countDownDate = new Date("2024-03-29 00:00:00").getTime();
        var countDownDate = new Date("{{ @$banner_phase->draw_date }}").getTime();
        var x = setInterval(function() {

            var now = new Date().getTime();
            var distance = countDownDate - now;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;

            if (distance < 0) {
                clearInterval(x);
                document.getElementById("days").innerHTML = 0;
                document.getElementById("hours").innerHTML = 0;
                document.getElementById("minutes").innerHTML = 0;
                document.getElementById("seconds").innerHTML = 0;
            }
        }, 1000);
    </script>
@endpush
