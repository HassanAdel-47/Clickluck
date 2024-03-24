@extends($activeTemplate . 'layouts.master')
@section('content')
<section class="pt-50 pb-100">
    <div class="change__password">
        <div class="row justify-content-center">
            <div class="d-flex align-items-center">
                <p class="change__password__history__title ml-4">Profile</p>
            </div>
            <form id="change__passwordForm">
                <div class="d-flex flex-column justify-content-between w-75 mt-4">
                    <div class="d-flex flex-column w-50 me-4">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="d-flex flex-column w-50 mt-4">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Example@gmail.com" required>
                    </div>
                    <div class="d-flex flex-column w-50 mt-4">
                        <label for="newpassword">Password</label>
                        <input type="password" id="newpassword" name="newpassword" placeholder="Your Password" required>
                    </div>
                </div>
                <a class="mt-4" href="{{route('user.change.password')}}">Change Password</a>
            </form>
        </div>
</section>
@endsection

@push('style')
<style>
    .input-group-text:focus {
        box-shadow: none !important;
    }
</style>
@endpush

@push('script')
<script>

</script>
@endpush