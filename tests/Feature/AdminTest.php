<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Voucher;

class AdminTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_dashboard_can_be_rendered_for_authenticated_users()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/admin/dashboard');

        $response->assertStatus(200);
    }

    public function test_guests_cannot_access_admin_dashboard()
    {
        $response = $this->get('/admin/dashboard');

        $response->assertRedirect('/login');
    }

    public function test_admin_can_create_voucher()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/admin/vouchers', [
            'name' => 'Test Voucher',
            'price' => 50000,
            'description' => 'Test Description',
            'is_best_seller' => true,
        ]);

        $response->assertRedirect('/admin/vouchers');
        $this->assertDatabaseHas('vouchers', [
            'name' => 'Test Voucher',
            'price' => 50000,
            'is_best_seller' => true,
        ]);
    }
}
