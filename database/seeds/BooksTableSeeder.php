<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Book::create([
            "title" => "The Selfish Gene",
            "author" => "Richard Dawkins",
            "image" => 'selina-kyle.jpg',
            "description"=> "category 1",
            "link" => "https://www.youtube.com/watch?v=gUm_VC3vBt4",
            "category_id" => 1
        ]);

        Book::create([
            "title" => "The Selfish Gene",
            "author" => "Richard Dawkins",
            "image" => 'selina-kyle.jpg',
            "description"=> "category 2",
            "link" => "https://www.youtube.com/watch?v=gUm_VC3vBt4",
            "category_id" => 2
        ]);

        Book::create([
            "title" => "The Selfish Gene",
            "author" => "Richard Dawkins",
            "image" => 'selina-kyle.jpg',
            "description"=> "category 3",
            "link" => "https://www.youtube.com/watch?v=gUm_VC3vBt4",
            "category_id" => 3
        ]);

        Book::create([
            "title" => "The Selfish Gene",
            "author" => "Richard Dawkins",
            "image" => 'selina-kyle.jpg',
            "description"=> "category 4",
            "link" => "https://www.youtube.com/watch?v=gUm_VC3vBt4",
            "category_id" => 4
        ]);

        Book::create([
            "title" => "The Selfish Gene",
            "author" => "Richard Dawkins",
            "image" => 'selina-kyle.jpg',
            "description"=> "category 5",
            "link" => "https://www.youtube.com/watch?v=gUm_VC3vBt4",
            "category_id" => 5
        ]);

        Book::create([
            "title" => "The Selfish Gene",
            "author" => "Richard Dawkins",
            "image" => 'selina-kyle.jpg',
            "description"=> "category 6",
            "link" => "https://www.youtube.com/watch?v=gUm_VC3vBt4",
            "category_id" => 6
        ]);
    }
}
