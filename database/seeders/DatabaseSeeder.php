<?php

namespace Database\Seeders;

use App\Models\ClassRooms;
use App\Models\Students;
use App\Models\Teachers;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'bangGatot',
            'email' => 'icesyfx@gmail.com',
            'password' => '1234567890'
        ]);

        ClassRooms::factory()->count(6)->create();

        Students::factory()->count(20)->create();

        Teachers::factory()->count(10)->create();

    }
}
