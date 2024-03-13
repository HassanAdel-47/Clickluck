@php
$about = getContent('about.content', true);
@endphp
<section class="pt-100 pb-50 about__page"
@if (@$about->data_values->has_image==1)
style="background-image: url('{{ asset($activeTemplateTrue . @$about->data_values->image)}}'); "
@endif
>    <div class="container ">
        <div class="row mt-5">
            <div class="col-lg-6 ps-lg-5 mt-lg-0">
                <h2 class="section-title my-4">{{ __(@$about->data_values->heading) }}</h2>
                {{__(@$about->data_values->description)}}
            </div>
        </div>
    </div>
</section>
