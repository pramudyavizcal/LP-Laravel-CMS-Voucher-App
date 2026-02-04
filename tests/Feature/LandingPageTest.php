<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\HeroSection;
use App\Models\Voucher;

class LandingPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_landing_page_can_be_rendered()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_landing_page_shows_hero_section()
    {
        HeroSection::create([
            'title' => 'Test Hero Title',
            'active' => true,
        ]);

        $response = $this->get('/');
        $response->assertSee('Test Hero Title');
    }

    public function test_landing_page_shows_vouchers()
    {
        Voucher::create([
            'name' => 'Test Voucher',
            'price' => 10000,
        ]);

        $response = $this->get('/');
        $response->assertSee('Test Voucher');
        $response->assertSee('10.000');
    }
}
