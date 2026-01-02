<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    // Home pages
    public function home()
    {
        return view('website.home');
    }

    public function home2()
    {
        return view('website.home2');
    }

    public function home3()
    {
        return view('website.home3');
    }

    // About page
    public function about()
    {
        return view('website.about');
    }

    // Causes pages
    public function causes()
    {
        return view('website.causes');
    }

    public function causesDetails()
    {
        return view('website.causes-details');
    }

    // Events pages
    public function events()
    {
        return view('website.events');
    }

    public function eventsCarousel()
    {
        return view('website.events-carousel');
    }

    public function eventsDetails()
    {
        return view('website.events-details');
    }

    // Team pages
    public function team()
    {
        return view('website.team');
    }

    public function team2()
    {
        return view('website.team2');
    }

    public function team3()
    {
        return view('website.team3');
    }

    // Blog pages
    public function blogGrid()
    {
        return view('website.blog-grid');
    }

    public function blogCarousel()
    {
        return view('website.blog-carousel');
    }

    public function blogDetails()
    {
        return view('website.blog-details');
    }

    // Other pages
    public function testimonials()
    {
        return view('website.testimonials');
    }

    public function faq()
    {
        return view('website.faq');
    }

    public function error()
    {
        return view('website.error');
    }

    public function gallery()
    {
        return view('website.gallery');
    }

    public function donate()
    {
        return view('website.donate');
    }

    public function contact()
    {
        return view('website.contact');
    }
}
