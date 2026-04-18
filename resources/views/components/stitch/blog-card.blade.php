@props(['post'])

<article class="overflow-hidden rounded-xl bg-surface-container-lowest shadow-[0_18px_34px_-24px_rgba(25,28,30,0.32)]">
    <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="h-52 w-full object-cover" />
    <div class="space-y-3 p-6">
        <p class="text-[0.6875rem] font-bold uppercase tracking-[0.09em] text-secondary">
            {{ $post['category'] }} • {{ $post['published_at'] }}
        </p>
        <h3 class="font-headline text-2xl font-bold text-on-surface">{{ $post['title'] }}</h3>
        <p class="text-sm leading-7 text-secondary">{{ $post['excerpt'] }}</p>
        <a href="#" class="inline-flex items-center text-sm font-bold text-primary hover:underline">Read More</a>
    </div>
</article>
