<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'harymahayana',
            'email' => 'harymahayana@gmail.com',
            'password' => bcrypt('arik123'),
            'is_admin' => true,
        ]);
    }
}
