<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::all();

        foreach ($categories as $category) {
            for ($i = 1; $i <= 10; $i++) {
                Product::create([
                    'name' => "{$category->name} Item $i",
                    'description' => "Deskripsi untuk {$category->name} item $i. Sangat lezat dan populer di kalangan pelanggan.",
                    'price' => rand(10000, 50000),
                    'category_id' => $category->id,
                    'image' => 'products/01JZX452XWXXGTRW59481ZF5TP.jpg',
                ]);
            }
        }
    }
}
