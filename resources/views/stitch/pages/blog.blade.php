<x-stitch.layout :title="$meta['title']" :site="$site">
    <section class="mx-auto w-full max-w-7xl px-4 pb-8 pt-3 sm:px-6 lg:px-8">
        <x-stitch.section-heading
            eyebrow="Journal"
            :title="$meta['headline']"
            description="Market trends, property strategy, and practical guidance for buyers, sellers, and investors."
        />
    </section>

    <section class="mx-auto w-full max-w-7xl px-4 pb-14 sm:px-6 lg:px-8">
        <div class="grid gap-6 lg:grid-cols-3">
            @foreach ($site['posts'] as $post)
                <x-stitch.blog-card :post="$post" />
            @endforeach
        </div>
    </section>

    <section class="bg-surface-container-low py-14">
        <div class="mx-auto grid w-full max-w-7xl gap-8 px-4 sm:px-6 lg:grid-cols-[1.2fr_0.8fr] lg:px-8">
            <x-stitch.section-heading
                eyebrow="Newsletter"
                title="Get monthly real estate insights"
                description="Join our subscriber list and receive tactical updates, local market snapshots, and investment ideas."
            />
            <form class="space-y-4 rounded-xl bg-surface-container-lowest p-6 shadow-[0_16px_30px_-24px_rgba(25,28,30,0.3)]">
                <input type="email" placeholder="Your email" class="w-full rounded-lg border-outline-variant/40 bg-surface-container-low text-sm focus:border-primary focus:ring-primary" />
                <button type="button" class="w-full rounded-lg bg-gradient-to-br from-primary to-primary-container py-3 text-sm font-bold text-white">Subscribe</button>
            </form>
        </div>
    </section>
</x-stitch.layout>
