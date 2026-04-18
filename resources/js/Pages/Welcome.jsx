import { Head } from '@inertiajs/react';
import PublicLayout from '@/Layouts/PublicLayout';

export default function Welcome() {
    const featuredHomes = [
        {
            title: 'Skyline Penthouse',
            city: 'Dhaka, Gulshan',
            price: '$395,000',
            beds: 4,
            baths: 3,
            area: '2,900 sq ft',
            tone: 'from-emerald-900 to-emerald-700',
        },
        {
            title: 'Garden Family Villa',
            city: 'Chattogram, Khulshi',
            price: '$275,000',
            beds: 3,
            baths: 2,
            area: '2,100 sq ft',
            tone: 'from-amber-900 to-amber-700',
        },
        {
            title: 'Riverside Duplex',
            city: 'Sylhet, Zindabazar',
            price: '$332,000',
            beds: 5,
            baths: 4,
            area: '3,250 sq ft',
            tone: 'from-cyan-900 to-cyan-700',
        },
    ];

    const services = [
        {
            name: 'Buy a Property',
            description:
                'Explore verified listings with transparent pricing and complete legal checks.',
        },
        {
            name: 'Sell with Experts',
            description:
                'Get market-backed pricing, premium photography, and targeted buyer outreach.',
        },
        {
            name: 'Rent Management',
            description:
                'From tenant screening to monthly reporting, we handle operations end to end.',
        },
    ];

    const testimonials = [
        {
            quote: 'We sold our apartment in 9 days with a better offer than expected.',
            person: 'Rahman Ahmed',
            role: 'Home Seller',
        },
        {
            quote: 'The team made house hunting effortless and negotiated everything for us.',
            person: 'Nabila Sultana',
            role: 'First-time Buyer',
        },
    ];

    return (
        <>
            <Head title="Dreamwell Real Estate" />
            <PublicLayout>
                <div className="relative overflow-hidden">
                    <div className="absolute -left-24 top-28 h-72 w-72 rounded-full bg-emerald-300/25 blur-3xl" />
                    <div className="absolute right-0 top-[28rem] h-72 w-72 rounded-full bg-amber-300/20 blur-3xl" />

                    <section className="mx-auto grid max-w-7xl gap-10 px-4 pb-16 pt-12 sm:px-6 lg:grid-cols-2 lg:items-center lg:px-8 lg:pt-16">
                        <div>
                            <p className="inline-block rounded-full border border-[#16302b]/20 bg-white/70 px-4 py-1 text-xs font-bold uppercase tracking-[0.2em] text-[#16302b]">
                                Trusted Property Partner
                            </p>
                            <h1 className="mt-6 text-4xl font-black leading-tight text-[#16302b] sm:text-5xl lg:text-6xl">
                                Find The Place
                                <span className="block text-[#a06b2c]">You Will Love To Call Home</span>
                            </h1>
                            <p className="mt-6 max-w-xl text-base leading-7 text-[#3e544d] sm:text-lg">
                                Dreamwell helps buyers, sellers, and investors discover premium properties with confidence.
                                Curated listings, local expertise, and smooth transactions from start to finish.
                            </p>

                            <div className="mt-8 flex flex-wrap gap-4">
                                <a
                                    href="#featured"
                                    className="rounded-full bg-[#16302b] px-6 py-3 text-sm font-bold uppercase tracking-[0.12em] text-white transition hover:bg-[#0f221f]"
                                >
                                    Explore Homes
                                </a>
                                <a
                                    href="#services"
                                    className="rounded-full border border-[#16302b]/25 bg-white px-6 py-3 text-sm font-bold uppercase tracking-[0.12em] text-[#16302b] transition hover:border-[#16302b]"
                                >
                                    Our Services
                                </a>
                            </div>

                            <div className="mt-10 grid max-w-xl grid-cols-3 gap-5 border-t border-[#d8d2c4] pt-6">
                                <div>
                                    <p className="text-3xl font-black text-[#16302b]">1.4K+</p>
                                    <p className="text-sm text-[#567067]">Properties Sold</p>
                                </div>
                                <div>
                                    <p className="text-3xl font-black text-[#16302b]">98%</p>
                                    <p className="text-sm text-[#567067]">Client Satisfaction</p>
                                </div>
                                <div>
                                    <p className="text-3xl font-black text-[#16302b]">12</p>
                                    <p className="text-sm text-[#567067]">Cities Covered</p>
                                </div>
                            </div>
                        </div>

                        <div className="rounded-[2.2rem] border border-[#d9d3c5] bg-gradient-to-br from-[#19342f] to-[#254c45] p-6 shadow-xl sm:p-8">
                            <div className="rounded-3xl bg-white p-6 sm:p-7">
                                <p className="text-xs font-bold uppercase tracking-[0.2em] text-[#6b7d76]">
                                    Quick Search
                                </p>
                                <h2 className="mt-2 text-2xl font-black text-[#16302b]">Find Your Next Property</h2>
                                <div className="mt-5 grid gap-4 sm:grid-cols-2">
                                    <label className="text-sm font-semibold text-[#334841]">
                                        Location
                                        <input
                                            type="text"
                                            placeholder="City or neighborhood"
                                            className="mt-2 w-full rounded-2xl border border-[#d7d1c2] bg-[#f9f7f2] px-4 py-3 text-sm focus:border-[#16302b] focus:ring-[#16302b]"
                                        />
                                    </label>
                                    <label className="text-sm font-semibold text-[#334841]">
                                        Property Type
                                        <select className="mt-2 w-full rounded-2xl border border-[#d7d1c2] bg-[#f9f7f2] px-4 py-3 text-sm focus:border-[#16302b] focus:ring-[#16302b]">
                                            <option>Apartment</option>
                                            <option>Villa</option>
                                            <option>Townhouse</option>
                                            <option>Commercial</option>
                                        </select>
                                    </label>
                                    <label className="text-sm font-semibold text-[#334841]">
                                        Price Range
                                        <select className="mt-2 w-full rounded-2xl border border-[#d7d1c2] bg-[#f9f7f2] px-4 py-3 text-sm focus:border-[#16302b] focus:ring-[#16302b]">
                                            <option>$100k - $200k</option>
                                            <option>$200k - $350k</option>
                                            <option>$350k - $500k</option>
                                            <option>$500k+</option>
                                        </select>
                                    </label>
                                    <label className="text-sm font-semibold text-[#334841]">
                                        Bedrooms
                                        <select className="mt-2 w-full rounded-2xl border border-[#d7d1c2] bg-[#f9f7f2] px-4 py-3 text-sm focus:border-[#16302b] focus:ring-[#16302b]">
                                            <option>2+</option>
                                            <option>3+</option>
                                            <option>4+</option>
                                            <option>5+</option>
                                        </select>
                                    </label>
                                </div>
                                <button
                                    type="button"
                                    className="mt-5 w-full rounded-2xl bg-[#16302b] px-4 py-3 text-sm font-bold uppercase tracking-[0.12em] text-white transition hover:bg-[#0f221f]"
                                >
                                    Search Property
                                </button>
                            </div>
                        </div>
                    </section>

                    <section id="featured" className="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">
                        <div className="mb-8 flex flex-wrap items-end justify-between gap-4">
                            <div>
                                <p className="text-xs font-bold uppercase tracking-[0.2em] text-[#6b7d76]">Featured Listings</p>
                                <h2 className="mt-2 text-3xl font-black text-[#16302b] sm:text-4xl">Handpicked Homes For You</h2>
                            </div>
                            <a href="#" className="text-sm font-bold uppercase tracking-[0.1em] text-[#16302b] hover:text-[#0f221f]">
                                View All Listings
                            </a>
                        </div>

                        <div className="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                            {featuredHomes.map((home) => (
                                <article
                                    key={home.title}
                                    className="overflow-hidden rounded-3xl border border-[#d8d2c4] bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-lg"
                                >
                                    <div className={`h-48 bg-gradient-to-br ${home.tone}`} />
                                    <div className="p-6">
                                        <p className="text-xs font-bold uppercase tracking-[0.16em] text-[#73857f]">{home.city}</p>
                                        <h3 className="mt-2 text-2xl font-black text-[#16302b]">{home.title}</h3>
                                        <p className="mt-2 text-xl font-bold text-[#a06b2c]">{home.price}</p>
                                        <div className="mt-4 flex gap-4 text-sm font-medium text-[#4f655e]">
                                            <span>{home.beds} Beds</span>
                                            <span>{home.baths} Baths</span>
                                            <span>{home.area}</span>
                                        </div>
                                    </div>
                                </article>
                            ))}
                        </div>
                    </section>

                    <section id="services" className="bg-[#16302b] py-14 text-white">
                        <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                            <p className="text-xs font-bold uppercase tracking-[0.2em] text-[#b2c6c0]">What We Do</p>
                            <h2 className="mt-2 max-w-2xl text-3xl font-black sm:text-4xl">
                                Comprehensive Real Estate Services Built Around You
                            </h2>
                            <div className="mt-8 grid gap-5 md:grid-cols-3">
                                {services.map((service) => (
                                    <article key={service.name} className="rounded-3xl border border-white/20 bg-white/5 p-6">
                                        <h3 className="text-xl font-bold">{service.name}</h3>
                                        <p className="mt-3 text-sm leading-7 text-[#d3dfdb]">{service.description}</p>
                                    </article>
                                ))}
                            </div>
                        </div>
                    </section>

                    <section className="mx-auto grid max-w-7xl gap-8 px-4 py-14 sm:px-6 lg:grid-cols-2 lg:px-8">
                        {testimonials.map((item) => (
                            <article key={item.person} className="rounded-3xl border border-[#d8d2c4] bg-white p-8 shadow-sm">
                                <p className="text-lg font-semibold leading-8 text-[#1f3b35]">"{item.quote}"</p>
                                <p className="mt-5 text-base font-black text-[#16302b]">{item.person}</p>
                                <p className="text-sm font-medium uppercase tracking-[0.1em] text-[#6d7f78]">{item.role}</p>
                            </article>
                        ))}
                    </section>

                    <section className="mx-auto max-w-7xl px-4 pb-16 sm:px-6 lg:px-8">
                        <div className="rounded-[2.3rem] border border-[#d8d2c4] bg-gradient-to-r from-[#e8e1d2] to-[#f1ede3] p-8 sm:p-10 lg:flex lg:items-center lg:justify-between">
                            <div>
                                <p className="text-xs font-bold uppercase tracking-[0.2em] text-[#6d7f78]">Get Started</p>
                                <h2 className="mt-3 text-3xl font-black text-[#16302b] sm:text-4xl">Ready To Find Your Dream Property?</h2>
                                <p className="mt-3 max-w-2xl text-base text-[#3f5550]">
                                    Book a free consultation with our advisors and receive a custom shortlist based on your budget and lifestyle.
                                </p>
                            </div>
                            <button
                                type="button"
                                className="mt-6 rounded-full bg-[#16302b] px-7 py-3 text-sm font-bold uppercase tracking-[0.12em] text-white transition hover:bg-[#0f221f] lg:mt-0"
                            >
                                Book Consultation
                            </button>
                        </div>
                    </section>
                </div>
            </PublicLayout>
        </>
    );
}