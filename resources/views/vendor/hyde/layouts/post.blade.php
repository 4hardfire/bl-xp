{{-- The Post Page Layout --}}
@extends('hyde::layouts.app')

@php
    $title = $page->title;

    // Extract H2 headings for table of contents
    $headings = [];
    $content = $page->markdown->body();
    preg_match_all('/^## (.+)$/m', $content, $matches);
    if (!empty($matches[1])) {
        foreach ($matches[1] as $index => $heading) {
            $slug = Illuminate\Support\Str::slug($heading);
            $headings[] = [
                'title' => $heading,
                'slug' => $slug,
                'number' => str_pad($index + 1, 2, '0', STR_PAD_LEFT)
            ];
        }
    }
@endphp

@section('content')

    <!-- Blog Detail -->
    <main class="pt-32 pb-20 min-h-screen relative bg-slate-50 dark:bg-dark-950 overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute top-0 -right-40 -z-10 w-[800px] h-[800px] bg-primary/10 dark:bg-drupal-600/20 rounded-full blur-[120px] opacity-50 dark:opacity-30 pointer-events-none"></div>
        <div class="absolute bottom-0 -left-40 -z-10 w-[600px] h-[600px] bg-accent-700/10 dark:bg-purple-900/20 rounded-full blur-[100px] opacity-40 dark:opacity-20 pointer-events-none"></div>

        <!-- Breadcrumb -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
            <a href="{{ Hyde::relativeLink('posts') }}" class="flex items-center gap-2 text-sm text-slate-500 dark:text-slate-500 hover:text-slate-900 dark:hover:text-white transition group">
                <span class="icon-[ph--arrow-left-bold] group-hover:-translate-x-1 transition"></span>
                Back to Blog
            </a>
        </div>

        <!-- Article Header -->
        <header class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mb-12 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 dark:text-white mb-6 leading-tight">{{ $page->title }}</h1>

            <div class="flex flex-wrap items-center justify-center gap-4 md:gap-6 text-sm text-slate-600 dark:text-slate-400 border-y border-slate-200 dark:border-white/5 py-6">
                @if($page->date)
                    <div class="flex items-center gap-2 whitespace-nowrap">
                        <span class="icon-[ph--calendar-blank-fill]"></span> {{ $page->date->short }}
                    </div>
                @endif
                @if($page->data('reading_time'))
                    <div class="flex items-center gap-2 whitespace-nowrap">
                        <span class="icon-[ph--clock-fill]"></span> {{ $page->data('reading_time') }} min read
                    </div>
                @endif
                @if($page->category)
                    <div class="flex items-center gap-2 whitespace-nowrap">
                        <span class="icon-[ph--tag-fill]"></span> {{ $page->category }}
                    </div>
                @endif
                @if($page->author)
                    <div class="flex items-center gap-2 whitespace-nowrap">
                        <span class="icon-[ph--user-fill]"></span> {{ $page->author }}
                    </div>
                @endif
            </div>
        </header>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

                <!-- Sidebar (TOC & Share) -->
                <aside class="hidden lg:block lg:col-span-3">
                    <div class="sticky top-32 space-y-6">
                        @if(!empty($headings))
                            <!-- Table of Contents & Share -->
                            <div class="glass-card dark:glass-card rounded-xl p-6">
                                <h4 class="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-widest mb-4">Table of Contents</h4>
                                <nav class="space-y-3 text-sm">
                                    @foreach($headings as $index => $heading)
                                        <a href="#{{ $heading['slug'] }}"
                                           class="block text-slate-500 dark:text-slate-500 hover:text-slate-900 dark:hover:text-white border-l-2 border-transparent hover:border-slate-300 dark:hover:border-slate-700 pl-3 transition"
                                           data-toc-link>
                                            {{ $heading['number'] }}. {{ $heading['title'] }}
                                        </a>
                                    @endforeach
                                </nav>

                                <div class="mt-8 pt-8 border-t border-slate-200 dark:border-white/5">
                                    <h4 class="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-widest mb-4">Share Article</h4>
                                    <div class="flex gap-3">
                                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(Hyde::url($page->getRoute())) }}&text={{ urlencode($page->title) }}" target="_blank" class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center text-slate-700 dark:text-slate-300 hover:bg-[#1DA1F2] hover:text-white hover:scale-110 transition-all duration-300" title="Share on Twitter">
                                            <span class="icon-[ph--twitter-logo-fill] text-lg"></span>
                                        </a>
                                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(Hyde::url($page->getRoute())) }}" target="_blank" class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center text-slate-700 dark:text-slate-300 hover:bg-[#0077B5] hover:text-white hover:scale-110 transition-all duration-300" title="Share on LinkedIn">
                                            <span class="icon-[ph--linkedin-logo-fill] text-lg"></span>
                                        </a>
                                        <button onclick="navigator.clipboard.writeText(window.location.href); this.querySelector('span').classList.replace('icon-[ph--link-fill]', 'icon-[ph--check-fill]'); setTimeout(() => this.querySelector('span').classList.replace('icon-[ph--check-fill]', 'icon-[ph--link-fill]'), 2000);" class="w-10 h-10 rounded-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center text-slate-700 dark:text-slate-300 hover:bg-primary dark:hover:bg-drupal-500 hover:text-white hover:scale-110 transition-all duration-300" title="Copy link">
                                            <span class="icon-[ph--link-fill] text-lg"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                </aside>

                <!-- Main Content -->
                <article class="lg:col-span-9 max-w-3xl prose prose-slate dark:prose-invert prose-headings:font-bold prose-headings:text-slate-900 dark:prose-headings:text-white prose-h2:mt-12 prose-h2:mb-6 prose-h3:mt-10 prose-h3:mb-4 prose-h4:mt-8 prose-h4:mb-3 prose-p:text-slate-600 dark:prose-p:text-slate-400 prose-a:text-primary dark:prose-a:text-drupal-400 prose-a:no-underline hover:prose-a:underline prose-strong:text-slate-900 dark:prose-strong:text-white prose-code:text-primary dark:prose-code:text-drupal-400 prose-code:bg-slate-100 dark:prose-code:bg-slate-800 prose-code:px-1 prose-code:py-0.5 prose-code:rounded prose-code:before:content-[''] prose-code:after:content-[''] prose-pre:bg-slate-900 dark:prose-pre:bg-[#0d1117] prose-pre:border prose-pre:border-slate-800 prose-img:rounded-xl prose-img:border prose-img:border-slate-200 dark:prose-img:border-slate-700 prose-blockquote:border-l-4 prose-blockquote:border-primary dark:prose-blockquote:border-drupal-500 prose-blockquote:bg-primary/5 dark:prose-blockquote:bg-drupal-500/10 prose-blockquote:py-4 prose-blockquote:px-6 prose-blockquote:rounded-r-lg prose-hr:border-slate-200 dark:prose-hr:border-slate-700 max-w-none">
                    @if($page->image)
                        <div class="not-prose rounded-xl overflow-hidden border border-slate-200 dark:border-slate-700 mb-12 shadow-2xl">
                            <img src="{{ $page->image->getSource() }}" alt="{{ $page->title }}" class="w-full">
                        </div>
                    @endif

                    @if($page->description)
                        <p class="lead text-lg !text-slate-700 dark:!text-slate-300 font-normal mb-8">
                            {{ $page->description }}
                        </p>
                    @endif

                    @php
                        $html = $page->markdown->toHtml();
                        // Add IDs to H2 headings for anchor links
                        foreach ($headings as $heading) {
                            $pattern = '/<h2>(.*?' . preg_quote($heading['title'], '/') . '.*?)<\/h2>/i';
                            $replacement = '<h2 id="' . $heading['slug'] . '">$1</h2>';
                            $html = preg_replace($pattern, $replacement, $html);
                        }
                        echo $html;
                    @endphp
                </article>

            </div>
        </div>

        <!-- Back to Blog CTA -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-20">
            <div class="glass-card dark:glass-card rounded-2xl p-8 text-center">
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">Read More Articles</h3>
                <p class="text-slate-600 dark:text-slate-400 mb-6 max-w-2xl mx-auto">Explore more articles about web development, technology, and personal insights.</p>
                <a href="{{ Hyde::relativeLink('posts') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-primary dark:bg-drupal-500 text-white rounded-lg hover:bg-primary-600 dark:hover:bg-drupal-600 transition font-medium">
                    <span class="icon-[ph--arrow-left-bold]"></span>
                    Back to All Posts
                </a>
            </div>
        </div>

    </main>

    @if(!empty($headings))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const tocLinks = document.querySelectorAll('[data-toc-link]');

                if (tocLinks.length === 0) return;

                // Smooth scroll for TOC links with proper offset
                tocLinks.forEach(link => {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        const targetId = this.getAttribute('href').substring(1);
                        const targetElement = document.getElementById(targetId);
                        if (targetElement) {
                            const headerOffset = 120; // Account for fixed header
                            const elementPosition = targetElement.getBoundingClientRect().top;
                            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                            window.scrollTo({
                                top: offsetPosition,
                                behavior: 'smooth'
                            });
                        }
                    });
                });
            });
        </script>
    @endif

@endsection
