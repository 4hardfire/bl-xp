<div class="dropdown-container relative w-full md:w-auto" x-data="{ open: false }">
    <button class="dropdown-button w-full md:w-auto text-left md:text-center py-2 px-4 md:px-2 md:py-1 text-gray-700 hover:text-gray-900 dark:text-gray-100 flex items-center justify-between md:inline-flex"
            x-on:click="open = ! open"
            @click.outside="open = false"
            @keydown.escape.window="open = false">
        <span>{{ $label }}</span>
        <svg class="transition-all dark:fill-white"
             x-bind:style="open ? { transform: 'rotate(180deg)' } : ''"
             xmlns="http://www.w3.org/2000/svg"
             height="24px"
             viewBox="0 0 24 24"
             width="24px"
             fill="#000000">
             <path d="M0 0h24v24H0z" fill="none"/>
             <path d="M7 10l5 5 5-5z"/>
        </svg>
    </button>
    <div class="dropdown md:absolute shadow-lg bg-white dark:bg-gray-700 z-50 md:w-auto md:mx-0 md:right-0"
         :class="open ? '' : 'hidden'"
         x-cloak="">
        <ul class="dropdown-items py-2 w-full">
            @isset($items)
                @foreach ($items as $item)
                    <li class="whitespace-nowrap w-full">
                        @include('hyde::components.navigation.navigation-link')
                    </li>
                @endforeach
            @else
                {{ $slot }}
            @endif
        </ul>
    </div>
</div>
