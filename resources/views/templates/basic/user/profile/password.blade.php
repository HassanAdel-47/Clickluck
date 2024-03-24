@extends($activeTemplate . 'layouts.master')
@section('content')
<section class="pt-100 pb-100">
    <div class="change__password">
        <div class="row justify-content-center">
            <div class="d-flex align-items-center">
                <a href="/user/profile-setting" class="me-2"><img
                        src="{{ asset($activeTemplateTrue . 'images/Back_Arrow.svg') }}" alt="image"></a>
                <p class="change__password__history__title ml-4">Change Password</p>
            </div>
            <form id="change__passwordForm" action="{{url('/user/change-password')}}" method="POST">
                @csrf
                <div class="d-flex flex-column justify-content-between w-75 mt-4">
                    <div class="d-flex flex-column w-50 me-4">
                        <label for="oldpassword">Old Password</label>
                        <input type="password" id="oldpassword" name="current_password" placeholder="Enter Your Old Password"
                            required>
                    </div>
                    <div class="d-flex flex-column w-50 mt-4">
                        <label for="newpassword">New Password</label>
                        <input type="password" id="newpassword" name="password" placeholder="Enter Your New Password"
                            required>
                    </div>
                </div>
                <button type="submit" class="btn btn--primary mt-4">Change Password</button>
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
    (function ($) {
        "use strict";
        var fileAdded = 0;
        $('.addFile').on('click', function () {
            if (fileAdded >= 4) {
                notify('error', 'You\'ve added maximum number of file');
                return false;
            }
            fileAdded++;
            $("#fileUploadsContainer").append(`
                    <div class="input-group my-3">
                        <input type="file" name="attachments[]" accept=".png,.jpg,.jpeg,.pdf,.doc,.docx" class="form--control" required />
                        <button type="button" class="input-group-text btn--danger remove-btn"><i class="las la-times"></i></button>
                    </div>
                `)
        });
        $(document).on('click', '.remove-btn', function () {
            fileAdded--;
            $(this).closest('.input-group').remove();
        });
    })(jQuery);
</script>
@endpush
