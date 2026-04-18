<x-stitch.layout :title="$meta['title']" :site="$site">
    <section class="mx-auto grid w-full max-w-7xl gap-10 px-4 pb-14 pt-3 sm:px-6 lg:grid-cols-2 lg:items-center lg:px-8">
        <div class="space-y-6 stitch-reveal">
            <p class="inline-flex rounded-full bg-surface-container-low px-4 py-1.5 text-[0.6875rem] font-bold uppercase tracking-[0.12em] text-secondary">{{ $site['hero']['eyebrow'] }}</p>
            <h1 class="font-headline text-4xl font-extrabold tracking-tight text-on-surface sm:text-5xl lg:text-6xl">{{ $site['hero']['title'] }}</h1>
            <p class="max-w-xl text-base leading-8 text-secondary">{{ $site['hero']['description'] }}</p>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route($site['hero']['primary_cta']['route']) }}" class="rounded-xl bg-gradient-to-br from-primary to-primary-container px-6 py-3 text-sm font-bold text-white shadow-lg shadow-primary/20">{{ $site['hero']['primary_cta']['label'] }}</a>
                <a href="{{ route($site['hero']['secondary_cta']['route']) }}" class="rounded-xl border border-outline-variant/45 bg-surface-container-lowest px-6 py-3 text-sm font-bold text-secondary">{{ $site['hero']['secondary_cta']['label'] }}</a>
            </div>
        </div>

        <div class="stitch-reveal stitch-delay-2 overflow-hidden rounded-[1.7rem] shadow-[0_50px_60px_-35px_rgba(25,28,30,0.35)]">
            <img src="{{ $site['hero']['image'] }}" alt="Modern luxury property" class="h-[420px] w-full object-cover" />
        </div>
    </section>

    <section class="mx-auto w-full max-w-7xl px-4 pb-14 sm:px-6 lg:px-8">
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($site['stats'] as $stat)
                <x-stitch.stat-chip :value="$stat['value']" :label="$stat['label']" />
            @endforeach
        </div>
    </section>

    <section class="mx-auto w-full max-w-7xl px-4 py-14 sm:px-6 lg:px-8">
        <x-stitch.section-heading
            eyebrow="Featured Collection"
            title="High-demand homes this month"
            description="A curated shortlist selected by our advisors based on growth potential, livability, and architectural quality."
        />

        <div class="mt-10 grid gap-6 lg:grid-cols-3">
            @foreach ($meta['featuredProperties'] as $property)
                <x-stitch.property-card :property="$property" />
            @endforeach
        </div>
    </section>

    <section class="bg-surface-container-low py-14">
        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
            <x-stitch.section-heading
                eyebrow="Services"
                title="Everything you need in one expert team"
                description="We support your real estate journey from first consultation to closing and post-sale strategy."
            />

            <div class="mt-10 grid gap-6 md:grid-cols-3">
                @foreach ($site['services'] as $service)
                    <x-stitch.service-card :service="$service" />
                @endforeach
            </div>
        </div>
    </section>

    <section class="mx-auto w-full max-w-7xl px-4 py-14 sm:px-6 lg:px-8">
        <x-stitch.section-heading
            eyebrow="Testimonials"
            title="What clients say about Homify"
        />

        <div class="mt-10 grid gap-6 md:grid-cols-2">
            @foreach ($site['testimonials'] as $testimonial)
                <article class="rounded-xl bg-surface-container-lowest p-8 shadow-[0_18px_34px_-24px_rgba(25,28,30,0.32)]">
                    <p class="text-lg leading-8 text-on-surface">"{{ $testimonial['quote'] }}"</p>
                    <p class="mt-4 font-headline text-xl font-bold text-on-surface">{{ $testimonial['name'] }}</p>
                    <p class="text-sm text-secondary">{{ $testimonial['role'] }}</p>
                </article>
            @endforeach
        </div>
    </section>
</x-stitch.layout>
