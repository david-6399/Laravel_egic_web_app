<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\user;
use App\Models\formation;
use Illuminate\Support\Facades\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A basic test example.
     *
     * @return void
     */
    
    
     public function testUserRegistration()
    {
        $response = user::first();
        
        $response->assertStatus(302);
        $this->assertDatabaseHas('users', [
            'email' => 'john@example.com',
        ]);
    }


    public function test_example()
    {
        $user = user::factory()->create();

        $response = $this->actingAs($user)->get('/dashboard');

        $response->assertStatus(200);

       
    }
}
