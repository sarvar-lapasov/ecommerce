<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $user = User::factory()->create();
    }


    public function test_can_get_all_users(): void
    {
        $response = $this->get('/api/users');

        $response->assertStatus(200);
        $response->assertJson([
           'data' => true
        ]);
    }
}
