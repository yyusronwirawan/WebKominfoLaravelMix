<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([
            ['title' => 'Sambutan Kepala Dinas', 'slug' => Str::slug('Sambutan Kepala Dinas'), 'body' => Str::random(50), 'created_at' => now()],
            ['title' => 'Visi dan Misi', 'slug' => Str::slug('Visi dan Misi'), 'body' => Str::random(50), 'created_at' => now()],
            ['title' => 'Tugas Pokok Dan Fungsi', 'slug' => Str::slug('Tugas Pokok Dan Fungsi'), 'body' => Str::random(50), 'created_at' => now()],
            ['title' => 'Struktur Organisasi', 'slug' => Str::slug('Struktur Organisasi'), 'body' => Str::random(50), 'created_at' => now()],
        ]);
    }
}
