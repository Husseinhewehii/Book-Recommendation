<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::create([
            'name' => "Biology"
        ]);

        Category::create([
            'name' => "Mathematics"
        ]);

        Category::create([
            'name' => "Linguistics"
        ]);

        Category::create([
            'name' => "Communication"
        ]);

        Category::create([
            'name' => "Technology"
        ]);

        Category::create([
            'name' => "Anthropology"
        ]);


    }
}
