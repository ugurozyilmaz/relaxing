<?php

namespace App\Http\Controllers;

use App\Favorite;
use App\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favorites = Favorite::with('song')->paginate(5);
        return responseJson(true, $favorites, 'Başarılı');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $favorite = Song::where('id', $id)->first();

        if (!$favorite)
            return responseJson(false, null, 'Böyle Bir Favori Yok');

        Favorite::firstOrCreate(['song_id' => $id, 'user_id' => Auth::user()->id]);
        return responseJson(true, null, 'Başarılı');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Favorite $favorite
     * @return \Illuminate\Http\Response
     */
    public function show(Favorite $favorite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Favorite $favorite
     * @return \Illuminate\Http\Response
     */
    public function edit(Favorite $favorite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Favorite $favorite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favorite $favorite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  integer $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $favorite = Favorite::where('song_id', $id)->where('user_id', Auth::user()->id)->first();

        if (!$favorite)
            return responseJson(false, null, 'Böyle Bir Favori Yok');


        $favorite->delete();
        return responseJson(true, null, 'Favori Başarıyla Silindi');
    }
}
