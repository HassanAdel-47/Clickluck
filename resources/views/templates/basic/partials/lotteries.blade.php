<section class="lottary overview-section pb-50 "
    style="background-image: url('{{ asset($activeTemplateTrue . 'images/money_gold.png') }}') ">
    <div class="lottary-container container w-100 wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.1s">
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
                        {{ (is_numeric($phase->lottery->bonuses->first()->prize))?
                        "$".$phase->lottery->bonuses->first()->prize:
                        $phase->lottery->bonuses->first()->prize }} Prize
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

                    @if ($phase->start_date > Carbon\Carbon::now())
                    <button class="btn p-2 btn--base--message wow fadeInUp mt-2" data-wow-duration="0.5s"
                        data-wow-delay="0.7s" href="" disabled>
                        Buy Ticket ${{ number_format($phase->lottery->price, 2) }}</button>
                    <div class="label__coming d-flex justify-content-around align-items-between">
                        <p>
                            @lang('Coming')
                        </p>
                    </div>
                    @else
                    <a class="btn p-2 btn--base--message wow fadeInUp mt-2" data-wow-duration="0.5s"
                        data-wow-delay="0.7s" @auth href="{{ route('user.lottery.details', $phase->id) }}" @else
                        href="{{ route('lottery.details', $phase->id) }}" @endauth>
                        Buy Ticket ${{ number_format($phase->lottery->price, 2) }}</a>
                    <div class="label__running d-flex justify-content-around align-items-between">
                        <p>
                            @lang('Running')
                        </p>
                    </div>
                    @endif
                </div>
            </div>
            @empty
            <tr>
                <td class="rounded-bottom text-center" colspan="100%"> {{ __($emptyMessage) }}</td>
            </tr>
            @endforelse
        </div>



    </div>

</section>
