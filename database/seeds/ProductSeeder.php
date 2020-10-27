<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();

        foreach ($categories as $category) {
            for ($i = 0; $i < 8; $i++) {
                Product::create([
                    'category_id' => $category->id,
                    'name' => 'Фильтр для очистки',
                    'price' => 125000,
                    'main_image' => '/assets/filter/images/products/product' . $category->id . '.png',
                    'short_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium aperiam, cum deserunt eaque eligendi esse est eveniet ex explicabo in inventore laborum quas suscipit voluptate. Nulla numquam praesentium ullam!',
                    'full_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium aperiam, cum deserunt eaque eligendi esse est eveniet ex explicabo in inventore laborum quas suscipit voluptate. Nulla numquam praesentium ullam! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium aperiam, cum deserunt eaque eligendi esse est eveniet ex explicabo in inventore laborum quas suscipit voluptate. Nulla numquam praesentium ullam!',
                    'sort_order' => $i,
                ]);
            }
        }
    }
}
