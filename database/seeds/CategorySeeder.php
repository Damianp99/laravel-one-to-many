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
        $categories = [
            ['label' => 'FOOD'],
            ['label' => 'TRAVEL'],
            ['label' => 'ECONOMY'],
            ['label' => 'SPORT'],
            ['label' => 'PHOTOGRAPHY'],
            ['label' => 'NATURE'],
            ['label' => 'ANIMALS'],
            ['label' => 'SPACE'],
        ];

        foreach ($categories as $category) {
            $newCategory = new Category;
            $newCategory->label = $category['label'];
            $newCategory->save();
        }
    }
}
