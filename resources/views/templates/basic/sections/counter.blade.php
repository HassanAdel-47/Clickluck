@php
$counters_element = getContent('counter.element');
$counter_content = getContent('counter.content',true);
// dd($counters_element);
@endphp

<section class="overview-section pb-50 "
    style="background-image: url('{{ asset($activeTemplateTrue . 'images/money_gold.png')}}'); ">
    <div class="container w-100 ">
        <div class="wow bounceInUp w-100 row d-flex align-items-center justify-content-center" data-wow-duration="1s"
            data-wow-delay="0.1s">
            <h1 class="gold__title text-center ">{{ __(@$counter_content->data_values->heading) }}</h1>
            <h1 class="black__title__bold  text-center">{{ __(@$counter_content->data_values->heading) }}</h1>
            <p class="title__slogan text-center">{{ __(@$counter_content->data_values->sub_heading) }}</p>
        </div>
        <div class="row  mt-4">
            <div class="left wow bounceInLeft align-items-center align-items-lg-start col-lg-4 d-flex flex-column justify-content-center text-justify"
                data-wow-duration="1s" data-wow-delay="0.1s">
                <p>{{ __(@$counter_content->data_values->p) }}</p>
                <a class="btn btn--base" href="{{ @$banner->data_values->button_url }}">Become A Winner</a>
            </div>
            <div class="col-lg-2"> </div>
            <div class="right col-lg-6  wow bounceInRight  d-flex flex-column align-items-end justify-content-end"
                data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="row d-flex gap-4 justify-content-center justify-content-lg-end mt-4 mt-lg-0">
                    @foreach ($counters_element as $counter_element)
                    <div class="overview__square d-flex flex-column gap-4 justify-content-center align-items-center">
                        <h2>
                            {{$counter_element->data_values->number}}
                        </h2>
                        <p>
                            {{$counter_element->data_values->title}}

                        </p>
                        {!!$counter_element->data_values->icon!!}
                    </div>
                    @endforeach

                    {{-- <div
                        class="overview__square d-flex flex-column gap-4 justify-content-center align-items-center">
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
                    </div> --}}

                </div>

            </div>
        </div>
    </div>
</section>