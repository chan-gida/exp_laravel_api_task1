<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 🔽 3ユーザ作成する
        User::create([
            'name' => '田中',
            'email' => 'tanaka@email.com',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => '山田',
            'email' => 'yamada@email.com',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => '吉村',
            'email' => 'yoshimura@email.com',
            'password' => Hash::make('password'),
        ]);
    }
}
