import { Link } from '@inertiajs/react';

export default function PublicLayout({ children }) {
    const linkBaseClasses =
        'rounded-full px-4 py-2 text-sm font-semibold transition';

    const isCurrent = (name) => route().current(name);

    return (
        <div className="min-h-screen bg-[#f6f4ef] text-slate-900">
            <nav className="sticky top-0 z-20 border-b border-[#d9d3c5] bg-[#f6f4ef]/95 backdrop-blur">
                <div className="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
                    <Link
                        href={route('home')}
                        className="text-lg font-black uppercase tracking-[0.15em] text-[#16302b]"
                    >
                        Dreamwell
                    </Link>

                    <div className="flex items-center gap-2">
                        <Link
                            href={route('home')}
                            className={`${linkBaseClasses} ${
                                isCurrent('home')
                                    ? 'bg-[#16302b] text-white'
                                    : 'text-[#365048] hover:bg-[#e4ded0] hover:text-[#16302b]'
                            }`}
                        >
                            Home
                        </Link>
                        <Link
                            href={route('about')}
                            className={`${linkBaseClasses} ${
                                isCurrent('about')
                                    ? 'bg-[#16302b] text-white'
                                    : 'text-[#365048] hover:bg-[#e4ded0] hover:text-[#16302b]'
                            }`}
                        >
                            About
                        </Link>
                    </div>
                </div>
            </nav>

            <main className="min-h-[calc(100vh-73px)]">
                {children}
            </main>
        </div>
    );
}
