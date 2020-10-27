<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Питьевые фильтры под мойку',
            'image' => '/assets/filter/images/categories/1.jpg',
            'sort_order' => 1,
        ]);
        Category::create([
            'name' => 'Вода в квартире',
            'image' => '/assets/filter/images/categories/2.jpg',
            'sort_order' => 2,
        ]);
        Category::create([
            'name' => 'Вода в коттедже',
            'image' => '/assets/filter/images/categories/3.jpg',
            'sort_order' => 3,
        ]);
        Category::create([
            'name' => 'Вода для бизнеса',
            'image' => '/assets/filter/images/categories/4.jpg',
            'sort_order' => 4,
        ]);
    }
}
