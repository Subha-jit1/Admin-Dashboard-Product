<template> 
    <button type="button" class="btn btn-primary me-2 flex-shrink-0" :disabled="isLoading">
        <span v-if="isLoading">
            <span>Please wait...</span>
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
        </span>
        <span v-else>{{buttonText}}</span>
    </button>
</template> 
<script setup> 
    const {isLoading, buttonText} = defineProps({isLoading:Boolean, buttonText: {type:String, default:'Sign In'}}); 
</script>