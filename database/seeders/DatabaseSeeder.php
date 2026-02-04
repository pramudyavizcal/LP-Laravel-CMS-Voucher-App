<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\HeroSection;
use App\Models\Voucher;
use App\Models\Benefit;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\Setting;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create Admin User
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );

        // Hero Section
        HeroSection::create([
            'title' => 'Level Up Your Gaming Experience',
            'subtitle' => 'Get the best deals on premium vouchers for your favorite games and apps.',
            'description' => 'Fast delivery, secure transactions, and 24/7 support. Join thousands of satisfied customers today.',
            'cta_text' => 'Shop Now',
            'cta_link' => '#products',
            'active' => true,
        ]);

        // Vouchers
        Voucher::create([
            'name' => 'Mobile Legends 86 Diamonds',
            'price' => 20000,
            'description' => 'Top up 86 Diamonds Mobile Legends fast and cheap.',
            'is_best_seller' => true,
        ]);
        Voucher::create([
            'name' => 'Free Fire 140 Diamonds',
            'price' => 20000,
            'description' => 'Top up 140 Diamonds Free Fire instantly.',
            'is_promo' => true,
        ]);
        Voucher::create([
            'name' => 'Spotify Premium 1 Month',
            'price' => 55000,
            'description' => 'Individual plan for 1 month.',
        ]);
        Voucher::create([
            'name' => 'Netflix Premium 1 Month',
            'price' => 186000,
            'description' => 'Ultra HD 4K supported private account.',
            'is_best_seller' => true,
        ]);
        Voucher::create([
            'name' => 'Valorant 1125 Points',
            'price' => 150000,
            'description' => 'Get skins and battle pass now.',
        ]);
        Voucher::create([
            'name' => 'Google Play IDR 50.000',
            'price' => 52000,
            'description' => 'Code redeemable on Google Play Store Indonesia.',
        ]);

        // Benefits
        Benefit::create([
            'title' => 'Instant Delivery',
            'description' => 'Your voucher code will be sent immediately after payment confirmation.',
            'icon' => 'fa-solid fa-bolt', // FontAwesome class
        ]);
        Benefit::create([
            'title' => 'Secure Payment',
            'description' => 'We support various secure payment methods for your convenience.',
            'icon' => 'fa-solid fa-shield-halved',
        ]);
        Benefit::create([
            'title' => '24/7 Support',
            'description' => 'Our team is ready to help you anytime, anywhere.',
            'icon' => 'fa-solid fa-headset',
        ]);

        // Testimonials
        Testimonial::create([
            'name' => 'John Doe',
            'content' => 'The transaction was super fast! Got my diamonds in seconds. Highly recommended.',
            'rating' => 5,
        ]);
        Testimonial::create([
            'name' => 'Jane Smith',
            'content' => 'Trusted seller. I always buy my Netflix subscription here. Never had an issue.',
            'rating' => 5,
        ]);
        Testimonial::create([
            'name' => 'Budi Santoso',
            'content' => 'Harga bersahabat, admin ramah. Mantap jiwa!',
            'rating' => 4,
        ]);

        // FAQs
        Faq::create([
            'question' => 'How long does the delivery take?',
            'answer' => 'For most vouchers, it is instant (less than 1 minute). For some manual processing items, it might take up to 10-30 minutes.',
        ]);
        Faq::create([
            'question' => 'What payment methods do you accept?',
            'answer' => 'We accept Bank Transfer (BCA, Mandiri, BRI), E-Wallets (GoPay, OVO, Dana, ShopeePay), and QRIS.',
        ]);
        Faq::create([
            'question' => 'Is it legal and safe?',
            'answer' => 'Yes, 100% legal and safe. We are an official reseller for many products.',
        ]);

        // Settings
        Setting::create(['key' => 'whatsapp_number', 'value' => '081234567890']);
        Setting::create(['key' => 'footer_text', 'value' => 'The #1 Trusted Digital Voucher Store in Indonesia.']);
        Setting::create(['key' => 'facebook_link', 'value' => 'https://facebook.com']);
        Setting::create(['key' => 'instagram_link', 'value' => 'https://instagram.com']);
    }
}
