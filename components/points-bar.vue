<script setup lang="ts">
const { color } = defineProps({
    color: {
        type: String,
        required: true,
        default: 'red'
    }
})

const colors = {
    red: 'from-red-400 to-red-600 ring-red-800',
    blue: 'from-blue-400 to-blue-600 ring-blue-800'
}
</script>

<template>
    <div :class="['mt-2 p-1 bg-gradient-to-r rounded-full ring-2 w-48', colors[color as keyof typeof colors]]"></div>
</template>
