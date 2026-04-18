@props([
    'brand' => 'Homify',
    'tagline' => 'Architectural Curator Excellence',
    'nav' => [],
    'regions' => [],
])

<footer class="bg-on-secondary-fixed pt-20">
    <div class="mx-auto grid max-w-7xl grid-cols-1 gap-10 px-6 pb-20 sm:px-8 md:grid-cols-2 lg:grid-cols-4">
        <div class="space-y-5">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary-container" style="font-size: 24px;">real_estate_agent</span>
                <span class="font-headline text-3xl font-extrabold tracking-tight text-white">{{ $brand }}</span>
            </div>
            <p class="max-w-xs text-sm leading-7 text-inverse-on-surface/75">
                Redefining luxury real estate through {{ strtolower($tagline) }}.
            </p>
        </div>

        <div class="space-y-5">
            <h4 class="text-[0.6875rem] font-bold uppercase tracking-[0.12em] text-primary-container">Navigation</h4>
            <ul class="space-y-3">
                @foreach ($nav as $item)
                    <li>
                        <a href="{{ route($item['route']) }}" class="text-sm text-inverse-on-surface/75 transition hover:text-primary-container">{{ $item['label'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <x-stitch.footer-column title="Regions" :items="$regions" />

        <div class="space-y-5">
            <h4 class="text-[0.6875rem] font-bold uppercase tracking-[0.12em] text-primary-container">Subscribe</h4>
            <form class="space-y-4">
                <input type="email" placeholder="Email address" class="w-full rounded-lg border border-white/10 bg-white/5 px-4 py-3 text-sm text-inverse-on-surface placeholder:text-inverse-on-surface/45 backdrop-blur-md focus:border-primary focus:ring-primary" />
                <button type="button" class="w-full rounded-lg bg-primary py-3 text-sm font-bold text-white transition hover:bg-primary-container hover:text-on-surface">
                    Join Insider List
                </button>
            </form>
        </div>
    </div>

    <div class="border-t border-white/5 px-6 py-7 sm:px-8">
        <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-3 md:flex-row">
            <p class="text-xs tracking-wide text-inverse-on-surface/45">&copy; 2026 {{ $brand }} Real Estate. {{ $tagline }}.</p>
            <div class="flex items-center gap-6">
                <a href="#" class="text-xs text-inverse-on-surface/45 transition hover:text-primary-container">Privacy Policy</a>
                <a href="{{ route('contact') }}" class="text-xs text-inverse-on-surface/45 transition hover:text-primary-container">Contact</a>
            </div>
        </div>
    </div>
</footer>
