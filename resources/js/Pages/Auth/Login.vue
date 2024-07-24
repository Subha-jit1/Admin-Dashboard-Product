<template>  
    <div class="d-flex flex-stack py-2">
        <div class="me-2"></div>
        <div class="m-0"> 
            <a href="authentication/layouts/fancy/sign-up.html" class="link-primary fw-bold fs-5" data-kt-translate="sign-in-head-link">Sign Up</a>
        </div>
    </div>
    <div class="py-20">
        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="index.html" action="#">
            <div class="card-body">
                <div class="text-start mb-10">
                    <h1 class="text-gray-900 mb-3 fs-3x" data-kt-translate="sign-in-title">Sign In</h1>
                    <div class="text-gray-500 fw-semibold fs-6 h-20px" data-kt-translate="general-desc"> 
                    </div>
                </div>
                <div class="fv-row mb-8">
                    <input type="text" placeholder="Email" name="email" autocomplete="off" data-kt-translate="sign-in-input-email" class="form-control form-control-solid" />
                </div>
                <div class="fv-row mb-7">
                    <input type="text" placeholder="Password" name="password" autocomplete="off" data-kt-translate="sign-in-input-password" class="form-control form-control-solid" />
                </div>
                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-10">
                    <div></div>
                    <a href="authentication/layouts/fancy/reset-password.html" class="link-primary" data-kt-translate="sign-in-forgot-password">Forgot Password ?</a>
                </div>
                <div class="d-flex flex-stack">
                    <button id="kt_sign_in_submit" class="btn btn-primary me-2 flex-shrink-0">
                    <span class="indicator-label" data-kt-translate="sign-in-submit">Sign In</span>
                    <span class="indicator-progress">
                    <span data-kt-translate="general-progress">Please wait...</span>
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                    </button>
                    <div class="d-flex align-items-center">
                    <div class="text-gray-500 fw-semibold fs-6 me-3 me-md-6" data-kt-translate="general-or">Or</div>
                    <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                    <img alt="Logo" src="/public/admin_assets/media/images/logo/google-icon.svg" class="p-4" />
                    </a>
                    <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                    <img alt="Logo" src="/public/admin_assets/media/images/logo/facebook-icon.svg" class="p-4" />
                    </a> 
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>
<script setup> 
</script>