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

            $newComicBook->save();
        }
    }
}
