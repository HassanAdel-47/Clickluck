@php
$content = getContent('feature.content', true);
$features = getContent('feature.element', false, null, true);
@endphp

<!-- feature section start -->
<section class="featured__section pt-100 pb-50">
    <div class="container">
        <div class="w-100 row d-flex align-items-center justify-content-center wow bounceInUp" data-wow-duration="1s"
            data-wow-delay="0.1s">
            <h1 class="black__title text-center ">{{ __(@$content->data_values->heading) }}</h1>
            <h1 class="black__title__bold  text-center ">{{ __(@$content->data_values->heading) }}</h1>
        </div>
        <div class="row mt-5">
        </div>
        <div class="row justify-content-center gy-4">
            @foreach ($features as $feature)
            <div class="col-lg-4 col-md-6 wow bounceIn" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="feature-card">
                    <div class="feature-card__icon text--base text-shadow--base">
                        <img src="{{ asset($activeTemplateTrue . 'images/quotation.png') }}" alt="image">
                    </div>
                    <div class="feature-card__content mt-4">
                        <p class="mt-3">{{$feature->data_values->description}} </p>
                        <p class="title mt-3">{{$feature->data_values->title}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>


</section>
<!-- feature section end -->

<script>

</script>