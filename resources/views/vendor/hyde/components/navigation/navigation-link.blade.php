<a href="{{ $item }}" {!! $item->isCurrent() ? 'aria-current="page"' : '' !!} @class([
    'block w-full px-4 py-2 md:py-1 md:px-2 text-gray-700 hover:text-gray-900 dark:text-gray-100 hover:bg-gray-100 dark:hover:bg-gray-600 md:hover:bg-transparent',
    'border-l-4 border-accent-700 md:border-none font-medium bg-gray-100 dark:bg-gray-800 md:bg-transparent dark:md:bg-transparent' => $item->isCurrent()
])>{{ $item->label }}</a>
