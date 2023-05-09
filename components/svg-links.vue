<script setup lang="ts">
import Github from './svg/github.vue';
import Linkedin from './svg/linkedin.vue';
import Twitter from './svg/twitter.vue';
</script>

<template>
    <div class="flex gap-5 mt-5 text-stone-500">
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
