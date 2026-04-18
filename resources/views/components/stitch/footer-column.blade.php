@props(['title' => '', 'items' => []])
<div class="space-y-5">
    <h4 class="text-[0.6875rem] font-bold uppercase tracking-[0.12em] text-primary-container">{{ $title }}</h4>
    <ul class="space-y-3">
        @foreach ($items as $item)
            <li>
                <a href="#" class="text-sm text-inverse-on-surface/75 transition hover:text-primary-container">{{ $item }}</a>
            </li>
        @endforeach
    </ul>
</div>
