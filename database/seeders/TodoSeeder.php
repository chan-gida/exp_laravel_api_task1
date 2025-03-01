<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Todos;
use Illuminate\Support\Facades\DB;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('todos')->insert([
            [
                'title' => 'テストタスク1',
                'content' => 'これはテストのタスクです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'テストタスク2',
                'content' => '別のテストのタスクです。',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
