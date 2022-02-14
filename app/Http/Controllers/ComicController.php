<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> all();

        $request->validate([
            "title" => "required|string|unique:comics",
            "description" => "required",
            "thumb" => "nullable",
            "price"  => "required",
            "series"  => "required",
            "sale_date"  => "required",
            "type"  => [
                "required", Rule::in(["Comic book", "Graphic novel"])
            ],
        ]);

        $newComicBook = new Comic();

        $newComicBook->title = $data["title"];
        $newComicBook->description = $data["description"];
        $newComicBook->price = $data["price"];
        $newComicBook->series = $data["series"];
        $newComicBook->sale_date = $data["sale_date"];
        $newComicBook->type = $data["type"];
        if(!empty($data['thumb'])){
            $newComicBook->thumb = $data["thumb"];
        }

        $newComicBook->save();

        return redirect()-> route('comics.show', $newComicBook->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $comic->title = $data["title"];
        $comic->description = $data["description"];
        $comic->price = $data["price"];
        $comic->series = $data["series"];
        $comic->sale_date = $data["sale_date"];
        $comic->type = $data["type"];
        if(!empty($data['thumb'])){
            $comic->thumb = $data["thumb"];
        }

        $comic->save();

        return redirect()-> route('comics.show', $comic->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route("comics.index");
    }
}
