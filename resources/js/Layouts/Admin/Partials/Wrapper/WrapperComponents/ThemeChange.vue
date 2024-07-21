<template> 
    <div class="me-3">
        <!-- theme change -->
        <a href="#" class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline bg-transparent w-40px h-40px active"
        data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
        data-kt-menu-placement="bottom-end">
            <i class="ki-duotone ki-night-day theme-light-show fs-1">
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
            <i class="ki-duotone ki-moon theme-dark-show fs-1">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </a>
        <!-- custom-style-theme -->
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px "
        data-kt-menu="true" data-kt-element="theme-mode-menu" >
            <div class="menu-item px-3 my-0">
                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light" @click.prevent="setThemeMode('light')" :class="{'active' : data_bs_theme == 'light'}">
                <span class="menu-icon" data-kt-element="icon">
                    <i class="ki-duotone ki-night-day fs-2">
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
                </span>
                <span class="menu-title">Light</span>
                </a>
            </div>
            <div class="menu-item px-3 my-0">
                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark" @click.prevent="setThemeMode('dark')" :class="{'active' : data_bs_theme == 'dark'}">
                <span class="menu-icon" data-kt-element="icon">
                    <i class="ki-duotone ki-moon fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </span>
                <span class="menu-title">Dark</span>
                </a>
            </div>
            <div class="menu-item px-3 my-0">
                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system" @click.prevent="setThemeMode('system')" :class="{'active' : data_bs_theme == 'system'}">
                <span class="menu-icon" data-kt-element="icon">
                    <i class="ki-duotone ki-screen fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                    </i>
                </span>
                <span class="menu-title">System</span>
                </a>
            </div>
        </div>
        <!-- end theme change -->
     </div>
</template>
<script setup> 
    import {onMounted, ref} from 'vue';
    const data_bs_theme = ref(null);  

    //methods
    const setThemeMode = (mode) => {
        let isSystemTheme = 0;
        if (mode === "system") {
            mode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";  
            isSystemTheme = 1;
        }
        document.documentElement.setAttribute("data-bs-theme", mode);
        data_bs_theme.value = isSystemTheme ? data_bs_theme.value = 'system' : data_bs_theme.value = mode;
        localStorage.setItem("data-bs-theme", mode);
    }; 

    //emit
    emit.on('changeThemeNameValue', (themeMode) => {
        data_bs_theme.value = themeMode;
    });
</script>