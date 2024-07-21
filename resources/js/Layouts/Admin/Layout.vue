<template> 
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled" > 
        <div class="d-flex flex-column flex-root"> 
            <div class="page d-flex flex-row flex-column-fluid"> 
                <Sidebar /> 
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    <WrapperMobileHeader />
                    <WrapperHeader />
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content"> 
                        <div class="container-xxl" id="kt_content_container">
                            <slot />
                        </div>
                    </div>
                    <WrapperFooter />
                </div>
            </div>
        </div> 
        <ChatDrawer /> 
    </body>
</template>
<script setup>
    import {onMounted} from 'vue';
    import Sidebar from './Partials/Sidebar/Sidebar.vue'; 
    import WrapperMobileHeader from './Partials/Wrapper/WrapperMobileHeader.vue';
    import WrapperHeader from './Partials/Wrapper/WrapperHeader.vue';
    import WrapperFooter from './Partials/Wrapper/WrapperFooter.vue';
    import ChatDrawer from './Partials/ChatDrawer/ChatDrawer.vue'; 

    onMounted(() => {  
        KTMenu.createInstances();  
        KTToggle.createInstances();  
        KTScroll.createInstances();
        initTheme();
     }); 
     const initTheme = () => {
        const defaultThemeMode = "light";
        let themeMode; 
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            } 
            document.documentElement.setAttribute("data-bs-theme", themeMode); 
            emit.emit('changeThemeNameValue', themeMode)
        }
    };
</script>
<style>
    @import "https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700";
    @import "/public/admin_assets/css/style.bundle.css";
    @import "/public/admin_assets/css/plugin.bundle.css"; 
</style>
