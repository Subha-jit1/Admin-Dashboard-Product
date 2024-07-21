<template>
   <div class="aside-menu flex-column-fluid pt-0 pb-7 py-lg-10" id="kt_aside_menu_mode">
      <div id="kt_aside_menu_wrapper" class="w-100 hover-scroll-overlay-y d-flex pt-5 pt-lg-0" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="0">
         <div id="kt_aside_menu" class="menu menu-column menu-rounded menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-icon-gray-500 menu-arrow-gray-500 fw-semibold fs-6" data-kt-menu="true">
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item here show py-2">
               <span class="menu-link menu-center">
                  <span class="menu-icon me-0">
                     <i class="ki-duotone ki-home-2 fs-2x">
                        <span class="path1"></span>
                        <span class="path2"></span> 
                     </i>
                  </span>
               </span>
               <div class="menu-sub menu-sub-dropdown px-2 py-4 w-250px mh-75 overflow-auto">
                  <div class="menu-item">
                     <div class="menu-content">
                        <span class="menu-section fs-5 fw-bolder ps-1 py-1">Home</span>
                     </div>
                  </div>
                  <div class="menu-item">
                     <a class="menu-link active" href="#">
                        <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Default</span>
                     </a>
                  </div>
                  <div class="menu-item">
                     <a class="menu-link" href="#">
                     <span class="menu-bullet">
                     <span class="bullet bullet-dot"></span>
                     </span>
                     <span class="menu-title">eCommerce</span>
                     </a>
                  </div>
                  <div class="menu-item">
                     <a class="menu-link" href="#">
                     <span class="menu-bullet">
                     <span class="bullet bullet-dot"></span>
                     </span>
                     <span class="menu-title">Projects</span>
                     </a>
                  </div>
                  <div class="menu-item">
                     <a class="menu-link" href="#">
                     <span class="menu-bullet">
                     <span class="bullet bullet-dot"></span>
                     </span>
                     <span class="menu-title">Online Courses</span>
                     </a>
                  </div>
                  <div class="menu-item">
                     <a class="menu-link" href="#">
                     <span class="menu-bullet">
                     <span class="bullet bullet-dot"></span>
                     </span>
                     <span class="menu-title">Marketing</span>
                     </a>
                  </div>
                  <div class="menu-inner flex-column collapse" id="kt_app_sidebar_menu_dashboards_collapse">
                     <div class="menu-item">
                        <a class="menu-link" href="#">
                        <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Bidding</span>
                        </a>
                     </div>
                     <div class="menu-item">
                        <a class="menu-link" href="#">
                        <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">POS System</span>
                        </a>
                     </div>
                     <div class="menu-item">
                        <a class="menu-link" href="#">
                        <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Call Center</span>
                        </a>
                     </div>
                     <div class="menu-item">
                        <a class="menu-link" href="#">
                        <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Logistics</span>
                        </a>
                     </div>
                     <div class="menu-item">
                        <a class="menu-link" href="#">
                        <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Website Analytics</span>
                        </a>
                     </div>
                     <div class="menu-item">
                        <a class="menu-link" href="#">
                        <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Finance Performance</span>
                        </a>
                     </div>
                     <div class="menu-item">
                        <a class="menu-link" href="#">
                        <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Store Analytics</span>
                        </a>
                     </div>
                     <div class="menu-item">
                        <a class="menu-link" href="#">
                        <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Social</span>
                        </a>
                     </div>
                     <div class="menu-item">
                        <a class="menu-link" href="#">
                        <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Delivery</span>
                        </a>
                     </div>
                     <div class="menu-item">
                        <a class="menu-link" href="#">
                        <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Crypto</span>
                        </a>
                     </div>
                     <div class="menu-item">
                        <a class="menu-link" href="#">
                        <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">School</span>
                        </a>
                     </div>
                     <div class="menu-item">
                        <a class="menu-link" href="#">
                        <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Podcast</span>
                        </a>
                     </div>
                     <div class="menu-item">
                        <a class="menu-link" href="#">
                        <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Landing</span>
                        </a>
                     </div>
                  </div>
                  <div class="menu-item">
                     <div class="menu-content">
                        <a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible collapsed" data-bs-toggle="collapse" href="#" data-kt-toggle-text="Show Less">
                        <span data-kt-toggle-text-target="true">Show 12 More</span>
                        <i class="ki-duotone ki-minus-square toggle-on fs-2 me-0">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        </i>
                        <i class="ki-duotone ki-plus-square toggle-off fs-2 me-0">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        </i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
               <span class="menu-link menu-center">
                  <span class="menu-icon me-0">
                  <i class="ki-duotone ki-notification-status fs-2x">
                  <span class="path1"></span>
                  <span class="path2"></span>
                  <span class="path3"></span>
                  <span class="path4"></span>
               </i>
               </span>
               </span>
               <div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
                  <div class="menu-item">
                     <div class="menu-content">
                        <span class="menu-section fs-5 fw-bolder ps-1 py-1">Pages</span>
                     </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                     <span class="menu-link">
                     <span class="menu-bullet">
                     <span class="bullet bullet-dot"></span>
                     </span>
                     <span class="menu-title">User Profile</span>
                     <span class="menu-arrow"></span>
                     </span>
                     <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Overview</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Projects</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Campaigns</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Documents</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Followers</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Activity</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                     <span class="menu-link">
                     <span class="menu-bullet">
                     <span class="bullet bullet-dot"></span>
                     </span>
                     <span class="menu-title">Account</span>
                     <span class="menu-arrow"></span>
                     </span>
                     <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Overview</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Settings</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Security</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Activity</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Billing</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Statements</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Referrals</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">API Keys</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Logs</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                     <span class="menu-link">
                     <span class="menu-bullet">
                     <span class="bullet bullet-dot"></span>
                     </span>
                     <span class="menu-title">Authentication</span>
                     <span class="menu-arrow"></span>
                     </span>
                     <div class="menu-sub menu-sub-accordion">
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                           <span class="menu-link">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Corporate Layout</span>
                           <span class="menu-arrow"></span>
                           </span>
                           <div class="menu-sub menu-sub-accordion menu-active-bg">
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Sign-in</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Sign-up</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Two-Factor</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Reset Password</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">New Password</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                           <span class="menu-link">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Overlay Layout</span>
                           <span class="menu-arrow"></span>
                           </span>
                           <div class="menu-sub menu-sub-accordion menu-active-bg">
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Sign-in</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Sign-up</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Two-Factor</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Reset Password</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">New Password</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                           <span class="menu-link">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Creative Layout</span>
                           <span class="menu-arrow"></span>
                           </span>
                           <div class="menu-sub menu-sub-accordion menu-active-bg">
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Sign-in</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Sign-up</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Two-Factor</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Reset Password</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">New Password</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                           <span class="menu-link">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Fancy Layout</span>
                           <span class="menu-arrow"></span>
                           </span>
                           <div class="menu-sub menu-sub-accordion menu-active-bg">
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Sign-in</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Sign-up</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Two-Factor</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Reset Password</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">New Password</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                           <span class="menu-link">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Email Templates</span>
                           <span class="menu-arrow"></span>
                           </span>
                           <div class="menu-sub menu-sub-accordion menu-active-bg">
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Welcome Message</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Reset Password</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Subscription Confirmed</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Credit Card Declined</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Promo 1</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Promo 2</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Promo 3</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Multi-steps Sign-up</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Welcome Message</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Verify Email</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Coming Soon</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Password Confirmation</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Account Deactivation</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Error 404</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Error 500</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                     <span class="menu-link">
                     <span class="menu-bullet">
                     <span class="bullet bullet-dot"></span>
                     </span>
                     <span class="menu-title">Corporate</span>
                     <span class="menu-arrow"></span>
                     </span>
                     <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">About</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Our Team</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Contact Us</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Licenses</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Sitemap</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                     <span class="menu-link">
                     <span class="menu-bullet">
                     <span class="bullet bullet-dot"></span>
                     </span>
                     <span class="menu-title">Social</span>
                     <span class="menu-arrow"></span>
                     </span>
                     <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Feeds</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Activty</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Followers</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Settings</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                     <span class="menu-link">
                     <span class="menu-bullet">
                     <span class="bullet bullet-dot"></span>
                     </span>
                     <span class="menu-title">Blog</span>
                     <span class="menu-arrow"></span>
                     </span>
                     <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Blog Home</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Blog Post</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                     <span class="menu-link">
                     <span class="menu-bullet">
                     <span class="bullet bullet-dot"></span>
                     </span>
                     <span class="menu-title">Careers</span>
                     <span class="menu-arrow"></span>
                     </span>
                     <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Careers List</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Careers Apply</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
               <span class="menu-link menu-center">
               <span class="menu-icon me-0">
               <i class="ki-duotone ki-abstract-35 fs-2x">
               <span class="path1"></span>
               <span class="path2"></span>
               </i>
               </span>
               </span>
               <div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
                  <div class="menu-item">
                     <div class="menu-content">
                        <span class="menu-section fs-5 fw-bolder ps-1 py-1">Utilities</span>
                     </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                     <span class="menu-link">
                     <span class="menu-bullet">
                     <span class="bullet bullet-dot"></span>
                     </span>
                     <span class="menu-title">Modals</span>
                     <span class="menu-arrow"></span>
                     </span>
                     <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                           <span class="menu-link">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">General</span>
                           <span class="menu-arrow"></span>
                           </span>
                           <div class="menu-sub menu-sub-accordion menu-active-bg">
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Invite Friends</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">View Users</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Select Users</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Upgrade Plan</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Share & Earn</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                           <span class="menu-link">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Forms</span>
                           <span class="menu-arrow"></span>
                           </span>
                           <div class="menu-sub menu-sub-accordion menu-active-bg">
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">New Target</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">New Card</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">New Address</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Create API Key</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Bidding</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                           <span class="menu-link">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Wizards</span>
                           <span class="menu-arrow"></span>
                           </span>
                           <div class="menu-sub menu-sub-accordion menu-active-bg">
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Create App</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Create Campaign</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Create Business Acc</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Create Project</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Top Up Wallet</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Offer a Deal</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Two Factor Auth</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                           <span class="menu-link">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Search</span>
                           <span class="menu-arrow"></span>
                           </span>
                           <div class="menu-sub menu-sub-accordion menu-active-bg">
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Users</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Select Location</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                     <span class="menu-link">
                     <span class="menu-bullet">
                     <span class="bullet bullet-dot"></span>
                     </span>
                     <span class="menu-title">Wizards</span>
                     <span class="menu-arrow"></span>
                     </span>
                     <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Horizontal</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Vertical</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Two Factor Auth</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Create App</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Create Campaign</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Create Account</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Create Project</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Top Up Wallet</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Offer a Deal</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                     <span class="menu-link">
                     <span class="menu-bullet">
                     <span class="bullet bullet-dot"></span>
                     </span>
                     <span class="menu-title">Search</span>
                     <span class="menu-arrow"></span>
                     </span>
                     <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Horizontal</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Vertical</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Users</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Location</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
               <span class="menu-link menu-center">
               <span class="menu-icon me-0">
               <i class="ki-duotone ki-abstract-26 fs-2x">
               <span class="path1"></span>
               <span class="path2"></span>
               </i>
               </span>
               </span>
               <div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
                  <div class="menu-item">
                     <div class="menu-content">
                        <span class="menu-section fs-5 fw-bolder ps-1 py-1">Apps</span>
                     </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                     <span class="menu-link">
                     <span class="menu-icon">
                     <i class="ki-duotone ki-rocket fs-2">
                     <span class="path1"></span>
                     <span class="path2"></span>
                     </i>
                     </span>
                     <span class="menu-title">Projects</span>
                     <span class="menu-arrow"></span>
                     </span>
                     <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">My Projects</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">View Project</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Targets</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Budget</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Users</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Files</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Activity</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Settings</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                     <span class="menu-link">
                     <span class="menu-icon">
                     <i class="ki-duotone ki-handcart fs-2"></i>
                     </span>
                     <span class="menu-title">eCommerce</span>
                     <span class="menu-arrow"></span>
                     </span>
                     <div class="menu-sub menu-sub-accordion">
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                           <span class="menu-link">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Catalog</span>
                           <span class="menu-arrow"></span>
                           </span>
                           <div class="menu-sub menu-sub-accordion">
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Products</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Categories</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Add Product</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Edit Product</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Add Category</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Edit Category</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                           <span class="menu-link">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Sales</span>
                           <span class="menu-arrow"></span>
                           </span>
                           <div class="menu-sub menu-sub-accordion">
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Orders Listing</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Order Details</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Add Order</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Edit Order</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                           <span class="menu-link">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Customers</span>
                           <span class="menu-arrow"></span>
                           </span>
                           <div class="menu-sub menu-sub-accordion">
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Customer Listing</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Customer Details</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                           <span class="menu-link">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Reports</span>
                           <span class="menu-arrow"></span>
                           </span>
                           <div class="menu-sub menu-sub-accordion">
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Products Viewed</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Sales</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Returns</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Customer Orders</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Shipping</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Settings</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                     <span class="menu-link">
                     <span class="menu-icon">
                     <i class="ki-duotone ki-phone fs-2">
                     <span class="path1"></span>
                     <span class="path2"></span>
                     </i>
                     </span>
                     <span class="menu-title">Contacts</span>
                     <span class="menu-arrow"></span>
                     </span>
                     <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Getting Started</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Add Contact</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Edit Contact</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">View Contact</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                     <span class="menu-link">
                     <span class="menu-icon">
                     <i class="ki-duotone ki-chart fs-2">
                     <span class="path1"></span>
                     <span class="path2"></span>
                     </i>
                     </span>
                     <span class="menu-title">Support Center</span>
                     <span class="menu-arrow"></span>
                     </span>
                     <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Overview</span>
                           </a>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                           <span class="menu-link">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Tickets</span>
                           <span class="menu-arrow"></span>
                           </span>
                           <div class="menu-sub menu-sub-accordion">
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Tickets List</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">View Ticket</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                           <span class="menu-link">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Tutorials</span>
                           <span class="menu-arrow"></span>
                           </span>
                           <div class="menu-sub menu-sub-accordion">
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Tutorials List</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Tutorial Post</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">FAQ</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Licenses</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Contact Us</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                     <span class="menu-link">
                     <span class="menu-icon">
                     <i class="ki-duotone ki-shield-tick fs-2">
                     <span class="path1"></span>
                     <span class="path2"></span>
                     </i>
                     </span>
                     <span class="menu-title">User Management</span>
                     <span class="menu-arrow"></span>
                     </span>
                     <div class="menu-sub menu-sub-accordion">
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                           <span class="menu-link">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Users</span>
                           <span class="menu-arrow"></span>
                           </span>
                           <div class="menu-sub menu-sub-accordion">
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Users List</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">View User</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                           <span class="menu-link">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Roles</span>
                           <span class="menu-arrow"></span>
                           </span>
                           <div class="menu-sub menu-sub-accordion">
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Roles List</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">View Role</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Permissions</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                     <span class="menu-link">
                     <span class="menu-icon">
                     <i class="ki-duotone ki-briefcase fs-2">
                     <span class="path1"></span>
                     <span class="path2"></span>
                     </i>
                     </span>
                     <span class="menu-title">Customers</span>
                     <span class="menu-arrow"></span>
                     </span>
                     <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Getting Started</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Customer Listing</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Customer Details</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                     <span class="menu-link">
                     <span class="menu-icon">
                     <i class="ki-duotone ki-map fs-2">
                     <span class="path1"></span>
                     <span class="path2"></span>
                     <span class="path3"></span>
                     </i>
                     </span>
                     <span class="menu-title">Subscription</span>
                     <span class="menu-arrow"></span>
                     </span>
                     <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Getting Started</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Subscription List</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Add Subscription</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">View Subscription</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                     <span class="menu-link">
                     <span class="menu-icon">
                     <i class="ki-duotone ki-credit-cart fs-2">
                     <span class="path1"></span>
                     <span class="path2"></span>
                     </i>
                     </span>
                     <span class="menu-title">Invoice Manager</span>
                     <span class="menu-arrow"></span>
                     </span>
                     <div class="menu-sub menu-sub-accordion">
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                           <span class="menu-link">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">View Invoices</span>
                           <span class="menu-arrow"></span>
                           </span>
                           <div class="menu-sub menu-sub-accordion menu-active-bg">
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Invoice 1</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Invoice 2</span>
                                 </a>
                              </div>
                              <div class="menu-item">
                                 <a class="menu-link" href="#">
                                 <span class="menu-bullet">
                                 <span class="bullet bullet-dot"></span>
                                 </span>
                                 <span class="menu-title">Invoice 3</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Create Invoice</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                     <span class="menu-link">
                     <span class="menu-icon">
                     <i class="ki-duotone ki-file-added fs-2">
                     <span class="path1"></span>
                     <span class="path2"></span>
                     </i>
                     </span>
                     <span class="menu-title">File Manager</span>
                     <span class="menu-arrow"></span>
                     </span>
                     <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Folders</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Files</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Blank Directory</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Settings</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                     <span class="menu-link">
                     <span class="menu-icon">
                     <i class="ki-duotone ki-sms fs-2">
                     <span class="path1"></span>
                     <span class="path2"></span>
                     </i>
                     </span>
                     <span class="menu-title">Inbox</span>
                     <span class="menu-arrow"></span>
                     </span>
                     <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Messages</span>
                           <span class="menu-badge">
                           <span class="badge badge-success">3</span>
                           </span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Compose</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">View & Reply</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                     <span class="menu-link">
                     <span class="menu-icon">
                     <i class="ki-duotone ki-message-text-2 fs-2">
                     <span class="path1"></span>
                     <span class="path2"></span>
                     <span class="path3"></span>
                     </i>
                     </span>
                     <span class="menu-title">Chat</span>
                     <span class="menu-arrow"></span>
                     </span>
                     <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Private Chat</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Group Chat</span>
                           </a>
                        </div>
                        <div class="menu-item">
                           <a class="menu-link" href="#">
                           <span class="menu-bullet">
                           <span class="bullet bullet-dot"></span>
                           </span>
                           <span class="menu-title">Drawer Chat</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="menu-item">
                     <a class="menu-link" href="#">
                     <span class="menu-icon">
                     <i class="ki-duotone ki-calendar-8 fs-2">
                     <span class="path1"></span>
                     <span class="path2"></span>
                     <span class="path3"></span>
                     <span class="path4"></span>
                     <span class="path5"></span>
                     <span class="path6"></span>
                     </i>
                     </span>
                     <span class="menu-title">Calendar</span>
                     </a>
                  </div>
               </div>
            </div>
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
               <span class="menu-link menu-center">
               <span class="menu-icon me-0">
               <i class="ki-duotone ki-briefcase fs-2x">
               <span class="path1"></span>
               <span class="path2"></span>
               </i>
               </span>
               </span>
               <div class="menu-sub menu-sub-dropdown px-2 py-4 w-200px w-lg-225px mh-75 overflow-auto">
                  <div class="menu-item">
                     <div class="menu-content">
                        <span class="menu-section fs-5 fw-bolder ps-1 py-1">Help</span>
                     </div>
                  </div>
                  <div class="menu-item">
                     <a class="menu-link" href="#" target="_blank" title="Check out over 200 in-house components" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                     <span class="menu-bullet">
                     <span class="bullet bullet-dot"></span>
                     </span>
                     <span class="menu-title">Components</span>
                     </a>
                  </div>
                  <div class="menu-item">
                     <a class="menu-link" href="#" target="_blank" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                     <span class="menu-bullet">
                     <span class="bullet bullet-dot"></span>
                     </span>
                     <span class="menu-title">Documentation</span>
                     </a>
                  </div>
                  <div class="menu-item">
                     <a class="menu-link" href="#" title="Build your layout and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                     <span class="menu-bullet">
                     <span class="bullet bullet-dot"></span>
                     </span>
                     <span class="menu-title">Layout Builder</span>
                     </a>
                  </div>
                  <div class="menu-item">
                     <a class="menu-link" href="#" target="_blank">
                     <span class="menu-bullet">
                     <span class="bullet bullet-dot"></span>
                     </span>
                     <span class="menu-title">Changelog v8.2.6</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</template> 
<script setup>
import {onMounted} from 'vue';  
</script>