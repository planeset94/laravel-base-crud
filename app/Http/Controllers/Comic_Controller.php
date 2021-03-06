<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class Comic_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics= Comic::all();
        // ddd($comics);
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data=$request->all();
        $newComic= new Comic;
        // $newComic->title= $request->'title'];
        $newComic->title= $request->title;
        $newComic->description=$request->description;
        $newComic->image=$request->image;
        $newComic->price=$request->price;
        $newComic->save();
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        // ddd($comic);
        //Crea un file edit.blade.php e replica il contenuto di crea.blade.php
        // Devi però modificare tre cose: l'indirizzo di invio dei dati del form con : {{ route('comics.update',  $comic->id) }}
        //La seconda cosa da modificare sono i placeholder da eliminare e sostituire con i Value. Nel caso della textarea, inserisci il contenuto direttamente tra i tag.
        //La terza cosa è il metodo di invio dei dati: nel form mantieni il metodo post, ma sotto al token @csrf aggiungi  @method('PUT')
        //$comic è un record del DB
        //Dopo aver definito questa rotta, bisogna creare il metoto update
        //Nel Model devi associare a una variabile $fillable i campi che possono essere modificati. 
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //ddd($request)
        //Passo tutti i dati del form alla variabile $data
        $data=$request->all();
        /* Ora passo i dati aggiorati ($data) alla variabile $comic che raprpesenta il record da aggiornare. 
        Per farlo uso il metodo update(). */
        $comic->update($data);
        //Infine, chiedo che l'utente sia reindirizzato ad una pagian di mio gradimento. 
        return redirect()->route('comics.index');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        // $comic = Comic::find($id);
        //chiedo che l'istanza $comic sia eliminata. 
        $comic->delete();
        //Laravel ha preso l'ID dell'istanza da eliminare da un pulsante (form submit) posto nel file index. 
           
        //Dopo aver eliminato il record, reindirizzo l'utente.
        return redirect()->route('comics.index');  
    }
}