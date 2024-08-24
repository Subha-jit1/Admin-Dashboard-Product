<template> 
    <div class="me-3">
        <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline bg-transparent w-40px h-40px" data-kt-menu-trigger="{default:'click', lg: 'click'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <i class="ki-duotone ki-user fs-1">
            <span class="path1"></span>
            <span class="path2"></span>
            </i>
        </div> 
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px position-absolute"
        data-kt-menu="true">
            <div class="menu-item px-3">
                <div class="menu-content d-flex align-items-center px-3">
                <div class="symbol symbol-50px me-5">
                    <img alt="Logo" src="" />
                </div>
                <div class="d-flex flex-column">
                    <div class="fw-bold d-flex align-items-center fs-5">{{user?.full_name}}
                        <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                    </div>
                    <a href="javascript:void(0);" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
                </div>
                </div>
            </div>
            <div class="separator my-2"></div>
            <div class="menu-item px-5">
                <a href="javascript:void(0);" class="menu-link px-5">My Profile</a>
            </div>
            <div class="menu-item px-5">
                <a href="javascript:void(0);" class="menu-link px-5">
                <span class="menu-text">My Projects</span>
                <span class="menu-badge">
                    <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                </span>
                </a>
            </div>
            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                data-kt-menu-placement="right-start" data-kt-menu-offset="-15px, 0">
                <a href="javascript:void(0);" class="menu-link px-5">
                <span class="menu-title">My Subscription</span>
                <span class="menu-arrow"></span>
                </a>
                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                <div class="menu-item px-3">
                    <a href="javascript:void(0);" class="menu-link px-5">Referrals</a>
                </div>
                <div class="menu-item px-3">
                    <a href="javascript:void(0);" class="menu-link px-5">Billing</a>
                </div>
                <div class="menu-item px-3">
                    <a href="javascript:void(0);" class="menu-link px-5">Payments</a>
                </div>
                <div class="menu-item px-3">
                    <a href="javascript:void(0);" class="menu-link d-flex flex-stack px-5">Statements
                        <span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
                            <i class="ki-duotone ki-information-5 fs-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            </i>
                        </span></a>
                </div>
                <div class="separator my-2"></div>
                <div class="menu-item px-3">
                    <div class="menu-content px-3">
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1"
                            checked="checked" name="notifications" />
                            <span class="form-check-label text-muted fs-7">Notifications</span>
                        </label>
                    </div>
                </div>
                </div>
            </div>
            <div class="menu-item px-5">
                <a href="javascript:void(0);" class="menu-link px-5">My Statements</a>
            </div>
            <div class="separator my-2"></div>
            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                data-kt-menu-placement="right-start" data-kt-menu-offset="-15px, 0">
                <a href="javascript:void(0);" class="menu-link px-5">
                <span class="menu-title position-relative">Language
                    <span
                        class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
                        <img class="w-15px h-15px rounded-1 ms-2" src="" alt="" /></span></span>
                </a>
                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                <div class="menu-item px-3">
                    <a href="javascript:void(0);" class="menu-link d-flex px-5 active">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="" alt="" />
                        </span>English</a>
                </div>
                <div class="menu-item px-3">
                    <a href="javascript:void(0);" class="menu-link d-flex px-5">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="" alt="" />
                        </span>Spanish</a>
                </div>
                <div class="menu-item px-3">
                    <a href="javascript:void(0);" class="menu-link d-flex px-5">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="" alt="" />
                        </span>German</a>
                </div>
                <div class="menu-item px-3">
                    <a href="javascript:void(0);" class="menu-link d-flex px-5">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="" alt="" />
                        </span>Japanese</a>
                </div>
                <div class="menu-item px-3">
                    <a href="javascript:void(0);" class="menu-link d-flex px-5">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="" alt="" />
                        </span>French</a>
                </div>
                </div>
            </div>
            <div class="menu-item px-5 my-1">
                <a href="javascript:void(0);" class="menu-link px-5">Account Settings</a>
            </div>
            <div class="menu-item px-5">
                <a type="button" @click="logout()" class="menu-link px-5">Sign Out
                    <span class="spinner-border spinner-border-sm align-middle ms-2" v-if="isClickedToLogout"></span>    
                </a>
            </div>
        </div> 
    </div>      
</template>
<script setup> 
import {ref} from 'vue'; 
import { router, usePage } from '@inertiajs/vue3';
const isClickedToLogout = ref(false);
const logout = () => {
    isClickedToLogout.value = true;
    router.post(route('admin.logout'));
}

const user = usePage().props?.user;  
</script>