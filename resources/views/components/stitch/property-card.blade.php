@props(['property'])

<article class="overflow-hidden rounded-xl bg-surface-container-lowest shadow-[0_20px_38px_-24px_rgba(25,28,30,0.28)] transition hover:-translate-y-1">
    <div class="relative h-56 overflow-hidden">
        <img src="{{ $property['image'] }}" alt="{{ $property['title'] }}" class="h-full w-full object-cover" />
        <span class="absolute left-4 top-4 rounded-full bg-white/85 px-3 py-1 text-[0.6875rem] font-bold uppercase tracking-[0.09em] text-primary">{{ $property['status'] }}</span>
    </div>

    <div class="space-y-4 p-6">
        <div>
            <p class="text-[0.6875rem] font-bold uppercase tracking-[0.09em] text-secondary">{{ $property['city'] }}</p>
            <h3 class="mt-2 font-headline text-2xl font-bold text-on-surface">{{ $property['title'] }}</h3>
        </div>

        <div class="flex items-center justify-between">
            <p class="text-xl font-extrabold text-primary">{{ $property['price'] }}</p>
            <span class="rounded-full bg-surface-container-low px-3 py-1 text-xs font-semibold text-secondary">{{ $property['type'] }}</span>
        </div>

        <div class="flex flex-wrap items-center gap-3 text-sm text-secondary">
            <span>{{ $property['beds'] }} Beds</span>
            <span>{{ $property['baths'] }} Baths</span>
            <span>{{ $property['area'] }}</span>
        </div>
    </div>
</article>
