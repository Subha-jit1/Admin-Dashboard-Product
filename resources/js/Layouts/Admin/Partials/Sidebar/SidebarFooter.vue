<template>
    <div class="aside-footer d-flex justify-content-center flex-column-auto mb-10 pb-lg-10 mr-13" id="kt_aside_footer">
        <div class="d-flex flex-center w-100 scroll-px" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="Quick actions">
           <button type="button" class="btn btn-custom" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
           <i class="ki-duotone ki-entrance-left fs-2x">
           <span class="path1"></span>
           <span class="path2"></span>
           </i>
           </button>
           <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
              <div class="menu-item px-3">
                 <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
              </div>
              <div class="separator mb-3 opacity-75"></div>
              <div class="menu-item px-3">
                 <a href="#" class="menu-link px-3">New Ticket</a>
              </div>
              <div class="menu-item px-3">
                 <a href="#" class="menu-link px-3">New Customer</a>
              </div>
              <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                 <a href="#" class="menu-link px-3">
                 <span class="menu-title">New Group</span>
                 <span class="menu-arrow"></span>
                 </a>
                 <div class="menu-sub menu-sub-dropdown w-175px py-4">
                    <div class="menu-item px-3">
                       <a href="#" class="menu-link px-3">Admin Group</a>
                    </div>
                    <div class="menu-item px-3">
                       <a href="#" class="menu-link px-3">Staff Group</a>
                    </div>
                    <div class="menu-item px-3">
                       <a href="#" class="menu-link px-3">Member Group</a>
                    </div>
                 </div>
              </div>
              <div class="menu-item px-3">
                 <a href="#" class="menu-link px-3">New Contact</a>
              </div>
              <div class="separator mt-3 opacity-75"></div>
              <div class="menu-item px-3">
                 <div class="menu-content px-3 py-3">
                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                 </div>
              </div>
           </div>
        </div>
    </div>
</template>
<script setup> 
</script>
<style scoped> 
   .mr-13{
      margin-right: 12px;
   }
</style>