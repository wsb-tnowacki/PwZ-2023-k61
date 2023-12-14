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
        Posty::factory(5)->create();
        /* User::factory()->create([
            'name' => "Test User",
            'email' => "test@wp.pl",
            'password' => password_hash('tester', PASSWORD_DEFAULT)
        ]); */

    }
}
