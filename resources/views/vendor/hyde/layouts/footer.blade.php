@if(config('hyde.footer') !== false)
    <!-- Footer -->
    <footer class="border-t border-slate-200 dark:border-white/5 bg-slate-50 dark:bg-dark-950 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center gap-2 mb-4">
                        <a href="{{ Routes::get('index') }}" aria-label="Home page">
                            <img src="{{ Asset::mediaLink('BL-XP_Logo_white.svg') }}" alt="{{ config('hyde.name', 'BL-XP') }}" class="h-8 w-auto transition-transform duration-300 hover:scale-105 dark:block hidden">
                            <img src="{{ Asset::mediaLink('BL-XP_Logo.svg') }}" alt="{{ config('hyde.name', 'BL-XP') }}" class="h-8 w-auto transition-transform duration-300 hover:scale-105 dark:hidden">
                        </a>
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 text-sm max-w-xs leading-relaxed">
                        Specialized Drupal development services helping businesses scale their digital presence securely and efficiently.
                    </p>
                </div>

                <div>
                    <h4 class="font-bold text-slate-900 dark:text-white mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                        <li><a href="{{ Hyde::relativeLink('posts') }}" class="hover:text-primary dark:hover:text-drupal-400 transition">Blog articles</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-slate-900 dark:text-white mb-4">Connect</h4>
                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                        <li><a href="https://www.linkedin.com/in/bernardo-paulino-425954ab/" target="_blank" class="hover:text-primary dark:hover:text-drupal-400 transition">LinkedIn</a></li>
                        <li><a href="https://github.com/4hardfire" target="_blank" class="hover:text-primary dark:hover:text-drupal-400 transition">GitHub</a></li>
                        <li><a href="https://www.drupal.org/u/bernardopaulino" target="_blank" class="hover:text-primary dark:hover:text-drupal-400 transition">Drupal.org</a></li>
                        <li><a href="mailto:bernardo.lemos@live.com.pt" class="hover:text-primary dark:hover:text-drupal-400 transition">Email</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-slate-200 dark:border-white/5 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-slate-500 dark:text-slate-400">
                <p>{!! \Hyde\Support\Includes::get('footer', config('hyde.footer', 'BL-XP')) !!}</p>
                <div class="flex items-center gap-4 font-mono">
                    <span class="flex items-center gap-1 uppercase"><span class="icon-[ph--cookie-fill]"></span> No cookies</span>
                    <span class="flex items-center gap-1 uppercase"><span class="icon-[ph--shield-check-fill]"></span> Privacy focused</span>
                </div>
            </div>
        </div>
    </footer>
@endif
