@props(['value' => '', 'label' => ''])

<div class="rounded-xl bg-surface-container-lowest p-5 shadow-[0_14px_30px_-20px_rgba(25,28,30,0.2)]">
    <p class="font-headline text-3xl font-extrabold text-primary">{{ $value }}</p>
    <p class="mt-1 text-sm text-secondary">{{ $label }}</p>
</div>
