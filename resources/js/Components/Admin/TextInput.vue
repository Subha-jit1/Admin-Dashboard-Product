<template>
    <div :class="inputLenght">
        <input :type="inputType" :placeholder="placeholder" class="form-control form-control-solid" @input="updateModelValue" />
        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" v-if="error">
            {{error}}
        </div>
    </div>

</template>
<script setup>
    const {
        inputLenght,
        error,
        inputType
    } = defineProps({
        inputLenght: { type: String, default: 'col-md-12' },
        error: Boolean,
        inputType: { type: String, default: 'text' },
        placeholder: { type: String, default: '' },
    }); 
    const emit = defineEmits(['update:modelValue']); 
    const updateModelValue = (event) => {
        emit('update:modelValue', event.target.value)
    }
</script>