@extends($activeTemplate . 'layouts.app')
@section('panel')
<!-- scroll-to-top -->
<div class="scroll-to-top  d-flex justify-content-center align-items-center">
    <span class="scroll-icon">
        <img class="w-75" src="{{ asset($activeTemplateTrue . 'images/message.png') }}" alt="image">
    </span>
</div>

@include($activeTemplate . 'partials.header')

<div class="main-wrapper">
    {{-- @if (!request()->routeIs('home'))
    @include($activeTemplate . 'partials.breadcrumb')
    @endif
    --}}
    @yield('content')
</div>
<!-- main-wrapper end -->


@include($activeTemplate . 'partials.footer')

<!-- cookies dark version start -->
@php
$cookie = App\Models\Frontend::where('data_keys', 'cookie.data')->first();
@endphp
@if ($cookie->data_values->status == Status::ENABLE && !\Cookie::get('gdpr_cookie'))
<div class="cookies-card hide text-center">
    <div class="cookies-card__icon bg--base">
        <i class="las la-cookie-bite"></i>
    </div>
    <p class="cookies-card__content mt-4">{{ $cookie->data_values->short_desc }}
        <a class="text--base" href="{{ route('cookie.policy') }}" target="_blank">@lang('learn more')</a>
    </p>
    <div class="cookies-card__btn mt-4">
        <a class="btn btn--base w-100 policy" href="javascript:void(0)">@lang('Allow')</a>
    </div>
</div>
@endif
<!-- cookies dark version end -->
@endsection