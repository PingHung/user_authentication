<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Faker\Generator as Faker;

class InsertTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {

        $OriginalCount=User::count();
        factory(\App\User::class, 1)->create() ;

        $this->assertEquals($OriginalCount+1,User::count());

        /*factory(\App\User::class)->create([
            'name' => $faker->name,
            'email' => 'test@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        $this->assertDatabaseHas('users', ['name' => 'test']);*/
    }
}
