@php
    $navigation = \Hyde\Framework\Features\Navigation\NavigationMenu::create();
@endphp

<!-- Navigation -->
<nav class="fixed w-full z-50 bg-dark-950/80 dark:bg-dark-950/80 bg-white/90 backdrop-blur-lg border-b border-white/5 dark:border-white/5 border-slate-200 transition-all duration-300" id="navbar" role="banner">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <a href="{{ Routes::get('index') }}" class="flex items-center cursor-pointer group">
                <img src="{{ Asset::mediaLink('BL-XP_Logo_white.svg') }}" alt="{{ config('hyde.name', 'BL-XP') }}" class="h-10 w-auto transition-transform duration-300 group-hover:scale-105 dark:block hidden">
                <img src="{{ Asset::mediaLink('BL-XP_Logo.svg') }}" alt="{{ config('hyde.name', 'BL-XP') }}" class="h-10 w-auto transition-transform duration-300 group-hover:scale-105 dark:hidden">
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-1 bg-slate-100/50 dark:bg-white/5 p-1 rounded-full border border-slate-200 dark:border-white/5">
                @php
                    $isHomepage = isset($page) && $page->identifier === 'index';
                    $isBlogPage = isset($page) && (str_starts_with($page->identifier ?? '', 'posts/') || ($page->identifier ?? '') === 'posts/index');
                    $isPostPage = isset($page) && $page instanceof \Hyde\Pages\MarkdownPost;
                @endphp
                <a href="{{ $isHomepage ? '#about' : Hyde::relativeLink('/') . '#about' }}" class="nav-link px-5 py-2 text-sm font-medium text-slate-700 dark:text-slate-300 hover:text-slate-900 hover:bg-slate-200/50 dark:hover:text-white dark:hover:bg-white/5 rounded-full transition">About</a>
                <a href="{{ $isHomepage ? '#services' : Hyde::relativeLink('/') . '#services' }}" class="nav-link px-5 py-2 text-sm font-medium text-slate-700 dark:text-slate-300 hover:text-slate-900 hover:bg-slate-200/50 dark:hover:text-white dark:hover:bg-white/5 rounded-full transition">Services</a>
                <a href="{{ $isHomepage ? '#community' : Hyde::relativeLink('/') . '#community' }}" class="nav-link px-5 py-2 text-sm font-medium text-slate-700 dark:text-slate-300 hover:text-slate-900 hover:bg-slate-200/50 dark:hover:text-white dark:hover:bg-white/5 rounded-full transition">Community</a>
                <a href="{{ $isHomepage ? '#blog' : Hyde::relativeLink('posts') }}" class="nav-link px-5 py-2 text-sm font-medium {{ $isBlogPage || $isPostPage ? 'text-slate-900 dark:text-white bg-slate-200/50 dark:bg-white/5' : 'text-slate-700 dark:text-slate-300 hover:text-slate-900 hover:bg-slate-200/50 dark:hover:text-white dark:hover:bg-white/5' }} rounded-full transition">Blog</a>
                <a href="{{ $isHomepage ? '#contact' : Hyde::relativeLink('/') . '#contact' }}" class="ml-2 px-6 py-2 bg-primary hover:bg-primary/90 text-white text-sm font-bold rounded-full transition shadow-lg">Contact Me</a>
            </div>

            <!-- Theme Toggle & Mobile Menu Buttons -->
            <div class="flex items-center gap-2">
                <!-- Theme Toggle Button -->
                <button onclick="toggleTheme()"
                        class="p-2 text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white transition"
                        aria-label="Toggle theme">
                    <span class="icon-[ph--sun-fill] text-2xl hidden dark:block"></span>
                    <span class="icon-[ph--moon-fill] text-2xl dark:hidden"></span>
                </button>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn"
                        class="md:hidden p-2 text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white transition"
                        aria-label="Toggle menu">
                    <span class="icon-[ph--list] text-2xl"></span>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Panel -->
    <div id="mobile-menu"
         class="hidden md:hidden bg-white dark:bg-dark-900 border-b border-slate-200 dark:border-white/10 absolute w-full shadow-lg">
        <div class="px-4 py-4 space-y-2">
            <a href="{{ $isHomepage ? '#about' : Hyde::relativeLink('index') . '#about' }}" class="mobile-menu-link nav-link block px-4 py-3 text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-white/5 rounded-lg">About</a>
            <a href="{{ $isHomepage ? '#services' : Hyde::relativeLink('index') . '#services' }}" class="mobile-menu-link nav-link block px-4 py-3 text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-white/5 rounded-lg">Services</a>
            <a href="{{ $isHomepage ? '#community' : Hyde::relativeLink('index') . '#community' }}" class="mobile-menu-link nav-link block px-4 py-3 text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-white/5 rounded-lg">Community</a>
            <a href="{{ Hyde::relativeLink('posts') }}" class="mobile-menu-link block px-4 py-3 {{ $isBlogPage || $isPostPage ? 'text-slate-900 dark:text-white bg-slate-100 dark:bg-white/5' : 'text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-white/5' }} rounded-lg">Blog</a>
            <a href="{{ $isHomepage ? '#contact' : Hyde::relativeLink('index') . '#contact' }}" class="mobile-menu-link block px-4 py-3 text-primary dark:text-drupal-400 font-bold">Contact Me</a>
        </div>
    </div>
</nav>
