<script setup lang="ts">
useSeoMeta({
  title: 'Theuzin - Software Engineer',
  description: `I'm a software developer passionate about technology! I usually work with full-stack web development; Currently building my own SaaS.`,
  ogType: 'website',
  ogSiteName: 'Theuzin',
  ogUrl: 'https://theuzin.com',
  ogTitle: 'Theuzin - Software Engineer',
  ogDescription: `I'm a software developer passionate about technology! I usually work with full-stack web development; Currently building my own SaaS.`,
  twitterCard: 'summary',
  twitterSite: '@theuzindev',
  twitterCreator: '@theuzindev',
  twitterTitle: 'Theuzin - Software Engineer',
  twitterDescription: `I'm a software developer passionate about technology! I usually work with full-stack web development; Currently building my own SaaS.`
})
</script>

<template>
  <div class="hero">
    <div class="hero-content flex-col lg:flex-row gap-7">
      <img src="~/assets/me.jpg" class="px-2 max-w-sm rounded-lg" />
      <div>
        <h1 class="text-5xl font-bold font-mono">Theuzin</h1>
        <h2 class="text-3xl mt-2">@theuzindev</h2>
        <p class="py-5">Hey, i'm a software developer! 👋🏾</p>

        <a href="mailto:eu@theuzin.com" class="flex items-center gap-2">
          <Mail />
          eu@theuzin.com
        </a>

        <div class="join mt-5">
          <a href="https://github.com/theuzindev" target="_blank" class="btn btn-neutral join-item">
            <Github />
            GitHub
          </a>

          <a href="https://linkedin.com/in/theuzindev" target="_blank" class="btn btn-neutral join-item">
            <Linkedin />
            LinkedIn
          </a>

          <a href="https://twitter.com/theuzindev" target="_blank" class="btn btn-neutral join-item">
            <Twitter />
            Twitter
          </a>
        </div>
      </div>
    </div>
  </div>
</template>
