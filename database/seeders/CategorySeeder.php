<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name:ar' => 'الشفاه',
                'name:en' => 'Lips',
            ],
            [
                'name:ar' => 'العيون',
                'name:en' => 'Eyes',
            ],
            [
                'name:ar' => 'الوجه',
                'name:en' => 'Face',
            ],
            [
                'name:ar' => 'الأظافر',
                'name:en' => 'Nails',
            ],
            [
                'name:ar' => 'العطور',
                'name:en' => 'Perfumes',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
