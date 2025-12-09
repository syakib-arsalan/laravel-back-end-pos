<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Employee::create([
            'name' => 'syakib arsalan',
            'email' => 'syakib@arsalans.my.id',
            'phone' => '083875191033',
            'address' => 'mangkubumi',
            'city' => 'tasikmalaya',
            'state' => 'jawa barat',
            'postal_code' => '46181',
            'country' => 'indonesia',
            'position' => 'developer',
            'salary' => '10000000000',
            'hire_date' => '2020-12-20',
            'date_of_birth' => '2008-8-30',
        ]);

        User::create([
            'username' => 'syakib',
            'password' => bcrypt('syakib'),
            'role' => 'admin',
            'employee_id' => '1',
        ]);
    }
}
