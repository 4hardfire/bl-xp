@if(config('hyde.footer') !== false)
    <footer aria-label="Page footer" class="p-6 w-full mt-auto bg-primary dark:bg-gray-light-solid text-white">
        <div class="container mx-auto">
            <div class="flex flex-col sm:flex-row sm:justify-between gap-4 items-center text-center sm:text-left">
                <div class="flex flex-col gap-4 items-center sm:items-start">
                    <div class="flex items-center">
                        <a href="{{ Routes::get('index') }}" aria-label="Home page">
                            <img src="{{ Asset::mediaLink('BL-XP_Logo_white.svg') }}" alt="{{ config('hyde.name', 'HydePHP') }} logo" class="logo w-[100px] transition-transform duration-300 hover:scale-105">
                        </a>
                    </div>
                    <div>
                        <p>Made with <span class="icon-[tabler--heart-filled] size-5 -mb-1" aria-hidden="true"></span><span class="sr-only">love</span> in <span class="icon-[flag--be-4x3] size-5 -mb-1" aria-hidden="true"></span><span class="sr-only">Belgium</span></p>
                    </div>
                    <div>
                        <small class="font-semibold">{!! \Hyde\Support\Includes::get('footer', config('hyde.footer', 'BL-XP')) !!}</small>
                    </div>
                </div>
                <ul class="flex items-center space-x-4 mt-2">
                    <li>
                        <a href="https://www.linkedin.com/in/bernardo-paulino-425954ab/" target="_blank" class="hover:text-gray-400 flex items-center">
                            <span class="icon-[cib--linkedin] size-10"></span>
                            <span class="sr-only">LinkedIn</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/4hardfire" target="_blank" class="hover:text-gray-400 flex items-center">
                            <span class="icon-[cib--github] size-10"></span>
                            <span class="sr-only">GitHub</span>
                        </a>
                    </li>
                </ul>
            </div>
            <a id="scroll-top-btn" href="#app" aria-label="Go to top of page"
               class="fixed bottom-[35px] right-6 flex h-14 w-14 items-center justify-center rounded-full bg-primary dark:bg-primary-dark hover:bg-accent-700 dark:hover:bg-accent-700 text-white shadow-md ring-2 ring-white dark:ring-white opacity-60 hover:opacity-100 invisible transition-all duration-300">
                <svg width="1.5rem" height="1.5rem" role="presentation"
                     class="fill-current block mx-auto h-8 w-8"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22">
                    <path d="M7 14l5-5 5 5" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </footer>
@endif
