<script setup lang="ts">
const props = defineProps({
    color: {
        type: String,
        required: true
    }
})

const colors = `from-${props.color}-400 to-${props.color}-600 ring-${props.color}-800`;
</script>

<template>
    <div :class="['mt-2 p-1 bg-gradient-to-r rounded-full ring-2 w-48', colors]"></div>
</template>
