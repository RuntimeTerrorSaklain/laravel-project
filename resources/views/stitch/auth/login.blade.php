<x-stitch.layout title="Homify | Login" :site="$site">
    <section class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="relative z-10 flex items-center justify-center xl:justify-start">
            <x-stitch.login-card :can-reset-password="$canResetPassword" />

            <aside class="stitch-reveal stitch-delay-3 pointer-events-none absolute -right-8 top-1/2 hidden h-72 w-56 -translate-y-1/2 rotate-6 overflow-hidden rounded-xl border-4 border-white shadow-2xl xl:block">
                <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=700&q=80" alt="Luxury modern interior" class="h-full w-full object-cover">
            </aside>
        </div>
    </section>
</x-stitch.layout>
