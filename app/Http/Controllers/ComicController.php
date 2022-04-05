<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
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
        $comics= Comic::all();
        return view('comic.index', compact('comics'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate(
            [
                'thumb' => 'required|url',
                'title' => 'required|min:5',
                'type' => ['required', Rule::in(['comic book', 'graphic novel'])],
                'description' => 'required|min:20'
            ]
        );

        $data = $request->all();
        
    
        $comic=new Comic();  
        
        // $comic->title=$data['title'];
        // $comic->thumb=$data['thumb'];
        // $comic->series=$data['series'];
        // $comic->sale_date=$data['sale_date'];
        // $comic->type=$data['type'];
        // $comic->price=$data['price'];
        // $comic->description=$data['description'];
        $comic->fill($data);
        $comic->save();

        return redirect()-> route('comic.show', ['comic'=>$comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comic.show',compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {   
        return view('comic.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Comic $comic)
    {
        $request->validate(
            [ 'thumb' => 'required|url',
            'title' => 'required|min:5',
            'type' => ['required', Rule::in(['comic book', 'graphic novel'])],
            'description' => 'required|min:20'
            ]
        );

        
        $data = $request->all();
        $comic->update($data);

        $comic->save();

        return redirect()->route('comic.show', ['comic' => $comic->id]);

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

        return redirect()->route('comic.index')->with('status', 'Elemento cancellato!');
    }
}
