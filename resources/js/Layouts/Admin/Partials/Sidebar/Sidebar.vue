<template>
    <div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
        <SidebarLogo /> 
        <SidebarMenu /> 
        <SidebarFooter />  
    </div>
</template>
<script setup>
    import SidebarLogo from './SidebarLogo.vue';
    import SidebarMenu from './SidebarMenu.vue';
    import SidebarFooter from './SidebarFooter.vue';
</script> 