<script setup lang="ts">
import Email from './SVG/email.vue';
import Home from './SVG/home.vue';
</script>

<template>
    <div class="border-b mt-2 pb-5 flex flex-col">
        <div class="flex items-center gap-1 text-lg text-gray-400 mt-3 mx-auto">
            <Email />
            <a href="mailto:eu@theuzin.com">eu@theuzin.com</a>
        </div>

        <div class="flex items-center gap-1 text-lg text-gray-400 mt-1 mx-auto">
            <Home />
            <div>Recife, Brazil</div>
        </div>
    </div>
</template>
