@if(config('hyde.footer') !== false)
    <footer aria-label="Page footer" class="p-6 w-full mt-auto bg-primary dark:bg-gray-light-solid text-white">
        <div class="container mx-auto">
            <div class="flex flex-row justify-between gap-4">
                <div class="flex flex-col gap-4">
                    <div class="flex items-center">
                        <a href="{{ Routes::get('index') }}" aria-label="Home page">
                            <img src="{{ Asset::mediaLink('BL-XP_Logo_white.svg') }}" alt="{{ config('hyde.name', 'HydePHP') }} logo" class="logo w-[100px]">
                        </a>
                    </div>
                    <div>
                        <small class="font-semibold">{!! \Hyde\Support\Includes::get('footer', config('hyde.footer', 'BL-XP')) !!}</small>
                    </div>
                </div>
                <ul class="flex items-center space-x-4">
                    <li>
                        <a href="#" class="hover:text-gray-400 flex items-center">
                            <span class="icon-[cib--linkedin] size-10"></span>
                            <span class="sr-only">LinkedIn</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-gray-400 flex items-center">
                            <span class="icon-[cib--github] size-10"></span>
                            <span class="sr-only">GitHub</span>
                        </a>
                    </li>
                </ul>
            </div>
            <a id="scroll-top-btn" href="#app" aria-label="Go to top of page"
               class="fixed bottom-[35px] right-6 flex h-14 w-14 items-center justify-center rounded-full bg-white dark:bg-transparent hover:bg-primary dark:hover:bg-white hover:ring-white text-primary dark:text-white hover:text-white dark:hover:text-primary dark:text-black shadow-md ring-2 ring-primary dark:ring-white opacity-0 invisible transition-all duration-300">
                <svg width="1.5rem" height="1.5rem" role="presentation"
                     class="fill-current block mx-auto h-8 w-8"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22">
                    <path d="M7 14l5-5 5 5" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </footer>
@endif