@extends($activeTemplate . 'layouts.frontend')
@section('content')
<section class="pt-100 ">
    <div class="row">
        <div class="col-lg-12">
            @include($activeTemplate . 'partials.lotteries')
        </div>
    </div>

    @if ($phases->hasPages())
    <div class="d-flex justify-content-center mt-5">
        {{ paginateLinks($phases) }}
    </div>
    @endif
</section>
@include($activeTemplate . 'sections.cta')
@endsection