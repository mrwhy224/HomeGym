<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        return view('pages/about');
    }
    public function instructor()
    {
        return view('pages/instructor');
    }
    public function instructor_carousel()
    {
        return view('pages/instructor-carousel');
    }
    public function instructor_details()
    {
        return view('pages/instructor-details');
    }
    public function events()
    {
        return view('pages/events');
    }
    public function events_carousel()
    {
        return view('pages/events-carousel');
    }
    public function event_details()
    {
        return view('pages/event-details');
    }
    public function become_a_teacher()
    {
        return view('pages/become-a-teacher');
    }
    public function testimonials()
    {
        return view('pages/testimonials');
    }
    public function testimonials_carousel()
    {
        return view('pages/testimonials-carousel');
    }
    public function pricing()
    {
        return view('pages/pricing');
    }
    public function gallery()
    {
        return view('pages/gallery');
    }
    public function faq()
    {
        return view('pages/faq');
    }
    public function course()
    {
        return view('pages/course');
    }
    public function course_carousel()
    {
        return view('pages/course-carousel');
    }
    public function course_list()
    {
        return view('pages/course-list');
    }
    public function course_details()
    {
        return view('pages/course-details');
    }
    public function products()
    {
        return view('pages/products');
    }
    public function product_details()
    {
        return view('pages/product-details');
    }
    public function cart()
    {
        return view('pages/cart');
    }
    public function checkout()
    {
        return view('pages/checkout');
    }
    public function wishlist()
    {
        return view('pages/wishlist');
    }
    public function sign_up()
    {
        return view('pages/sign-up');
    }
    public function login()
    {
        return view('pages/login');
    }
    public function blog()
    {
        return view('pages/blog');
    }
    public function blog_carousel()
    {
        return view('pages/blog-carousel');
    }
    public function blog_list()
    {
        return view('pages/blog-list');
    }
    public function blog_details()
    {
        return view('pages/blog-details');
    }
    public function contact()
    {
        return view('pages/contact');
    }


    public function not_found()
    {
        return view('pages/404');
        return redirect()->route('404');
    }
}
