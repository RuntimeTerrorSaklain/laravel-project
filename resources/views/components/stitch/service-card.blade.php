@props(['service'])

<article class="rounded-xl bg-surface-container-lowest p-6 shadow-[0_16px_34px_-22px_rgba(25,28,30,0.28)]">
    <h3 class="font-headline text-xl font-bold text-on-surface">{{ $service['title'] }}</h3>
    <p class="mt-3 text-sm leading-7 text-secondary">{{ $service['description'] }}</p>
</article>
