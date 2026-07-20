<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('book')->insert([
        [
            'isbn' => '978-4-7981-6210-7',
            'title' => '改訂版 これからは始めるReact実践入門',
            'price' => 3300,
            'publisher' => '技術評論社',
            'published' => '2023-03-10',
            'sample' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'isbn' => '978-4-7981-6210-8',
            'title' => '改訂版 これからは始めるVue.js実践入門',
            'price' => 3200,
            'publisher' => '技術評論社',
            'published' => '2023-04-15',
            'sample' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'isbn' => '978-4-7981-6210-9',
            'title' => '改訂版 これからは始めるLaravel実践入門',
            'price' => 3500,
            'publisher' => '技術評論社',
            'published' => '2023-05-20',
            'sample' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]
        ]);
    }
}
