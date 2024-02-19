@php
$banner = getContent('banner.content', true);
@endphp

<section class="hero  bg_img"
    style="background-image: url('{{ asset($activeTemplateTrue . 'images/banner-bg.png')}}'); ">
    <div class="container">
        <div class="row justify-content-center justify-content-lg-start">
            <div class="col-xxl-7 col-xl-8 col-lg-10 text-center text-lg-start w-100">
                <h2 class="hero__title text-center text-lg-start wow fadeInUp col-lg-7 mt-4 mt-lg-0"
                    data-wow-duration="0.5s" data-wow-delay="0.3s">
                    ClickLuck - Your Ticket to Excitement!</h2>
                <p class="hero__description text-justify wow fadeInUp mt-5 mt-lg-3 col-lg-5" data-wow-duration="0.5s"
                    data-wow-delay="0.5s">
                    {{ __(@$banner->data_values->subheading) }}</p>
                <div class="d-flex gap-4 my-5 my-lg-4 justify-content-center justify-content-lg-start">
                    <div class="hero__square ">
                        <div class="hero__square__inner d-flex justify-content-center align-items-center">
                            <p>999</p>
                        </div>
                        <p class="mt-2 hero__square__text">Days</p>
                    </div>
                    <div class="hero__square ">
                        <div class="hero__square__inner d-flex justify-content-center align-items-center">
                            <p>24</p>
                        </div>
                        <p class="mt-2 hero__square__text">Hours</p>
                    </div>
                    <div class="hero__square ">
                        <div class="hero__square__inner d-flex justify-content-center align-items-center">
                            <p>60</p>
                        </div>
                        <p class="mt-2 hero__square__text">Minutes</p>
                    </div>
                    <div class="hero__square ">
                        <div class="hero__square__inner d-flex justify-content-center align-items-center">
                            <p>60</p>
                        </div>
                        <p class="mt-2 hero__square__text">Seconds</p>
                    </div>
                </div>
                <div class="d-flex w-100 justify-content-evenly justify-content-lg-between mt-4 mt-lg-0">
                    <a class="btn btn--base wow fadeInUp mt-4" data-wow-duration="0.5s" data-wow-delay="0.7s"
                        href="{{ @$banner->data_values->button_url }}">{{ __(@$banner->data_values->button_name) }}</a>

                </div>
            </div>
        </div>
    </div>
</section>
