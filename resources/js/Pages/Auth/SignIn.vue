<template>
   <Head title="Login" />
    <div class="d-flex flex-stack py-2">
       <div class="me-2"></div>
       <div class="m-0">
          <a href="#" class="link-primary fw-bold fs-5">Sign Up</a>
       </div>
    </div>
    <div class="py-20">
       <form class="form w-100" @submit.prevent="submit">
          <div class="card-body">
             <div class="text-start mb-10">
                <h1 class="text-gray-900 mb-3 fs-3x" data-kt-translate="sign-in-title">Sign In</h1>
                <div class="text-gray-500 fw-semibold fs-6 h-20px" data-kt-translate="general-desc">
                </div>
             </div>
             <div class="fv-row mb-8"> 
                  <text-input :placeholder="'Email'" v-model="form.email" :error="form.errors.email">
                  </text-input>
             </div>
             <div class="fv-row mb-7">
                  <text-input :placeholder="'Password'" v-model="form.password" :error="form.errors.password" :inputType="'password'">
                  </text-input>
             </div>
             <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-10">
                <div></div>
                <a href="#" class="link-primary">Forgot Password ?</a>
             </div>
             <div class="d-flex flex-stack">
                <submit-button  :isLoading="form.processing"> 
                </submit-button>
                <div class="d-flex align-items-center">
                   <div class="text-gray-500 fw-semibold fs-6 me-3 me-md-6" data-kt-translate="general-or">Or</div>
                   <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                   <img alt="Logo" src="/public/admin_assets/media/images/logo/google-icon.svg" class="p-4" />
                   </a>
                   <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                   <img alt="Logo" src="/public/admin_assets/media/images/logo/facebook-icon.svg"
                      class="p-4" />
                   </a>
                </div>
             </div>
          </div>
       </form>
    </div>
 </template>

<script setup>
    import SubmitButton from "@/Components/Admin/SubmitButton.vue";
    import TextInput from "@/Components/Admin/TextInput.vue";
    import { useForm } from '@inertiajs/vue3';

    const form = useForm({
        email: null,
        password: null,
    });

    const submit = () => {
        form.post(route('admin.login'));
    }
</script>