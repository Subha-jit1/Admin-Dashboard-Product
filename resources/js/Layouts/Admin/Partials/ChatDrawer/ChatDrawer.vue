<template> 
    <div id="kt_drawer_chat" class="bg-body drawer drawer-end " data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
        <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
           <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
              <div class="card-title"> 
                 <td class="d-flex align-items-center">
                  <!--begin:: Avatar -->
                  <div class="symbol symbol-circle symbol-30px overflow-hidden me-2">
                     <a href="#">
                        <div class="symbol-label">
                           <img src="/public/admin_assets/media/images/profile/emma.jpg" alt="Emma Smith" class="w-100">
                        </div>
                     </a>
                  </div>
                  <!--end::Avatar-->
                  <!--begin::User details-->
                  <div class="d-flex flex-column">
                     <a href="#" class="text-gray-800 text-hover-primary fs-7">Emma Smith</a>
                     <span class="fs-7 fw-semibold text-muted">Last seen 2 minutes ago</span>
                  </div>
                  <!--begin::User details-->
               </td>
              </div>
              <div class="card-toolbar">
                 <div class="me-0">
                    <button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-dots-square fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                    </i>
                    </button>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                       <div class="menu-item px-3">
                          <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
                       </div>
                       <div class="menu-item px-3">
                          <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
                       </div>
                       <div class="menu-item px-3">
                          <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts 
                          <span class="ms-2" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation">
                          <i class="ki-duotone ki-information fs-7">
                          <span class="path1"></span>
                          <span class="path2"></span>
                          <span class="path3"></span>
                          </i>
                          </span></a>
                       </div>
                       <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                          <a href="#" class="menu-link px-3">
                          <span class="menu-title">Groups</span>
                          <span class="menu-arrow"></span>
                          </a>
                          <div class="menu-sub menu-sub-dropdown w-175px py-4">
                             <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Create Group</a>
                             </div>
                             <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Invite Members</a>
                             </div>
                             <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
                             </div>
                          </div>
                       </div>
                       <div class="menu-item px-3 my-1">
                          <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
                       </div>
                    </div>
                 </div>
                 <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                    <i class="ki-duotone ki-cross-square fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    </i>
                 </div>
              </div>
           </div>
           <div class="card-body" id="kt_drawer_chat_messenger_body">
              <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">  
                 <div class="d-flex justify-content-end mb-10">
                    <div class="d-flex flex-column align-items-end">
                       <div class="d-flex align-items-center mb-2">
                          <div class="me-3">
                             <span class="text-muted fs-7 mb-1">4 Hours</span>
                             <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                          </div>
                          <div class="symbol symbol-35px symbol-circle">
                             <img alt="Pic" src="/public/admin_assets/media/images/profile/default_user.jpg" />
                          </div>
                       </div>
                       <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">Most purchased Business courses during this sale!</div>
                    </div>
                 </div>
                 <div class="d-flex justify-content-start mb-10">
                    <div class="d-flex flex-column align-items-start">
                       <div class="d-flex align-items-center mb-2">
                          <div class="symbol symbol-35px symbol-circle">
                             <img alt="Pic" src="/public/admin_assets/media/images/profile/emma.jpg" />
                          </div>
                          <div class="ms-3">
                             <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Emma Smith</a>
                             <span class="text-muted fs-7 mb-1">5 Hours</span>
                          </div>
                       </div>
                       <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
                    </div>
                 </div> 
              </div>
           </div>
           <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
              <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
              <div class="d-flex flex-stack">
                 <div class="d-flex align-items-center me-2">
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                    <i class="ki-duotone ki-paper-clip fs-3"></i>
                    </button>
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                    <i class="ki-duotone ki-cloud-add fs-3">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    </i>
                    </button>
                 </div>
                 <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
              </div>
           </div>
        </div>
    </div>
</template>
<script setup>  
</script>