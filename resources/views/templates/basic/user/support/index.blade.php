@extends($activeTemplate . 'layouts.frontend')
@section('content')
<section class="wallet__charged pt-100 pb-100 "
    style="background-image: url('{{ asset($activeTemplateTrue . 'images/walletCharged.svg')}}') ">
    <div class="w-100 h-100 d-flex align-items-center justify-content-center wow bounceIn" data-wow-duration="1s"
        data-wow-delay="0.1s">
        <div class="d-flex flex-column align-items-center justify-content-center gap-4 ">
            <h1>
                Password Changed!
            </h1>
            <p>
                Your Password Has Been Changed Successfully
            </p>
            <a class="btn btn--primary" href="/">Go To Homepage</a>
        </div>
    </div>
</section>
@endsection