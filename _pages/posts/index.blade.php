@extends('hyde::layouts.app')
@php
    $title = "Blog";
    use Hyde\Pages\MarkdownPost;
@endphp

@section('content')

    <!-- Blog Listing -->
    <main class="pt-32 pb-20 min-h-screen relative bg-slate-50 dark:bg-dark-950">
        <!-- Background Effects -->
        <div class="absolute top-0 right-0 -z-10 w-[800px] h-[800px] bg-primary/10 dark:bg-drupal-600/20 rounded-full blur-[120px] opacity-50 dark:opacity-30 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 -z-10 w-[600px] h-[600px] bg-accent-700/10 dark:bg-purple-900/20 rounded-full blur-[100px] opacity-40 dark:opacity-20 pointer-events-none"></div>

        <!-- Breadcrumb -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
            <a href="{{ Hyde::relativeLink('/') }}" class="flex items-center gap-2 text-sm text-slate-500 dark:text-slate-500 hover:text-slate-900 dark:hover:text-white transition group">
                <span class="icon-[ph--arrow-left-bold] group-hover:-translate-x-1 transition"></span>
                Back to Home
            </a>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header & Search -->
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold text-slate-900 dark:text-white mb-4">Blog Posts</h1>
                    <p class="text-slate-600 dark:text-slate-400 max-w-lg">A collection of articles where I share thoughts on web development, technology, investing, and my personal learning journey.</p>
                </div>
            </div>

            @php
                // Get all blog posts, newest first
                $posts = MarkdownPost::getLatestPosts();
            @endphp

            @if($posts->isNotEmpty())
                <!-- Featured Article (First Post) -->
                @php($featuredPost = $posts->first())
                <a href="{{ $featuredPost->getRoute() }}" class="group glass-card dark:glass-card rounded-2xl p-1 mb-12 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition duration-300 block">
                    <div class="flex flex-col md:flex-row h-full">
                        @if($featuredPost->image)
                            <div class="md:w-2/5 relative overflow-hidden rounded-t-xl md:rounded-l-xl md:rounded-tr-none">
                                <div class="absolute inset-0 bg-primary/40 dark:bg-drupal-900/40 mix-blend-multiply z-10"></div>
                                <img src="{{ $featuredPost->image->getSource() }}" class="w-full h-64 md:h-full object-cover group-hover:scale-105 transition duration-700" alt="{{ $featuredPost->title }}">
                            </div>
                        @endif
                        <div class="{{ $featuredPost->image ? 'md:w-3/5' : 'w-full' }} p-8 md:p-10 flex flex-col justify-center">
                            <div class="flex items-center gap-3 text-xs text-primary dark:text-drupal-400 mb-4">
                                <span class="bg-primary/10 dark:bg-drupal-500/10 px-2 py-1 rounded uppercase">Featured</span>
                                <span>•</span>
                                @if($featuredPost->date)
                                    <span>{{ strtoupper($featuredPost->date->short) }}</span>
                                @endif
                            </div>
                            <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-4 group-hover:text-primary dark:group-hover:text-drupal-400 transition">{{ $featuredPost->title }}</h2>
                            @if($featuredPost->description)
                                <p class="text-slate-600 dark:text-slate-400 mb-6 leading-relaxed">{{ $featuredPost->description }}</p>
                            @endif
                            <div class="flex items-center gap-2 text-md text-slate-900 dark:text-white mt-auto">
                                <span>Read article</span>
                                <span class="icon-[ph--arrow-right-bold] text-lg group-hover:translate-x-1 transition"></span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Grid Articles -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($posts->skip(1) as $post)
                        <article class="group glass-card dark:glass-card rounded-xl overflow-hidden hover:translate-y-[-4px] transition duration-300">
                            <a href="{{ $post->getRoute() }}" class="block">
                                @if($post->image)
                                    <!-- Article Image -->
                                    <div class="relative overflow-hidden h-48">
                                        <div class="absolute inset-0 bg-primary/30 dark:bg-drupal-900/30 mix-blend-multiply z-10"></div>
                                        <img src="{{ $post->image->getSource() }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-700" alt="{{ $post->title }}">
                                    </div>
                                @endif

                                <!-- Article Content -->
                                <div class="p-6">
                                    <div class="flex justify-between items-start mb-4">
                                        <div class="w-10 h-10 rounded-lg bg-primary/10 dark:bg-purple-500/10 flex items-center justify-center text-primary dark:text-purple-400 border border-primary/20 dark:border-purple-500/20">
                                            <span class="icon-[ph--file-text-fill] text-xl"></span>
                                        </div>
                                        @if($post->date)
                                            <span class="text-xs text-slate-500 dark:text-slate-500">{{ strtoupper($post->date->short) }}</span>
                                        @endif
                                    </div>
                                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3 group-hover:text-primary dark:group-hover:text-purple-400 transition">{{ $post->title }}</h3>
                                    @if($post->description)
                                        <p class="text-slate-600 dark:text-slate-400 text-sm mb-4 line-clamp-3">{{ $post->description }}</p>
                                    @endif
                                    @if($post->category)
                                        <div class="flex flex-wrap gap-2">
                                            <span class="text-[10px] border border-slate-300 dark:border-slate-700 rounded px-2 py-1 text-slate-600 dark:text-slate-400">#{{ $post->category }}</span>
                                        </div>
                                    @endif
                                </div>
                            </a>
                        </article>
                    @endforeach
                </div>
            @else
                <!-- Empty State -->
                <div class="text-center py-20">
                    <div class="mb-8 flex justify-center">
                        <span class="icon-[ph--file-dashed-fill] text-9xl text-slate-300 dark:text-slate-700"></span>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">No posts yet</h3>
                    <p class="text-slate-600 dark:text-slate-400 max-w-md mx-auto">
                        Check back soon for articles and insights.
                    </p>
                </div>
            @endif

        </div>
    </main>

@endsection

