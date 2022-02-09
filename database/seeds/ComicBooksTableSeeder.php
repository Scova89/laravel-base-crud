<?php

use Illuminate\Database\Seeder;
use App\ComicBook;

class ComicBooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicBooks = config("comics");

        foreach($comicBooks as $comicBook){
            $newComicBook = new ComicBook();

            $newComicBook->title = $comicBook["title"];
            $newComicBook->description = $comicBook["description"];
            $newComicBook->thumb = $comicBook["thumb"];
            $newComicBook->price = $comicBook["price"];
            $newComicBook->series = $comicBook["series"];
            $newComicBook->sale_date = $comicBook["sale_date"];
            $newComicBook->type = $comicBook["type"];

            $newComicBook->save();
        }
    }
}
