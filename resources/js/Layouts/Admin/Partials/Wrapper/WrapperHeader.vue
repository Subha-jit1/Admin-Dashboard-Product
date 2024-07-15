<template>
   <div id="kt_header" class="header py-6 py-lg-0" data-kt-sticky="true" data-kt-sticky-name="header"
      data-kt-sticky-offset="{lg: '300px'}">
      <div class="header-container container-xxl">
         <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">
            <h1 class="d-flex flex-column text-gray-900 fw-bold my-1">
               <span class="fs-1">Categories</span>
            </h1>
         </div>
         <div class="d-flex align-items-center flex-shrink-0"> 
            <Search />  
            <div class="d-flex align-items-center py-3 py-lg-0"> 
               <Notification />  
               <SignOut />  
               <ThemeChange />  
               <a href="#" class="btn btn-primary" id="kt_drawer_chat_toggle">Messages</a>
            </div>
         </div>
      </div>
   </div>
</template>
<script setup> 
   import Search from './WrapperComponents/Search.vue';
   import Notification from './WrapperComponents/Notification.vue';
   import SignOut from './WrapperComponents/SignOut.vue';
   import ThemeChange from './WrapperComponents/ThemeChange.vue';
</script>