<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroSection;
use App\Models\Voucher;
use App\Models\Testimonial;

class AdminController extends Controller
{
    public function index()
    {
        $stats = [
            'hero_sections' => HeroSection::count(),
            'vouchers' => Voucher::count(),
            'testimonials' => Testimonial::count(),
        ];
        return view('admin.dashboard', compact('stats'));
    }
}
