<a href="{{ Routes::get('index') }}" class="font-bold px-1" aria-label="Home page">
    <img src="{{ Asset::mediaLink('BL-XP_Logo.svg') }}" alt="{{ config('hyde.name', 'HydePHP') }} logo" class="dark:hidden w-[100px] transition-transform duration-300 hover:scale-105">
    <img src="{{ Asset::mediaLink('BL-XP_Logo_white.svg') }}" alt="{{ config('hyde.name', 'HydePHP') }} logo" class="hidden dark:block w-[100px] transition-transform duration-300 hover:scale-105">
</a>
