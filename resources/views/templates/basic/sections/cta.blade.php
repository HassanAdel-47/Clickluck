@php
$cta = getContent('cta.content', true);
@endphp

<!-- cta section start -->
<section class="recent__section pt-100  pb-100 bg_img"
    style="background-image:  url('{{ asset($activeTemplateTrue . 'images/OurRecentWinners.jpg')}}') ">
    <div class="container">
        <div class="row justify-content-center wow fadeInUp " data-wow-duration="0.5s" data-wow-delay="0.3s">
            <div class="w-100 row d-flex align-items-center justify-content-center re">
                <h1 class="gold__title text-center ">{{ __(@$cta->data_values->heading) }}</h1>
                <h1 class="grey__title__bold  text-center">{{ __(@$cta->data_values->heading) }}</h1>
                <p class="title__slogan text-center">{{ __(@$cta->data_values->subheading) }}</p>
            </div>
            <div class="d-flex w-100 justify-content-evenly justify-content-lg-between mt-4 mt-lg-0">
                <a class="btn btn--base wow fadeInUp mt-4" data-wow-duration="0.5s" data-wow-delay="0.7s"
                    href="{{ @$cta->data_values->button_url }}">{{ __(@$cta->data_values->button_name) }}</a>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="w-100 d-flex flex-column align-items-end mt-5 lg:mt-0">
                    <img src="{{@$cta->data_values->image}}" alt="Heu">

                </div>
            </div>
            {{-- <div class="col-lg-8 text-center">
                <div class="recentTable mt-5">
                    <table class="table table-bordered dt-responsive">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Tickets</th>
                                <th>Game</th>
                                <th>Win</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>User</td>
                                <td>10</td>
                                <td>Game Name</td>
                                <td>$5,000.00</td>
                            </tr>
                            <tr>
                                <td>User</td>
                                <td>10</td>
                                <td>Game Name</td>
                                <td>$5,000.00</td>
                            </tr>
                            <tr>
                                <td>User</td>
                                <td>10</td>
                                <td>Game Name</td>
                                <td>$5,000.00</td>
                            </tr>
                            <tr>
                                <td>User</td>
                                <td>10</td>
                                <td>Game Name</td>
                                <td>$5,000.00</td>
                            </tr>
                            <tr>
                                <td>User</td>
                                <td>10</td>
                                <td>Game Name</td>
                                <td>$5,000.00</td>
                            </tr>
                            <tr>
                                <td>User</td>
                                <td>10</td>
                                <td>Game Name</td>
                                <td>$5,000.00</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!-- cta section end -->
<script>
    console.log('Hello world')
</script>
