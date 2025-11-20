<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleExists = Role::where('name', 'Administrator')->exists();

        if (!$roleExists) {
            Role::create([
                'name' => 'Administrator',
            ]);
        }
    }
}
