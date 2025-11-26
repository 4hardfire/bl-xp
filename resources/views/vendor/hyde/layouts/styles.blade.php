{{-- Prevent Alpine.js flashes and include critical CSS inline --}}
<style>
[x-cloak] { display: none!important; }
/* Critical above-the-fold CSS */
body { background-color: #ffffff; color: #1e293b; margin: 0; font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif; }
.dark body { background-color: #020617; color: #e2e8f0; }
</style>

{{-- The compiled Tailwind/App styles - load asynchronously --}}
@if(config('hyde.load_app_styles_from_cdn', false))
    <link rel="preload" as="style" href="{{ Asset::cdnLink('app.css') }}" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ Asset::cdnLink('app.css') }}"></noscript>
@elseif(Asset::hasMediaFile('app.css'))
    <link rel="preload" as="style" href="{{ Asset::mediaLink('app.css') }}" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ Asset::mediaLink('app.css') }}"></noscript>
@endif

{{-- Preload polyfill for older browsers --}}
<script>
!function(e){"use strict";var t=function(t,n,r){var o=e.document.getElementsByTagName("script")[0],i=e.document.createElement("link");return i.rel="stylesheet",i.href=t,i.media="only x",o.parentNode.insertBefore(i,o),setTimeout(function(){i.media=n||"all"}),i};"undefined"!=typeof exports?exports.loadCSS=t:e.loadCSS=t}("undefined"!=typeof global?global:this);
</script>

{{-- Dynamic TailwindCSS Play CDN --}}
@if(config('hyde.use_play_cdn', false))
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
    <script>tailwind.config = { {!! Asset::injectTailwindConfig() !!} }</script>
    <script>console.warn('The HydePHP TailwindCSS Play CDN is enabled. This is for development purposes only and should not be used in production.', 'See https://hydephp.com/docs/1.x/managing-assets');</script>
@endif

{{-- Add any extra styles to include after the others --}}
@stack('styles')