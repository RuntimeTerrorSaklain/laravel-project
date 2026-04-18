<x-stitch.layout :title="$meta['title']" :site="$site">
    <section class="mx-auto grid w-full max-w-7xl gap-10 px-4 pb-14 pt-3 sm:px-6 lg:grid-cols-[1.1fr_0.9fr] lg:items-center lg:px-8">
        <div>
            <x-stitch.section-heading
                eyebrow="About Homify"
                :title="$meta['headline']"
                description="We are a multidisciplinary team of advisors, analysts, and marketers focused on measurable outcomes and exceptional client experiences."
            />
            <p class="mt-6 text-base leading-8 text-secondary">
                Since 2018, we have helped clients buy and sell premium homes with an editorial approach to presentation and a data-first approach to strategy.
            </p>
        </div>
        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1000&q=80" alt="Homify advisory team" class="rounded-[1.4rem] object-cover shadow-[0_35px_50px_-34px_rgba(25,28,30,0.4)]" />
    </section>

    <section class="mx-auto w-full max-w-7xl px-4 pb-14 sm:px-6 lg:px-8">
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($site['stats'] as $stat)
                <x-stitch.stat-chip :value="$stat['value']" :label="$stat['label']" />
            @endforeach
        </div>
    </section>

    <section class="bg-surface-container-low py-14">
        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
            <x-stitch.section-heading eyebrow="Our Team" title="Specialists behind each transaction" />
            <div class="mt-10 grid gap-6 md:grid-cols-3">
                @foreach ($site['team'] as $member)
                    <article class="rounded-xl bg-surface-container-lowest p-6 shadow-[0_16px_32px_-24px_rgba(25,28,30,0.3)]">
                        <p class="font-headline text-2xl font-bold text-on-surface">{{ $member['name'] }}</p>
                        <p class="mt-2 text-sm text-secondary">{{ $member['role'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</x-stitch.layout>
