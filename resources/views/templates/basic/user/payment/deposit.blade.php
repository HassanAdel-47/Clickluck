@extends($activeTemplate . 'layouts.master')
@section('content')
<section class="pt-100 pb-100">
    <div class="change__password">
        <div class="row justify-content-center">
            <div class="d-flex align-items-center">
                <p class="change__password__history__title ml-4">Profile</p>
            </div>
            <form id="change__passwordForm">
                <div class="d-flex flex-column justify-content-between w-75 mt-4">
                    <div class="d-flex flex-column w-50 me-4">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="d-flex flex-column w-50 mt-4">
                        <label for=eEmail">Email</label>
                        <input type="text" id=eEmail" name=eEmail" placeholder="your@gmail.com">
                    </div>
                    <div class="d-flex flex-column w-50 mt-4">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" value="123456789">
                    </div>
                </div>
                <a class="mt-4" href="/ticket/new">Change Password</a>
            </form>
        </div>
</section>
@endsection

@push('script')
<script>

</script>
@endpush