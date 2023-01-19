<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artworks = Artwork::all();
        return view('artworks.index', compact('artworks'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artworks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->all();

        $new_artwork = new Artwork();
        $form_data['slug'] = Artwork::generateSlug(($form_data['name']));
        $new_artwork->fill($form_data);
        $new_artwork->save();

        return redirect()->route('artworks.show', $new_artwork)->with('message', 'New aertwork correctly created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artwork = Artwork::findOrFail($id);

        return view('artworks.show', compact('artwork'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function edit(Artwork $artwork)
    {
        return view('artworks.edit', compact('artwork'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artwork $artwork)
    {
        $form_data = $request->all();

        if($form_data['name'] != $artwork->name){
            $form_data['slug'] = Artwork::generateSlug($form_data['name']);
        }else{
            $form_data['slug'] = $artwork->slug;
        }

        $artwork->update($form_data);

        return redirect()->route('artworks.show', $artwork)->with('message', 'Project correctly updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artwork $artwork)
    {
        $artwork->delete();

        return redirect()->route('artworks.index')->with('deleted', "Artwork $artwork->name was deleted" );
    }
}
