<template> 
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled"> 
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
    </body>
</template>
<script setup>
    import {onMounted} from 'vue';
    import Sidebar from './Partials/Sidebar.vue'; 
    import WrapperMobileHeader from './Partials/Wrapper/WrapperMobileHeader.vue'
    import WrapperHeader from './Partials/Wrapper/WrapperHeader.vue'
    import WrapperFooter from './Partials/Wrapper/WrapperFooter.vue'
</script>
<style>
    @import "https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700";
    @import "/public/admin_assets/css/style.bundle.css";
    @import "/public/admin_assets/css/plugin.bundle.css";
</style>
