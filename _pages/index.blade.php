@extends('hyde::layouts.app')
@php
    $title = "Web Development and IT Solutions";
    use Hyde\Pages\MarkdownPost;
@endphp

@push('meta')
    <meta name="description" content="Specialized web development services helping businesses scale their digital presence securely and efficiently.">
@endpush

@section('content')

    <!-- Hero Section -->
    <section id="about" class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden min-h-screen flex items-center bg-slate-50 dark:bg-dark-950">
        <!-- Background Effects -->
        <div class="absolute top-0 right-0 -z-10 w-[800px] h-[800px] bg-primary/10 dark:bg-drupal-600/20 rounded-full blur-[120px] opacity-50 dark:opacity-30 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 -z-10 w-[600px] h-[600px] bg-accent-700/10 dark:bg-purple-900/20 rounded-full blur-[100px] opacity-40 dark:opacity-20 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center gap-32">
            <div class="lg:w-3/5 space-y-8 relative z-10">
                <h1 class="text-5xl lg:text-7xl font-bold text-slate-900 dark:text-white leading-tight">
                Crafting Scalable <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0066B2] to-accent-700 dark:from-primary-dark dark:to-accent-700">Web Solutions</span>
                </h1>

                <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed max-w-xl">
                    Hi, I'm <span class="font-semibold text-slate-900 dark:text-slate-200">Bernardo</span>. A Senior Web Backend Developer specialized in Drupal, custom module development, and complex migrations. I bridge the gap between business needs and technical excellence.
                </p>

                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="#contact" class="group relative px-8 py-4 bg-primary hover:bg-primary/90 text-white font-bold rounded-lg overflow-hidden transition shadow-lg hover:scale-[1.02]">
                        <span class="relative z-10 flex items-center gap-2">Let's connect <span class="icon-[ph--arrow-right-bold] group-hover:translate-x-1 transition"></span></span>
                    </a>
                    <a href="#community" class="px-8 py-4 bg-slate-100 dark:bg-white/5 text-slate-900 dark:text-white border border-slate-200 dark:border-white/10 rounded-lg font-medium hover:bg-slate-200 dark:hover:bg-white/10 transition flex items-center gap-2 backdrop-blur-sm">
                        <span class="icon-[ph--code]"></span> View My Code
                    </a>
                </div>

                <div class="flex items-center gap-8 pt-8 border-t border-slate-200 dark:border-white/10">
                    <div>
                        <div class="text-3xl font-bold text-slate-900 dark:text-white">10+</div>
                        <div class="text-xs text-slate-500 dark:text-slate-500 uppercase tracking-wider mt-1">Years Exp</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-slate-900 dark:text-white">50+</div>
                        <div class="text-xs text-slate-500 dark:text-slate-500 uppercase tracking-wider mt-1">Projects</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-slate-900 dark:text-white">100%</div>
                        <div class="text-xs text-slate-500 uppercase tracking-wider mt-1">Backend Focus</div>
                    </div>
                </div>
            </div>

            <!-- Banner with rotation effect from original template -->
            <div class="lg:w-2/5 w-full relative max-w-md mx-auto lg:mx-0 hidden lg:block">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 p-2 rotate-3 hover:rotate-0 transition duration-500 group">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/20 to-accent-700/20 dark:from-drupal-600/30 dark:to-purple-600/30 mix-blend-multiply z-10 group-hover:opacity-0 transition duration-700"></div>
                    <img src="{{ Asset::mediaLink('Bernardo.jpg') }}"
                         alt="Bernardo Paulino"
                         class="rounded-xl w-full object-cover aspect-square contrast-110 saturate-110">

                    <!-- Floating Badge -->
                    <div class="absolute bottom-8 left-8 bg-white/90 dark:bg-slate-900/90 backdrop-blur px-4 py-3 rounded-lg shadow-lg border border-slate-200 dark:border-slate-700 flex items-center gap-3">
                        <div class="bg-primary/10 dark:bg-blue-500/20 p-2 rounded-full text-primary dark:text-drupal-400 border border-primary/30 dark:border-drupal-500/30">
                            <span class="icon-[ph--check-circle-fill] text-xl"></span>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500 dark:text-slate-400 uppercase tracking-wide font-bold">Experience</p>
                            <p class="text-slate-900 dark:text-white font-bold">10+ Years in Drupal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Backend Expertise Section -->
    <section id="services" class="py-32 relative bg-transparent">
        <div class="absolute inset-0 bg-slate-100/50 dark:bg-dark-900/50 skew-y-2 transform origin-top-left -z-10"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
                <div>
                    <h2 class="text-sm font-bold text-accent-700 dark:text-drupal-400 tracking-widest uppercase mb-2">My Expertise</h2>
                    <h3 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white">Technical Services</h3>
                </div>
                    <p class="text-slate-600 dark:text-slate-400 max-w-lg leading-relaxed md:text-right">
                        Powering your digital platform with a strong and reliable technical core built for security, performance, and future growth.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Service 1 -->
                    <div class="glass-card bg-white dark:bg-transparent p-8 rounded-2xl hover:bg-slate-50 dark:hover:bg-white/5 transition duration-300 group border border-slate-200 dark:border-white/10">
                        <div class="w-12 h-12 bg-primary/10 dark:bg-drupal-500/10 rounded-lg flex items-center justify-center text-primary dark:text-drupal-400 mb-6 border border-primary/20 dark:border-drupal-500/20 group-hover:border-primary/50 dark:group-hover:border-drupal-500/50 group-hover:scale-110 transition">
                            <span class="icon-[ph--puzzle-piece-fill] text-2xl"></span>
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Custom Features Development</h4>
                        <p class="text-slate-600 dark:text-slate-400 text-md leading-relaxed">Building reliable Drupal features that follow best practices, from small customizations to more advanced functionality.</p>
                    </div>

                    <!-- Service 2 -->
                    <div class="glass-card bg-white dark:bg-transparent p-8 rounded-2xl hover:bg-slate-50 dark:hover:bg-white/5 transition duration-300 group border border-slate-200 dark:border-white/10">
                        <div class="w-12 h-12 bg-blue-500/10 rounded-lg flex items-center justify-center text-blue-500 dark:text-blue-400 mb-6 border border-blue-500/20 group-hover:border-blue-500/50 group-hover:scale-110 transition">
                            <span class="icon-[ph--arrows-left-right-fill] text-2xl"></span>
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Migrations</h4>
                        <p class="text-slate-600 dark:text-slate-400 text-md leading-relaxed">Expert handling of Drupal 7 to 11 migrations, including data imports from CSV, JSON, XML, and legacy databases.</p>
                    </div>

                    <!-- Service 3 -->
                    <div class="glass-card bg-white dark:bg-transparent p-8 rounded-2xl hover:bg-slate-50 dark:hover:bg-white/5 transition duration-300 group border border-slate-200 dark:border-white/10">
                        <div class="w-12 h-12 bg-purple-500/10 rounded-lg flex items-center justify-center text-purple-500 dark:text-purple-400 mb-6 border border-purple-500/20 group-hover:border-purple-500/50 group-hover:scale-110 transition">
                            <span class="icon-[ph--lightning-fill] text-2xl"></span>
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Performance Tuning</h4>
                        <p class="text-slate-600 dark:text-slate-400 text-md leading-relaxed">Auditing and optimizing Drupal sites. Varnish, Redis integration, database query optimization, and caching strategies.</p>
                    </div>

                    <!-- Service 4 -->
                    <div class="glass-card bg-white dark:bg-transparent p-8 rounded-2xl hover:bg-slate-50 dark:hover:bg-white/5 transition duration-300 group border border-slate-200 dark:border-white/10">
                        <div class="w-12 h-12 bg-cyan-500/10 rounded-lg flex items-center justify-center text-cyan-600 dark:text-cyan-400 mb-6 border border-cyan-500/20 group-hover:border-cyan-500/50 group-hover:scale-110 transition">
                            <span class="icon-[ph--cloud-arrow-up-fill] text-2xl"></span>
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Decoupled Drupal</h4>
                        <p class="text-slate-600 dark:text-slate-400 text-md leading-relaxed">Using Drupal as a headless CMS. Building APIs (JSON:API/GraphQL) consumed by React, Vue, or Next.js frontends.</p>
                    </div>

                    <!-- Service 5 -->
                    <div class="glass-card bg-white dark:bg-transparent p-8 rounded-2xl hover:bg-slate-50 dark:hover:bg-white/5 transition duration-300 group border border-slate-200 dark:border-white/10">
                        <div class="w-12 h-12 bg-green-500/10 rounded-lg flex items-center justify-center text-green-600 dark:text-green-400 mb-6 border border-green-500/20 group-hover:border-green-500/50 group-hover:scale-110 transition">
                            <span class="icon-[ph--plugs-connected-fill] text-2xl"></span>
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 dark:text-white mb-3">API Integrations</h4>
                        <p class="text-slate-600 dark:text-slate-400 text-md leading-relaxed">Connecting Drupal with third-party services, CRMs and external APIs.</p>
                    </div>

                    <!-- Service 6 -->
                    <div class="glass-card bg-white dark:bg-transparent p-8 rounded-2xl hover:bg-slate-50 dark:hover:bg-white/5 transition duration-300 group border border-slate-200 dark:border-white/10">
                        <div class="w-12 h-12 bg-orange-500/10 rounded-lg flex items-center justify-center text-orange-600 dark:text-orange-400 mb-6 border border-orange-500/20 group-hover:border-orange-500/50 group-hover:scale-110 transition">
                            <span class="icon-[ph--wrench-fill] text-2xl"></span>
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Site Maintenance</h4>
                        <p class="text-slate-600 dark:text-slate-400 text-md leading-relaxed">Security updates, bug fixes, feature enhancements, and long-term support for enterprise-level applications.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Module Maintenance / OSS -->
    <section id="community" class="py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <!-- Text Content -->
            <div class="order-1 lg:order-1">
                <h2 class="text-sm font-bold text-accent-700 dark:text-drupal-400 tracking-widest uppercase mb-2">Community</h2>
                <h3 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white mb-6">Open Source Contributions</h3>
                <p class="text-slate-600 dark:text-slate-400 mb-8 leading-relaxed">
                I believe in giving back to the community that powers the web. I help maintaining several modules on Drupal.org and contribute patches to both Core issues and Contrib projects.
                </p>

                <div class="space-y-4">
                    <!-- Module Item -->
                    <a href="https://www.drupal.org/project/graphql_compose_configs" target="_blank" class="block bg-slate-100 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700 p-4 rounded-lg hover:border-primary dark:hover:border-drupal-500 transition group">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-4">
                                <span class="icon-[ph--package-fill] w-6 h-6 inline-block text-slate-400 dark:text-slate-500 group-hover:text-primary dark:group-hover:text-drupal-400 transition flex-shrink-0"></span>
                                <div>
                                    <h5 class="text-base text-slate-900 dark:text-white font-bold group-hover:text-primary dark:group-hover:text-drupal-400 transition">GraphQL Compose Configs</h5>
                                    <p class="text-md text-slate-500 dark:text-slate-400 mt-1">Expose Drupal configuration through GraphQL, providing type-safe access to configuration data.</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Module Item -->
                    <a href="https://www.drupal.org/project/openfed" target="_blank" class="block bg-slate-100 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700 p-4 rounded-lg hover:border-primary dark:hover:border-drupal-500 transition group">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-4">
                                <span class="icon-[ph--package-fill] w-6 h-6 inline-block text-slate-400 dark:text-slate-500 group-hover:text-primary dark:group-hover:text-drupal-400 transition flex-shrink-0"></span>
                                <div>
                                    <h5 class="text-base text-slate-900 dark:text-white font-bold group-hover:text-primary dark:group-hover:text-drupal-400 transition">OpenFed</h5>
                                    <p class="text-md text-slate-500 dark:text-slate-400 mt-1">A general-purpose, multilingual Drupal 7 to Drupal 10 distribution. It has a strong focus on accessibility and it follows European guidelines for several topics, like GDPR.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                 <div class="mt-8">
                     <a href="https://www.drupal.org/u/bernardopaulino" target="_blank" class="text-primary dark:text-drupal-400 hover:underline hover:text-accent-700 dark:hover:text-white inline-flex items-center gap-2 transition group">
                         View Drupal.org Profile <span class="icon-[ph--arrow-right-bold] group-hover:translate-x-1 transition"></span>
                     </a>
                 </div>
            </div>

            <!-- Visual Abstract Representation -->
            <div class="order-2 lg:order-2 relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary to-accent-700 dark:from-drupal-600 dark:to-purple-600 blur-[100px] opacity-10 dark:opacity-20"></div>
                    <div class="relative grid grid-cols-2 gap-4">
                        <div class="space-y-4 mt-8">
                            <div class="glass-card bg-white dark:bg-transparent border border-slate-200 dark:border-white/10 p-6 rounded-xl text-center">
                                <span class="icon-[ph--presentation-duotone] text-4xl text-slate-900 dark:text-white mb-2 inline-block"></span>
                                <div class="text-2xl font-bold text-slate-900 dark:text-white">Various</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400 uppercase">Community events attended</div>
                            </div>
                            <div class="glass-card bg-white dark:bg-transparent border border-primary/30 dark:border-drupal-500/30 p-6 rounded-xl text-center bg-primary/5 dark:bg-drupal-600/20">
                                <span class="icon-[ph--users-three-duotone] text-4xl text-primary dark:text-drupal-400 mb-2 inline-block"></span>
                                <div class="text-2xl font-bold text-slate-900 dark:text-white">10</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400 uppercase">Modules maintained</div>
                            </div>
                    </div>
                        <div class="space-y-4">
                            <div class="glass-card bg-white dark:bg-transparent border border-slate-200 dark:border-white/10 p-6 rounded-xl text-center">
                                <span class="icon-[ph--coffee-duotone] text-4xl text-slate-900 dark:text-white mb-2 inline-block"></span>
                                <div class="text-2xl font-bold text-slate-900 dark:text-white">Infinite</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400 uppercase">Coffee consumed</div>
                            </div>
                            <div class="glass-card bg-white dark:bg-transparent border border-slate-200 dark:border-white/10 p-6 rounded-xl text-center">
                                <span class="icon-[ph--chat-circle-dots-duotone] text-4xl text-slate-900 dark:text-white mb-2 inline-block"></span>
                                <div class="text-2xl font-bold text-slate-900 dark:text-white">50+</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400 uppercase">Contributions on issues</div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Personal Blog / Hobbies -->
    <section id="blog" class="py-32 bg-slate-50 dark:bg-dark-900/30 border-t border-slate-200 dark:border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-sm font-bold text-accent-700 dark:text-drupal-400 tracking-widest uppercase mb-2">Blog</h2>
                <h3 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white">Latest Articles & Insights</h3>
            </div>

            @php
                // Get latest 3 blog posts
                $latestPosts = MarkdownPost::getLatestPosts()->take(3);
            @endphp

            @if($latestPosts->isNotEmpty())
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach($latestPosts as $post)
                        <article class="group cursor-pointer bg-white dark:bg-transparent border border-slate-200 dark:border-white/10 rounded-lg overflow-hidden hover:shadow-xl transition">
                            <a href="{{ $post->getRoute() }}" class="block">
                                @if($post->image)
                                    <div class="aspect-video overflow-hidden relative">
                                        <div class="absolute inset-0 bg-slate-900/30 dark:bg-slate-900/50 group-hover:bg-transparent transition duration-500 z-10"></div>
                                        <img src="{{ $post->image->getSource() }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700 grayscale group-hover:grayscale-0">
                                    </div>
                                @endif
                                <div class="p-6">
                                    <div class="flex items-center gap-3 text-xs text-slate-500 dark:text-slate-500 mb-2">
                                        @if($post->category)
                                            <span class="text-primary dark:text-drupal-400 uppercase">{{ $post->category }}</span>
                                            <span>•</span>
                                        @endif
                                        @if($post->date)
                                            <span>{{ strtoupper($post->date->short) }}</span>
                                        @endif
                                    </div>
                                    <h4 class="text-lg font-bold text-slate-900 dark:text-white group-hover:text-primary dark:group-hover:text-drupal-400 transition mb-2">{{ $post->title }}</h4>
                                    @if($post->description)
                                        <p class="text-sm text-slate-600 dark:text-slate-400 line-clamp-2">{{ $post->description }}</p>
                                    @endif
                                </div>
                            </a>
                        </article>
                    @endforeach
                </div>
            @else
                <div class="text-center py-12">
                    <p class="text-slate-600 dark:text-slate-400">No articles yet. Check back soon!</p>
                </div>
            @endif

            <!-- View All Link -->
            <div class="text-center mt-12">
                <a href="{{ Hyde::relativeLink('posts') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-white dark:bg-slate-800 text-slate-900 dark:text-white border-2 border-slate-200 dark:border-slate-700 rounded-lg font-medium hover:border-primary dark:hover:border-drupal-500 hover:bg-slate-50 dark:hover:bg-slate-700 transition-all duration-300 group">
                    <span>View All Articles</span>
                    <span class="icon-[ph--arrow-right-bold] text-lg group-hover:translate-x-1 transition"></span>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-32 relative overflow-hidden bg-slate-50 dark:bg-dark-950">
        <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-primary to-accent-700"></div>
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-3xl shadow-2xl border border-slate-200 dark:border-slate-700 overflow-hidden">

                <!-- Contact Info -->
                <div class="bg-slate-100 dark:bg-slate-900 p-12 text-slate-900 dark:text-white relative overflow-hidden">
                    <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-primary rounded-full opacity-10 dark:opacity-20 blur-3xl"></div>
                    <div class="relative z-10">
                        <h3 class="text-3xl font-bold mb-6 text-slate-900 dark:text-white text-center">Get in touch</h3>
                        <p class="text-slate-600 dark:text-slate-300 text-center mb-8 leading-relaxed">
                            Interested in working together? Send me an email and I'll get back to you within 24 hours.
                        </p>

                        <div class="space-y-4 mb-10">
                            <div class="flex items-center justify-center gap-3 text-slate-700 dark:text-slate-300">
                                <span class="icon-[ph--envelope-simple-fill] text-primary dark:text-drupal-400 text-xl"></span>
                                <span>bernardo.lemos@live.com.pt</span>
                            </div>
                            <div class="flex items-center justify-center gap-3 text-slate-700 dark:text-slate-300">
                                <span class="icon-[ph--map-pin-fill] text-primary dark:text-drupal-400 text-xl"></span>
                                <span>Remote / Europe</span>
                            </div>
                        </div>

                        <div class="flex justify-center mb-8">
                            <a href="mailto:bernardo.lemos@live.com.pt" class="group relative px-10 py-4 bg-primary hover:bg-primary/90 text-white font-bold rounded-lg overflow-hidden transition shadow-lg hover:scale-[1.02] inline-flex items-center gap-3">
                                <span>Send me an email</span>
                                <span class="icon-[ph--paper-plane-tilt-fill] text-xl"></span>
                            </a>
                        </div>

                        <div class="flex justify-center gap-4 pt-8 border-t border-slate-200 dark:border-slate-700">
                            <a href="https://www.linkedin.com/in/bernardo-paulino-425954ab/" target="_blank" class="w-12 h-12 rounded-full bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-white flex items-center justify-center hover:bg-primary dark:hover:bg-drupal-500 hover:text-white hover:scale-110 hover:shadow-lg hover:shadow-primary/30 dark:hover:shadow-drupal-500/30 transition-all duration-300" aria-label="LinkedIn Profile"><span class="icon-[ph--linkedin-logo-fill] text-2xl"></span></a>
                            <a href="https://github.com/4hardfire" target="_blank" class="w-12 h-12 rounded-full bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-white flex items-center justify-center hover:bg-slate-900 dark:hover:bg-slate-700 hover:text-white hover:scale-110 hover:shadow-lg hover:shadow-slate-900/30 dark:hover:shadow-slate-700/30 transition-all duration-300" aria-label="GitHub Profile"><span class="icon-[ph--github-logo-fill] text-2xl"></span></a>
                            <a href="https://www.drupal.org/u/bernardopaulino" target="_blank" class="w-12 h-12 rounded-full bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-white flex items-center justify-center hover:bg-[#0678BE] dark:hover:bg-drupal-400 hover:text-white hover:scale-110 hover:shadow-lg hover:shadow-[#0678BE]/30 dark:hover:shadow-drupal-400/30 transition-all duration-300" aria-label="Drupal.org Profile">
                                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.78 5.113C14.09 3.425 12.48 1.815 11.998 1c-.48.815-2.09 2.425-3.778 4.113-2.534 2.533-5.405 5.405-5.405 9.42a9.185 9.185 0 1018.37 0c0-4.015-2.871-6.887-5.405-9.42zM10.41 18.171c-.363.364-.844.462-1.229.462-.296 0-.565-.068-.764-.204-.346-.237-.555-.644-.555-1.133 0-.47.184-.984.543-1.554.348-.555.858-1.124 1.435-1.728a9.116 9.116 0 011.096-1.003c-.043.283-.088.573-.127.864a15.06 15.06 0 00-.065 1.613c0 1.142-.278 1.804-.735 2.261-.363.363-.654.564-.843.654z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

@endsection

