<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['Admin', 'User', 'Kaprodi', 'Dosen']; // Add as many names as you need

        foreach ($names as $name) {
            Role::factory()->create([
                'name' => $name
            ]);
        }
    }
}
