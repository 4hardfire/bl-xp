<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <title>Page could not be found | BL-XP</title>
    <meta name="description" content="Unfortunately, the requested page could not be found.">
    @include('hyde::layouts.head')
</head>

<body class="bg-white dark:bg-dark-950 text-slate-800 dark:text-white antialiased">
    <!-- Navigation -->
    @include('hyde::layouts.navigation')

    <div class="relative min-h-screen flex items-center justify-center px-2 sm:px-4 lg:px-6 pt-20">
        <!-- Background Effects -->
        <div class="absolute top-0 right-0 -z-10 w-[800px] h-[800px] bg-primary/10 dark:bg-drupal-600/20 rounded-full blur-[120px] opacity-50 dark:opacity-30 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 -z-10 w-[600px] h-[600px] bg-accent-700/10 dark:bg-purple-900/20 rounded-full blur-[100px] opacity-40 dark:opacity-20 pointer-events-none"></div>

        <div class="max-w-2xl w-full text-center">
            <!-- Animated Icon -->
            <div class="mb-8 flex justify-center">
                <div class="relative">
                    <div class="absolute inset-0 bg-primary dark:bg-primary-dark rounded-full opacity-20 blur-3xl animate-pulse"></div>
                    <span class="icon-[ph--warning-circle-fill] text-9xl text-primary dark:text-primary-dark relative inline-block"></span>
                </div>
            </div>

            <!-- 404 Text -->
            <h1 class="text-6xl md:text-6xl font-heading font-bold text-slate-900 dark:text-white mb-4">
                Page could not be found
            </h1>

            <div class="w-24 h-1 bg-gradient-to-r from-primary to-accent-700 dark:from-primary-dark dark:to-accent-700 mx-auto mb-8 rounded-full"></div>

            <p class="text-xl text-slate-600 dark:text-slate-300 mb-8 leading-relaxed max-w-md mx-auto">
                Unfortunately, the requested page could not be found.
            </p>

            <!-- Actions -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ Routes::get('index') ?? './' }}"
                   class="inline-flex items-center justify-center px-8 py-4 bg-primary dark:bg-primary-dark text-white dark:text-dark-normal rounded-xl font-semibold hover:bg-opacity-90 transition shadow-lg hover:shadow-xl">
                    <span class="icon-[ph--house-bold] text-xl mr-2"></span>
                    Go Home
                </a>
                <button onclick="history.back()"
                        class="inline-flex items-center justify-center px-8 py-4 bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-200 border border-slate-200 dark:border-slate-700 rounded-xl font-semibold hover:bg-slate-50 dark:hover:bg-slate-700 transition">
                    <span class="icon-[ph--arrow-left-bold] text-xl mr-2"></span>
                    Go Back
                </button>
            </div>

            <!-- Quick Links -->
            <div class="mt-12 pt-8 border-t border-slate-200 dark:border-slate-700">
                <p class="text-sm text-slate-500 dark:text-slate-400 mb-4">Need help? Try these links:</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="/#about" class="text-primary dark:text-primary-dark hover:underline text-sm font-medium">About</a>
                    <a href="/#services" class="text-primary dark:text-primary-dark hover:underline text-sm font-medium">Services</a>
                    <a href="/#community" class="text-primary dark:text-primary-dark hover:underline text-sm font-medium">Community</a>
                    <a href="/#contact" class="text-primary dark:text-primary-dark hover:underline text-sm font-medium">Contact</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Scripts -->
    @include('hyde::layouts.scripts')
</body>
</html>
