<?php

namespace App\Http\Controllers;

use App\Models\Artists;
use App\Http\Requests\StoreArtistsRequest;
use App\Http\Requests\UpdateArtistsRequest;

class ArtistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = Artists::all();
        return view('artists.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArtistsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $form_data = $request->all();

        // $new_artist = new Artists();

        // $form_data['slug'] = Artists::generateSlug($form_data['name']);

        // $new_artist->fill($form_data);

        // $new_artist->save();

        $form_data = $request->all();
        $form_data['slug'] = Artists::generateSlug($form_data['name']);

        $new_artist = Artists::create($form_data);

        //$new_artist = new Artists();

        //$form_data['slug'] = Artists::generateSlug($form_data['name']);

        //$new_artist = Artists::create($form_data);

        return redirect()->route('artists.show', $new_artist);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artists  $artists
     * @return \Illuminate\Http\Response
     */
    public function show(Artists $artist)
    {
        return view('artists.show', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artists  $artists
     * @return \Illuminate\Http\Response
     */
    public function edit(Artists $artists)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArtistsRequest  $request
     * @param  \App\Models\Artists  $artists
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArtistsRequest $request, Artists $artists)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artists  $artists
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artists $artists)
    {
        //
    }
}
