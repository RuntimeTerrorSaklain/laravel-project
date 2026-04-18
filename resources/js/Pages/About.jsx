import { Head } from '@inertiajs/react';
import PublicLayout from '@/Layouts/PublicLayout';

export default function About() {
    return (
        <>
            <Head title="About" />
            <PublicLayout>
                <div className="mx-auto flex min-h-[calc(100vh-73px)] max-w-7xl items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
                    <div className="max-w-2xl rounded-3xl border border-slate-200 bg-white p-10 text-center shadow-sm">
                        <p className="text-sm font-semibold uppercase tracking-[0.2em] text-slate-500">
                            About Page
                        </p>
                        <h1 className="mt-4 text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl">
                            This is my new page.
                        </h1>
                        <p className="mt-4 text-base leading-7 text-slate-600">
                            You can use this page as a starting point for your own
                            content.
                        </p>
                    </div>
                </div>
            </PublicLayout>
        </>
    );
}