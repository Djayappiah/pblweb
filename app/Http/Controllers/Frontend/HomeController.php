<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        return view('frontend.home', compact('blogs'));
    }

    public function blog($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $recent_blogs = Blog::where('id', '!=', $blog->id)->orderBy('created_at', 'desc')->take(3)->get();
        return view('frontend.blog', compact('blog', 'recent_blogs'));
    }

    public function digital_banking()
    {
        return view('frontend.digitalbanking');
    }

    public function current()
    {
        return view('frontend.pages.personal.current');
    }

    public function savings()
    {
        return view('frontend.pages.personal.savings');
    }

    public function investment()
    {
        return view('frontend.pages.personal.investment');
    }

    public function business_current()
    {
        return view('frontend.pages.business.current');
    }

    public function business_savings()
    {
        return view('frontend.pages.business.savings');
    }

    public function business_trade_finance()
    {
        return view('frontend.pages.business.trade');
    }

    public function business_credit()
    {
        return view('frontend.pages.business.credit');
    }

    public function business_treasury()
    {
        return view('frontend.pages.business.treasury');
    }

    public function coe()
    {
        return view('frontend.pages.about.coe');
    }

    public function values()
    {
        return view('frontend.pages.about.values');
    }
}
