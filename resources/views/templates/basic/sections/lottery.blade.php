<section class="lottary overview-section pb-50 "
    style="background-image: url('{{ asset($activeTemplateTrue . 'images/money_gold.png') }}') ">
    <div class="lottary-container container w-100 ">
        <div class="w-100 row d-flex align-items-center justify-content-center">
            <h1 class="black__title text-center ">Lotteries</h1>
            <h1 class="black__title__bold  text-center">Lotteries</h1>
        </div>
        <div class="row mt-4 d-flex justify-content-center align-items-center w-100">
            @forelse ($phases as $phase)
                <div
                    class="lottary__square__container col-12 col-md-6 col-xl-3 d-flex justify-content-center align-items-center">
                    <div class="lottary__square w-75 d-flex flex-column justify-content-center my-5 lg:my-0 ">
                        <div class=" d-flex justify-content-around align-items-between w-100 ">
                            <img src="{{ asset($activeTemplateTrue . 'images/lottary_card.png') }}" alt="image" />
                            <h6>
                                {{ $phase->lottery->name }}
                            </h6>

                        </div>
                        <h5 class="mt-2">
                            ???????????
                        </h5>
                        <div class=" mt-2 d-flex justify-content-around align-items-between w-100">
                            <p>
                                Start Date:
                            </p>
                            <p>
                                {{ date('d-m-Y', strtotime($phase->start_date)) }}
                            </p>
                        </div>
                        <div class=" mt-2 d-flex justify-content-around align-items-between w-100">
                            <p>
                                End Date:
                            </p>
                            <p>
                                {{ date('d-m-Y', strtotime($phase->draw_date)) }}

                            </p>
                        </div>
                        <div class=" mt-2 d-flex justify-content-around align-items-between w-100">
                            <p>
                                Available lotteries:
                            </p>
                            <p>
                                {{ $phase->available }}

                            </p>
                        </div>
                        <a class="btn p-2 btn--base--message wow fadeInUp mt-2" data-wow-duration="0.5s"
                            data-wow-delay="0.7s" href="{{ route('lottery.details', $phase->lottery->id) }}">
                            Buy Ticket ${{ number_format($phase->lottery->price, 2) }}</a>
                        <div class="label__running d-flex justify-content-around align-items-between">
                            <p>Running</p>
                        </div>
                    </div>
                </div>
            @empty
                <tr>
                    <td class="rounded-bottom text-center" colspan="100%"> {{ __($emptyMessage) }}</td>
                </tr>
            @endforelse

            {{-- <div
                class="lottary__square__container col-12 col-md-6 col-xl-3 d-flex justify-content-center align-items-center">
                <div class="lottary__square w-75 d-flex flex-column justify-content-center my-5 lg:my-0 ">
                    <div class=" d-flex justify-content-around align-items-between w-100 ">
                        <img src="{{ asset($activeTemplateTrue . 'images/lottary_card.png')}}" alt="image" />
                        <h6>
                            Game Name
                        </h6>
                    </div>
                    <h5 class="mt-2">
                        $5,000 Prize
                    </h5>
                    <div class=" mt-2 d-flex justify-content-around align-items-between w-100">
                        <p>
                            Start Date:
                        </p>
                        <p>
                            1/1/2023
                        </p>
                    </div>
                    <div class=" mt-2 d-flex justify-content-around align-items-between w-100">
                        <p>
                            End Date:
                        </p>
                        <p>
                            1/1/2023
                        </p>
                    </div>
                    <a class="btn p-2 btn--base--message wow fadeInUp mt-2" data-wow-duration="0.5s"
                        data-wow-delay="0.7s" href="{{ @$banner->data_values->button_url }}">Buy Ticket $50.00</a>
                    <div class="label__coming d-flex justify-content-around align-items-between">
                        <p>Coming</p>
                    </div>
                </div>
            </div> --}}

        </div>

        <div class="row mt-4 d-flex justify-content-center align-items-center w-100">
            <div class="col-lg-12 d-flex justify-content-center align-items-center">
                <a class="btn p-2 btn--base--message wow fadeInUp mt-4" data-wow-duration="0.5s" data-wow-delay="0.7s"
                    href="{{ route('lottery') }}">View More</a>
            </div>
        </div>



    </div>

</section>
