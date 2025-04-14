@php
    $navigation = \Hyde\Framework\Features\Navigation\NavigationMenu::create();
@endphp

<header class="relative" role="banner">
    <div class="absolute left-1/2 transform -translate-x-1/2 w-full p-4 sm:p-6 z-10">
        <nav aria-label="Main navigation" id="main-navigation" class="container flex flex-wrap mx-auto rounded-xl p-4 items-center justify-between shadow-lg sm:shadow-xl bg-gray-200 md:shadow-none dark:bg-gray-light-solid">
            <div class="flex flex-grow items-center flex-shrink-0 text-normal-dark dark:text-normal">
                @include('hyde::components.navigation.navigation-brand')
            </div>

            <!-- Theme toggle button visible on mobile, hidden on desktop -->
            <div class="md:hidden order-2">
                <x-hyde::navigation.theme-toggle-button/>
            </div>

            <div class="block md:hidden order-3">
                <button id="navigation-toggle-button"
                        class="flex items-center px-3 py-1 hover:text-gray-700 dark:text-gray-200"
                        aria-label="Toggle navigation menu"
                        aria-expanded="false"
                        aria-controls="main-navigation-links"
                        @click="navigationOpen = ! navigationOpen">
                    <svg id="open-main-navigation-menu-icon"
                         class="dark:fill-gray-200"
                         xmlns="http://www.w3.org/2000/svg"
                         height="24"
                         width="24"
                         viewBox="0 0 24 24"
                         x-show="! navigationOpen"
                         style="display: block;"
                         aria-hidden="true">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
                    </svg>
                    <svg id="close-main-navigation-menu-icon"
                         class="dark:fill-gray-200"
                         xmlns="http://www.w3.org/2000/svg"
                         height="24"
                         width="24"
                         viewBox="0 0 24 24"
                         x-show="navigationOpen"
                         style="display: none;"
                         aria-hidden="true">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
                    </svg>
                    <span class="sr-only" x-text="navigationOpen ? 'Close menu' : 'Open menu'"></span>
                </button>
            </div>

            <div id="main-navigation-links"
                 class="w-full x-uncloak-md md:flex flex-grow md:flex-grow-0 md:items-center md:w-auto border-t sm:-ml-4 sm:-mr-4 md:-ml-0 md:-mr-0 mt-3 pt-3 md:border-none md:mt-0 md:py-0 border-gray-200 dark:border-gray-700 order-4"
                 :class="navigationOpen ? '' : 'hidden'"
                 x-cloak
                 role="navigation"
                 aria-label="Main menu">
                <ul class="md:flex-grow md:flex justify-end items-center" role="menubar">
                    @foreach ($navigation->items as $item)
                        <li role="none">
                            @if($item instanceof \Hyde\Framework\Features\Navigation\DropdownNavItem)
                                <x-hyde::navigation.dropdown :label="\Hyde\Hyde::makeTitle($item->label)" :items="$item->items"/>
                            @else
                                @include('hyde::components.navigation.navigation-link')
                            @endif
                        </li>
                    @endforeach
                    <!-- Theme toggle button visible on desktop, hidden on mobile -->
                    <li class="hidden md:block md:ml-4" role="none">
                        <x-hyde::navigation.theme-toggle-button/>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
