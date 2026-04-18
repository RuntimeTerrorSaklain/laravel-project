@props([
    'eyebrow' => null,
    'title' => '',
    'description' => null,
    'align' => 'left',
])

@php
    $isCenter = $align === 'center';
@endphp

<div class="{{ $isCenter ? 'mx-auto max-w-3xl text-center' : 'max-w-3xl' }}">
    @if ($eyebrow)
        <p class="text-[0.6875rem] font-bold uppercase tracking-[0.14em] text-secondary">{{ $eyebrow }}</p>
    @endif
    <h2 class="mt-3 font-headline text-3xl font-extrabold tracking-tight text-on-surface sm:text-4xl">{{ $title }}</h2>
    @if ($description)
        <p class="mt-4 text-base leading-7 text-secondary">{{ $description }}</p>
    @endif
</div>
