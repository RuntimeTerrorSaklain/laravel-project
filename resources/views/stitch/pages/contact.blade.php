<x-stitch.layout :title="$meta['title']" :site="$site">
    <section class="mx-auto grid w-full max-w-7xl gap-8 px-4 pb-14 pt-3 sm:px-6 lg:grid-cols-[0.95fr_1.05fr] lg:px-8">
        <div class="rounded-xl bg-surface-container-low p-8">
            <x-stitch.section-heading
                eyebrow="Contact"
                :title="$meta['headline']"
                description="Share your preferences and goals. A Homify advisor will reach out with your custom next-step plan."
            />

            <div class="mt-8 space-y-5 text-sm text-secondary">
                <div>
                    <p class="text-[0.6875rem] font-bold uppercase tracking-[0.1em] text-secondary">Phone</p>
                    <p class="mt-1 text-base text-on-surface">{{ $site['contact']['phone'] }}</p>
                </div>
                <div>
                    <p class="text-[0.6875rem] font-bold uppercase tracking-[0.1em] text-secondary">Email</p>
                    <p class="mt-1 text-base text-on-surface">{{ $site['contact']['email'] }}</p>
                </div>
                <div>
                    <p class="text-[0.6875rem] font-bold uppercase tracking-[0.1em] text-secondary">Office</p>
                    <p class="mt-1 text-base text-on-surface">{{ $site['contact']['address'] }}</p>
                </div>
                <div>
                    <p class="text-[0.6875rem] font-bold uppercase tracking-[0.1em] text-secondary">Hours</p>
                    <p class="mt-1 text-base text-on-surface">{{ $site['contact']['hours'] }}</p>
                </div>
            </div>
        </div>

        <form class="space-y-4 rounded-xl bg-surface-container-lowest p-8 shadow-[0_22px_40px_-26px_rgba(25,28,30,0.35)]">
            <div class="grid gap-4 sm:grid-cols-2">
                <input type="text" placeholder="First name" class="rounded-lg border-outline-variant/40 bg-surface-container-low text-sm focus:border-primary focus:ring-primary" />
                <input type="text" placeholder="Last name" class="rounded-lg border-outline-variant/40 bg-surface-container-low text-sm focus:border-primary focus:ring-primary" />
            </div>
            <input type="email" placeholder="Email address" class="w-full rounded-lg border-outline-variant/40 bg-surface-container-low text-sm focus:border-primary focus:ring-primary" />
            <input type="text" placeholder="Property interest" class="w-full rounded-lg border-outline-variant/40 bg-surface-container-low text-sm focus:border-primary focus:ring-primary" />
            <textarea rows="5" placeholder="Tell us your requirement" class="w-full rounded-lg border-outline-variant/40 bg-surface-container-low text-sm focus:border-primary focus:ring-primary"></textarea>
            <button type="button" class="w-full rounded-lg bg-gradient-to-br from-primary to-primary-container py-3 text-sm font-bold text-white">Send Message</button>
        </form>
    </section>
</x-stitch.layout>
