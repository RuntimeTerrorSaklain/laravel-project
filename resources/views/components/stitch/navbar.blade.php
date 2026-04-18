@props(['nav' => [], 'brand' => 'Homify'])

<header class="fixed inset-x-0 top-0 z-50 border-b border-outline-variant/15 bg-surface/80 backdrop-blur-2xl">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
        <a href="{{ route('home') }}" class="flex items-center gap-2">
            <span class="material-symbols-outlined text-primary" style="font-size: 26px;">real_estate_agent</span>
            <span class="font-headline text-[1.9rem] font-extrabold tracking-tight text-primary">{{ $brand }}</span>
        </a>

        <nav class="hidden items-center gap-8 md:flex">
            @foreach ($nav as $item)
                <a
                    href="{{ route($item['route']) }}"
                    class="text-sm font-semibold transition-colors {{ request()->routeIs($item['route']) ? 'text-primary' : 'text-secondary hover:text-primary' }}"
                >
                    {{ $item['label'] }}
                </a>
            @endforeach
        </nav>

        <div class="hidden items-center gap-2 md:flex">
            @auth
                <a href="{{ route('dashboard') }}" class="rounded-full bg-primary-container px-5 py-2.5 text-sm font-bold text-on-surface transition hover:-translate-y-0.5 hover:shadow-lg hover:shadow-primary/25">
                    Dashboard
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="rounded-full border border-outline-variant/50 bg-surface-container-lowest px-5 py-2.5 text-sm font-bold text-secondary transition hover:border-primary hover:text-primary">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="rounded-full border border-outline-variant/50 bg-surface-container-lowest px-5 py-2.5 text-sm font-bold text-secondary transition hover:border-primary hover:text-primary">
                    Login
                </a>
                <a href="{{ route('register') }}" class="rounded-full bg-primary-container px-5 py-2.5 text-sm font-bold text-on-surface transition hover:-translate-y-0.5 hover:shadow-lg hover:shadow-primary/25">
                    Register
                </a>
            @endauth
        </div>
    </div>

    <nav class="border-t border-outline-variant/15 px-4 py-3 md:hidden">
        <div class="mx-auto flex max-w-7xl items-center gap-4 overflow-x-auto pb-2">
            @foreach ($nav as $item)
                <a
                    href="{{ route($item['route']) }}"
                    class="whitespace-nowrap rounded-full px-3 py-1.5 text-sm font-semibold {{ request()->routeIs($item['route']) ? 'bg-primary text-white' : 'bg-surface-container-low text-secondary' }}"
                >
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>

        <div class="mx-auto mt-2 flex max-w-7xl items-center gap-2 overflow-x-auto">
            @auth
                <a href="{{ route('dashboard') }}" class="whitespace-nowrap rounded-full bg-primary-container px-3 py-1.5 text-sm font-semibold text-on-surface">
                    Dashboard
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="whitespace-nowrap rounded-full border border-outline-variant/50 bg-surface-container-lowest px-3 py-1.5 text-sm font-semibold text-secondary">
                        Logout
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="whitespace-nowrap rounded-full border border-outline-variant/50 bg-surface-container-lowest px-3 py-1.5 text-sm font-semibold text-secondary">
                    Login
                </a>
                <a href="{{ route('register') }}" class="whitespace-nowrap rounded-full bg-primary-container px-3 py-1.5 text-sm font-semibold text-on-surface">
                    Register
                </a>
            @endauth
        </div>
    </nav>
</header>
