<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            "type" => "Applicant",
            "fullname" => "Arvin Faustino",
            "age" => 22,
            "address" => "Pamantasan ng Cabuyao",
            "email" => "a@gmail.com",
            "contact" => "12345678910",
            "password" => Hash::make("a")
        ]);

        User::create([
            "type" => "Member",
            "fullname" => "Arvin Faustino",
            "age" => 22,
            "address" => "Pamantasan ng Cabuyao",
            "email" => "a@gmail.com",
            "contact" => "12345678910",
            "password" => Hash::make("a")
        ]);

        User::create([
            "type" => "Customer",
            "fullname" => "Arvin Faustino",
            "age" => 22,
            "address" => "Pamantasan ng Cabuyao",
            "email" => "a@gmail.com",
            "contact" => "12345678910",
            "password" => Hash::make("a")
        ]);
    }
}
