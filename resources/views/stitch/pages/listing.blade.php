<x-stitch.layout :title="$meta['title']" :site="$site">
    <section class="mx-auto w-full max-w-7xl px-4 pb-6 pt-3 sm:px-6 lg:px-8">
        <x-stitch.section-heading
            eyebrow="Property Listing"
            :title="$meta['headline']"
            description="Use these curated categories to narrow down options by type, budget, and intent."
        />

        <div class="mt-8 grid gap-4 rounded-xl bg-surface-container-low p-6 sm:grid-cols-2 lg:grid-cols-4">
            <select class="rounded-lg border-outline-variant/40 bg-surface-container-lowest text-sm focus:border-primary focus:ring-primary">
                <option>All Cities</option>
                <option>Dhaka</option>
                <option>Chattogram</option>
                <option>Sylhet</option>
            </select>
            <select class="rounded-lg border-outline-variant/40 bg-surface-container-lowest text-sm focus:border-primary focus:ring-primary">
                <option>All Types</option>
                <option>Apartment</option>
                <option>Villa</option>
                <option>Duplex</option>
            </select>
            <select class="rounded-lg border-outline-variant/40 bg-surface-container-lowest text-sm focus:border-primary focus:ring-primary">
                <option>Any Budget</option>
                <option>$200k - $300k</option>
                <option>$300k - $400k</option>
                <option>$400k+</option>
            </select>
            <button type="button" class="rounded-lg bg-gradient-to-br from-primary to-primary-container px-4 py-3 text-sm font-bold text-white">Search</button>
        </div>
    </section>

    <section class="mx-auto w-full max-w-7xl px-4 pb-14 pt-8 sm:px-6 lg:px-8">
        <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($meta['featuredProperties'] as $property)
                <x-stitch.property-card :property="$property" />
            @endforeach
        </div>
    </section>
</x-stitch.layout>
