<template> 
        <div v-for="x in [1,2]">
            <div class="d-flex justify-content-end">
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
                <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                        Hey there 🙋‍♂️
                        How are you??  
                </div>
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
                <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">I'm fine...what about you?</div>
                </div>
            </div> 
        </div> 

</template>
<script setup>
import { ref, onMounted } from 'vue';

onMounted(() => {
    
    const theme = ref(document.documentElement.getAttribute("data-bs-theme"));
    
    const darkStyle = {
      backgroundColor: '#15171c',
      color: 'white'
    };
    
    const lightStyle = {
      backgroundColor: '#ffffff',
      color: 'black'
    };
});
</script>

<style scoped>  
</style>