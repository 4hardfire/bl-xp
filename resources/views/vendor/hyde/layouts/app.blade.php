<!DOCTYPE html>
<html lang="{{ config('hyde.language', 'en') }}">
<head>
    @include('hyde::layouts.head')
    @yield('post_head')
</head>
<body id="app" class="flex flex-col min-h-screen overflow-x-hidden bg-gray-normal dark:bg-dark-normal dark:text-white" x-data="{ navigationOpen: false }" x-on:keydown.escape="navigationOpen = false;">
    @include('hyde::components.skip-to-content-button')
    @include('hyde::layouts.navigation')

    @yield('content')

    @include('hyde::layouts.footer')

    @include('hyde::layouts.scripts')

    @yield('post_scripts')
</body>
</html>
