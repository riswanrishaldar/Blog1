<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'name' => 'John Doe',
            'class' => '13',
            
        ]);
        Student::create([
            'name' => 'shain',
            'class' => '15',
            
        ]);
    }
}
