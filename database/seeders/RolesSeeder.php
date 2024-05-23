<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Definieer de rollen en maak ze aan
        $roles = ['manager', 'teamleider', 'inkoper', 'HR', 'admin', 'winkelmedewerker'];

        foreach ($roles as $roleName) {
            Role::create(['name' => $roleName]);
        }
    }
}
