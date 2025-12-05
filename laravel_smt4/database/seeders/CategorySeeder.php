<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Catatan Kuliah',
            'Belajar Laravel',
            'Coding',
            'Belajar UI/UX',
            'Proyek Akhir',
            'Tips & Trik',
        ];

        foreach($categories as $name) {
            Category::create(['name' => $name]);
        }
    }
}
