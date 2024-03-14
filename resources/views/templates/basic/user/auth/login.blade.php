@extends($activeTemplate . 'layouts.frontend')
@section('content')
<section class="loginPage pt-100 pb-100 position-relative z-index-2"
    style="background-image: url('{{ asset($activeTemplateTrue . 'images/HowToJoin.png')}}'); background-size: cover;">
    <div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="account-wrapper">
                    <form class="account-form verify-gcaptcha" method="POST" action="{{ route('user.login') }}">
                        @csrf
                        <div class="account-thumb-area text-center">
                            <h3 class="title">@lang('Welcome Back to') {{ $general->site_name }}</h3>
                        </div>

                        <div class="form-group">
                            <label for="username">@lang('Username or Email')</label>
                            <div class="custom--field">
                                <input class="form--control" id="username" name="username" type="text"
                                    value="{{ old('username') }}" required>
                                <i class="las la-user"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">@lang('Password')</label>
                            <div class="custom--field">
                                <input class="form--control" id="password" name="password" type="password" required>
                                <i class="las la-key"></i>
                            </div>
                        </div>

                        <div class="mt-4">
                            <x-captcha path="{{ $activeTemplate . 'partials' }}" />
                        </div>

                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="form-group form-check">
                                <input class="form-check-input" id="remember" name="remember" type="checkbox" {{
                                    old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    @lang('Remember Me')
                                </label>
                            </div>
                            <div class="form-group text-end">
                                <a class="text-white" href="{{ route('user.password.request') }}">@lang('Forget
                                    Password?')</a>
                            </div>
                        </div>

                        <button class="btn btn--base w-100" id="recaptcha" type="submit">@lang('Login')</button>
                        <p class="mt-3 text-center"><span class="text-white">@lang('New to') {{ $general->site_name }}
                                ?</span> <a class="text--base" href="{{ route('user.register') }}">@lang('Register')</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- account section end -->
@endsection