<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics= config('comics');
        foreach($comics as $comic){
            $book= new Comic();
            $book->title=$comic['title'];
            $book->description=$comic['description'];
            $book->thumb=$comic['thumb'];
            $book->price=$comic['price'];
            $book->series=$comic['series'];
            $book->sale_date=$comic['sale_date'];
            $book->type=$comic['type'];
            $book->save();
        }
    }
}
