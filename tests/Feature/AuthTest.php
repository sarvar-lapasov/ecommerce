<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_can_login(): void
    {
        $user = User::factory()->create();

        $response = $this->post('/api/login', ['email' => $user->email, 'password' => 'password']);

        $response->assertStatus(200)
        ->assertJson([
            'data' => true,
            'success' => true,
            'status' => true
        ]);
        $response->assertJsonStructure([
           'data' => [
               'token'
           ]
        ]);
    }

    public function test_can_get_auth_user()
    {
        $user = User::factory()->create();
        auth()->login($user);

        $responce = $this->get('/api/user');

        $responce->assertOk()
            ->assertJson([
            'data' => true
        ]);

        $this->assertAuthenticatedAs($user);

    }
}
