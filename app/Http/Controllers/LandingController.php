<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use App\Models\Voucher;
use App\Models\Benefit;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\Setting;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $heroSection = HeroSection::where('active', true)->latest()->first();
        $vouchers = Voucher::latest()->get(); // Can filter by active if column added
        $benefits = Benefit::all();
        $testimonials = Testimonial::latest()->take(6)->get();
        $faqs = Faq::all();
        $settings = Setting::all()->pluck('value', 'key');

        return view('welcome', compact('heroSection', 'vouchers', 'benefits', 'testimonials', 'faqs', 'settings'));
    }

    public function show(Voucher $voucher)
    {
        $settings = Setting::all()->pluck('value', 'key');
        return view('voucher-detail', compact('voucher', 'settings'));
    }
}
