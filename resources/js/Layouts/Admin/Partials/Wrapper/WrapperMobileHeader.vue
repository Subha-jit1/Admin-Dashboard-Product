<template> 
    <div class="header-mobile py-3">
        <div class="container d-flex flex-stack">
           <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <Link :href="route('admin.dashboard')">
               <img alt="Logo" src="/public/admin_assets/media/logo/app_logo.gif" class="h-30px" />
           </Link>
           </div>
           <button class="btn btn-icon btn-active-color-primary me-n4" id="kt_aside_toggle">
           <i class="ki-duotone ki-abstract-14 fs-1">
           <span class="path1"></span>
           <span class="path2"></span>
           </i>
           </button>
        </div>
     </div>
</template>