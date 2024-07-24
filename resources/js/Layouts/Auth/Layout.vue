<template>
    <body id="kt_body" class="auth-bg"> 
         <div class="d-flex flex-column flex-root">
               <div class="d-flex flex-column flex-lg-row flex-column-fluid"> 
                  <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
                     <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
                        <!-- sign-in sign-up -->
                         <slot /> 
                        <!-- theme -->
                        <div class="m-0">
                              <button class="btn btn-flex btn-link rotate" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px"> 
                                 <span data-kt-element="current-lang-name" class="me-2">Choose Theme</span>
                                 <i class="ki-duotone ki-down fs-2 text-muted rotate-180 m-0"></i>
                              </button>

                           <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4" data-kt-menu="true" id="kt_auth_lang_menu">
                                 <div class="menu-item px-3">
                                    <a href="#" class="menu-link d-flex px-5" data-kt-lang="Dark"> 
                                       <i class="ki-duotone ki-moon theme-dark-show fs-1 me-3">
                                          <span class="path1"></span>
                                          <span class="path2"></span>
                                          <span class="path3"></span>
                                          <span class="path4"></span>
                                          <span class="path5"></span>
                                          <span class="path6"></span>
                                          <span class="path7"></span>
                                          <span class="path8"></span>
                                          <span class="path9"></span>
                                          <span class="path10"></span>
                                    </i>
                                       <span data-kt-element="lang-name">Dark</span>
                                    </a>
                                 </div>    
                                 <div class="menu-item px-3">
                                    <a href="#" class="menu-link d-flex px-5" data-kt-lang="Dark"> 
                                       <i class="ki-duotone ki-night-day theme-dark-show fs-1 me-3">
                                          <span class="path1"></span>
                                          <span class="path2"></span>
                                          <span class="path3"></span>
                                          <span class="path4"></span>
                                          <span class="path5"></span>
                                          <span class="path6"></span>
                                          <span class="path7"></span>
                                          <span class="path8"></span>
                                          <span class="path9"></span>
                                          <span class="path10"></span>
                                    </i>
                                       <span data-kt-element="lang-name">Light</span>
                                    </a>
                                 </div>    
                                 <div class="menu-item px-3">
                                    <a href="#" class="menu-link d-flex px-5" data-kt-lang="Dark"> 
                                       <i class="ki-duotone ki-screen theme-dark-show fs-1 me-3">
                                          <span class="path1"></span>
                                          <span class="path2"></span>
                                          <span class="path3"></span>
                                          <span class="path4"></span> 
                                    </i>
                                       <span data-kt-element="lang-name">System</span>
                                    </a>
                                 </div>    
                           </div>

                        </div>
                     </div>
                  </div>
                  <div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat" style="background-image: url(/admin_assets/media/images/bg/Auth/auth-bg.png)"></div>
               </div>
         </div> 
     </body>
</template>

<script setup>
   import {onMounted} from 'vue' ;
   onMounted(() => { 
      KTToggle.createInstances();
      KTScroll.createInstances();
      KTMenu.createInstances();
   });
</script>
<style> 
   @import '/public/admin_assets/css/style.bundle.css';
   @import '/public/admin_assets/css/plugins.bundle.css';
</style>