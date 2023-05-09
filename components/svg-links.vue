<script setup lang="ts">
import Github from './SVG/github.vue';
import Linkedin from './SVG/linkedin.vue';
import Twitter from './SVG/twitter.vue';
</script>

<template>
    <div class="flex gap-5 mt-5 justify-center text-stone-500">
        <a href="https://linkedin.com/in/TheuzinXYZ" title="LinkedIn" target="_blank">
            <Linkedin />
        </a>

        <a href="https://github.com/TheuzinXYZ" title="GitHub" target="_blank">
            <Github />
        </a>

        <a href="https://twitter.com/TheuzinXYZ" title="Twitter" target="_blank">
            <Twitter />
        </a>
    </div>
</template>
