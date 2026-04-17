<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lips = Category::whereTranslation('name', 'lips')->first();

        $products = [
            [
                'category_id' => $lips->id,
                'name:en' => 'Velvet Pink Lipstick',
                'name:ar' => 'أحمر شفاه مخملي بالوردي',
                'description:en' => 'A luxurious velvet lipstick in a rich pink shade. Long-lasting formula that keeps your lips hydrated and radiant all day.',
                'description:ar' => 'أحمر شفاه فاخر بلمسة مخملية بدرجة وردية غنية. تركيبة طويلة الأمد تحافظ على شفاهك مرطبة ومشرقة طوال اليوم.',
                'price' => 60,
            ],
            [
                'category_id' => $lips->id,
                'name:en' => 'Matte Lip Kit',
                'name:ar' => 'طقم شفاه مات',
                'description:en' => 'Complete matte lip kit with lip liner and lipstick in perfectly matched shades for defined, velvety lips.',
                'description:ar' => 'طقم شفاه مات كامل مع محدد وأحمر شفاه بدرجات متكاملة لشفاه محددة ومخملية بشكل مثالي.',
                'price' => 50,
            ],
            [
                'category_id' => $lips->id,
                'name:en' => 'Classic Red Lipstick',
                'name:ar' => 'أحمر شفاه كلاسيكي أحمر',
                'description:en' => 'A true classic red lipstick with a creamy satin finish. A timeless beauty essential for every makeup collection.',
                'description:ar' => 'أحمر شفاه أحمر حقيقي كلاسيكي بلمسة ساتان كريمية. عنصر جمال خالد في كل مجموعة مكياج.',
                'price' => 38,
            ],
        ];

        foreach ($products as $product) {
            $product = Product::query()->create($product);

            foreach (range(1, 5) as $i) {
                $product
                    ->addMedia(public_path('images/placeholder/0'.$i.'.webp'))
                    ->preservingOriginal()
                    ->toMediaCollection();
            }
        }
    }
}
