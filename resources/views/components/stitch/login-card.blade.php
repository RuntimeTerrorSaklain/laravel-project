@props(['canResetPassword' => false])

<section class="stitch-reveal stitch-delay-1 w-full max-w-md rounded-xl bg-surface-container-lowest p-8 shadow-[0_42px_62px_-18px_rgba(25,28,30,0.08)] sm:p-10">
    <header class="mb-9 text-center">
        <h1 class="font-headline text-4xl font-extrabold tracking-tight text-on-surface">Login On Homify</h1>
        <p class="mx-auto mt-3 max-w-sm text-base leading-7 text-secondary">
            Welcome back. Enter your credentials to access your architectural account.
        </p>
    </header>

    @if (session('status'))
        <div class="mb-6 rounded-lg bg-primary/10 px-4 py-3 text-sm text-primary">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="mb-6 rounded-lg bg-red-50 px-4 py-3 text-sm text-red-700">
            {{ $errors->first() }}
        </div>
    @endif

    <form class="space-y-6" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="space-y-2">
            <label for="email" class="ml-1 block text-[0.6875rem] font-bold uppercase tracking-[0.08em] text-secondary">Email</label>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-500" style="font-size: 20px;">mail</span>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="you@example.com" class="w-full rounded-lg border border-outline-variant/35 bg-surface-container-lowest py-3.5 pl-12 pr-4 text-sm placeholder:text-slate-400 focus:border-primary focus:ring-0" />
            </div>
        </div>

        <div class="space-y-2">
            <label for="password" class="ml-1 block text-[0.6875rem] font-bold uppercase tracking-[0.08em] text-secondary">Password</label>
            <div class="relative">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-slate-500" style="font-size: 20px;">lock</span>
                <input id="password" name="password" type="password" required autocomplete="current-password" placeholder="........" class="w-full rounded-lg border border-outline-variant/35 bg-surface-container-lowest py-3.5 pl-12 pr-4 text-sm placeholder:text-slate-400 focus:border-primary focus:ring-0" />
            </div>
            <div class="flex justify-end">
                @if ($canResetPassword)
                    <a href="{{ route('password.request') }}" class="text-xs font-semibold text-primary hover:underline">Forgot password?</a>
                @endif
            </div>
        </div>

        <label class="flex items-center gap-2 text-sm text-secondary">
            <input type="checkbox" name="remember" class="rounded border-outline-variant/70 text-primary focus:ring-primary" />
            Remember me
        </label>

        <button type="submit" class="w-full rounded-lg bg-gradient-to-br from-primary to-primary-container py-3.5 text-sm font-bold text-white shadow-lg shadow-primary/20 transition hover:opacity-95 active:scale-[0.99]">
            Login Account
        </button>
    </form>

    <p class="mt-9 text-center text-sm text-secondary">
        Don't have an account?
        <a href="{{ route('register') }}" class="font-bold text-primary hover:underline">Register</a>
    </p>
</section>
