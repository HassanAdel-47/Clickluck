@php
$content = getContent('how_it_work.content', true);
$elements = getContent('how_it_work.element', false, null, true);
@endphp
<!-- how work section start -->
<section class="how__join" style="background-image: url('{{ asset($activeTemplateTrue . 'images/HowToJoin.png')}}') ">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="w-100 row d-flex align-items-center justify-content-center wow bounceInUp"
                data-wow-duration="1s" data-wow-delay="0.1s">
                <h1 class="gold__title text-center ">{{ __(@$content->data_values->heading) }}</h1>
                <h1 class="grey__title__bold  text-center">{{ __(@$content->data_values->heading) }}</h1>
                <p class="title__slogan text-center">{{ __(@$content->data_values->subheading) }}</p>
            </div>
            <div class="row mt-5 d-flex justify-content-between align-items-center">
                <div class="circles__container col-lg-6 d-flex align-items-center justify-content-center wow bounceIn"
                    data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="left__circles my-2">
                        <div class="hero__circle hero__circle__one  ">
                            <div class="hero__circle__inner w-full d-flex justify-content-center align-items-center">
                                <p>1</p>
                            </div>
                            <p class="mt-2 hero__circle__text">{{ __(@$elements[0]->data_values->title) }}</p>
                        </div>

                        <div class="hero__circle hero__circle__two ">
                            <div class="hero__circle__inner w-full d-flex justify-content-center align-items-center">
                                <p>4</p>
                            </div>
                            <p class="mt-2 hero__circle__text">{{ __(@$elements[1]->data_values->title) }}</p>
                        </div>
                    </div>
                    <img class="arrow__one" src="{{ asset($activeTemplateTrue . 'images/arrow.png')}}" alt="image">
                    <img class="arrow__two" src="{{ asset($activeTemplateTrue . 'images/arrow.png')}}" alt="image">
                    <img class="arrow__three" src="{{ asset($activeTemplateTrue . 'images/arrow.png')}}" alt="image">
                    <div class="right__circles my-2">
                        <div class="hero__circle hero__circle__three ">
                            <div class="hero__circle__inner w-full d-flex justify-content-center align-items-center">
                                <p>2</p>
                            </div>
                            <p class="mt-2 hero__circle__text">{{ __(@$elements[2]->data_values->title) }}</p>
                        </div>
                        <div class="hero__circle hero__circle__four ">
                            <div class="hero__circle__inner w-full d-flex justify-content-center align-items-center">
                                <p>3</p>
                            </div>
                            <p class="mt-2 hero__circle__text">{{ __(@$elements[3]->data_values->title) }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-center wow flipInX"
                    data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="video__side w-100 d-flex flex-column align-items-end mt-5 lg:mt-0">
                        <video class="w-100 " src=""></video>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- how work section end -->