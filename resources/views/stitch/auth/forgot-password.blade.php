<x-stitch.layout title="Homify | Forgot Password" :site="$site">
    <section class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="relative z-10 flex items-center justify-center xl:justify-start">
            <article class="stitch-reveal stitch-delay-1 w-full max-w-md rounded-xl bg-surface-container-lowest p-8 shadow-[0_42px_62px_-18px_rgba(25,28,30,0.08)] sm:p-10">
                <header class="mb-9 text-center">
                    <h1 class="font-headline text-4xl font-extrabold tracking-tight text-on-surface">Recover Password</h1>
                    <p class="mx-auto mt-3 max-w-sm text-base leading-7 text-secondary">
                        Enter your email and we will send you a secure password reset link.
                    </p>
                </header>

                @if ($status)
                    <div class="mb-6 rounded-lg bg-primary/10 px-4 py-3 text-sm text-primary">
                        {{ $status }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-6 rounded-lg bg-red-50 px-4 py-3 text-sm text-red-700">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form class="space-y-6" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="space-y-2">
                        <label for="email" class="ml-1 block text-[0.6875rem] font-bold uppercase tracking-[0.08em] text-secondary">Email</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-500" style="font-size: 20px;">mail</span>
                            <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="you@example.com" class="w-full rounded-lg border border-outline-variant/35 bg-surface-container-lowest py-3.5 pl-12 pr-4 text-sm placeholder:text-slate-400 focus:border-primary focus:ring-0" />
                        </div>
                    </div>

                    <button type="submit" class="w-full rounded-lg bg-gradient-to-br from-primary to-primary-container py-3.5 text-sm font-bold text-white shadow-lg shadow-primary/20 transition hover:opacity-95 active:scale-[0.99]">
                        Send Reset Link
                    </button>
                </form>

                <p class="mt-8 text-center text-sm text-secondary">
                    Remember your password?
                    <a href="{{ route('login') }}" class="font-bold text-primary hover:underline">Back to Login</a>
                </p>
            </article>

            <aside class="stitch-reveal stitch-delay-3 pointer-events-none absolute -right-8 top-1/2 hidden h-72 w-56 -translate-y-1/2 rotate-6 overflow-hidden rounded-xl border-4 border-white shadow-2xl xl:block">
                <img src="https://images.unsplash.com/photo-1494526585095-c41746248156?auto=format&fit=crop&w=700&q=80" alt="Modern premium house exterior" class="h-full w-full object-cover">
            </aside>
        </div>
    </section>
</x-stitch.layout>
