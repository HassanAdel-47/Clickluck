@extends($activeTemplate . 'layouts.frontend')
@section('content')
<section class="pt-100 pb-50">
    <div class="row">
        <div class="col-lg-12">
            {{--@include($activeTemplate . 'partials.lotteries')--}}
            @include($activeTemplate . 'sections.lottery')
        </div>
    </div>
    @include($activeTemplate . 'partials.auth_header')

    @if ($phases->hasPages())
    <div class="d-flex justify-content-center mt-5">
        {{ paginateLinks($phases) }}
    </div>
    @endif
</section>
@include($activeTemplate . 'sections.cta')

{{--@if ($sections->secs != null)
@foreach (json_decode($sections->secs) as $sec)
@include($activeTemplate . 'sections.' . $sec)
@endforeach
@endif--}}

@endsection