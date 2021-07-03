<?php

namespace App\Http\Controllers;

use App\Models\Favroite;
use Illuminate\Http\Request;

class FavroiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favroites = Favroite::all();
        return view('favroites.index', compact('favroites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => ['required'],
            'product_id' => ['required'],
        ]);

        if(Favroite::where('user_id', '=', $data['user_id'])->where('product_id', $data['product_id'], )->exists()){
            return redirect(route('quicklook',$data['product_id']))->with('delete', 'Product already in favroite');
        }

        Favroite::create($data);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Favroite  $favroite
     * @return \Illuminate\Http\Response
     */
    public function show(Favroite $favroite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Favroite  $favroite
     * @return \Illuminate\Http\Response
     */
    public function edit(Favroite $favroite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Favroite  $favroite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favroite $favroite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Favroite  $favroite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favroite $favroite)
    {
        $favroite->delete();

        return redirect(route('favroites.index',$favroite->id))->with('sucess', 'Sucessfully removed from favroite');   
    }
}
