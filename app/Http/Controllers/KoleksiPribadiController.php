<?php

namespace App\Http\Controllers;

use App\Models\Koleksipribadi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KoleksiPribadiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $koleksipribadi = KoleksiPribadi::with('user','buku')->orderBy('id','desc')->get();
        return view('koleksi-pribadi.index', compact('koleksipribadi'));
    }
     
 
     public function input(Request $request)
     {
         return view("koleksi-pribadi.formInput");
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
        KoleksiPribadi::create([
            'user_id' => $request->user_id,
            'buku_id' => $request->buku_id,
        ]);

        return redirect()->route('koleksi-pribadi')->with('success', 'Data berhasil disimpan');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $koleksipribadi = KoleksiPribadi::findorfail($id);
        return view('koleksi-pribadi.formEdit', compact('koleksipribadi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $koleksipribadi = KoleksiPribadi::findorfail($id);
        $koleksipribadi->update($request->all());

        return redirect()->route('koleksi-pribadi')->with('success', 'Data berhasil diupdate');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $koleksipribadi = KoleksiPribadi::findorfail($id);

        $koleksipribadi->delete();

        return redirect()->route('koleksi-pribadi')->with('success', 'Data berhasil dihapus');
    }
}
