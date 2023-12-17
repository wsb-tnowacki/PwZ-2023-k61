<?php

namespace Database\Seeders;

use App\Models\Posty;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        /* User::factory()->create([
            'name' => "Test User",
            'email' => "test@wp.pl",
            'password' => password_hash('tester', PASSWORD_DEFAULT)
        ]); */
      /*   User::factory()->create([
            'name' => "Admin",
            'email' => "admin@wsb.poznan.pl",
            'password' => password_hash('Test1234', PASSWORD_DEFAULT)
        ]);
        User::factory()->create([
            'name' => "Test User",
            'email' => "test@wp.pl",
            'password' => password_hash('tester', PASSWORD_DEFAULT)
        ]);
        User::factory()->create([
            'name' => "Test2 User",
            'email' => "test2@wp.pl",
            'password' => password_hash('tester', PASSWORD_DEFAULT)
        ]);
        User::factory()->create([
            'name' => "Test3 User",
            'email' => "test3@wp.pl",
            'password' => password_hash('tester', PASSWORD_DEFAULT)
        ]); */
        Posty::factory(25)->create();

    }
}
