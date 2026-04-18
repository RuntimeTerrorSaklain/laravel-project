<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class StitchPageController extends Controller
{
    public function home(): View
    {
        return view('stitch.pages.home', $this->pageData([
            'title' => 'Homify | Home',
            'headline' => 'Curated homes for modern living.',
            'featuredProperties' => array_slice(config('stitch.properties'), 0, 3),
        ]));
    }

    public function listing(): View
    {
        return view('stitch.pages.listing', $this->pageData([
            'title' => 'Homify | Listing',
            'headline' => 'Browse all available properties.',
            'featuredProperties' => config('stitch.properties'),
        ]));
    }

    public function about(): View
    {
        return view('stitch.pages.about', $this->pageData([
            'title' => 'Homify | About',
            'headline' => 'Meet the team behind every successful deal.',
        ]));
    }

    public function blog(): View
    {
        return view('stitch.pages.blog', $this->pageData([
            'title' => 'Homify | Blog',
            'headline' => 'Insights to make better real estate decisions.',
        ]));
    }

    public function contact(): View
    {
        return view('stitch.pages.contact', $this->pageData([
            'title' => 'Homify | Contact',
            'headline' => 'Tell us what you are looking for.',
        ]));
    }

    private function pageData(array $meta = []): array
    {
        return [
            'site' => config('stitch'),
            'meta' => $meta,
        ];
    }
}
