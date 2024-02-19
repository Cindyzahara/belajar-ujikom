<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use PDF;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //memanggil data relasi antarv tabel di model
        //programa memesan id dan atribut lain nya dengan menggunakan desc/asc
        $peminjaman = Peminjaman::with('user', 'buku')->orderBy('id', 'desc')->get();
        return view('data-peminjaman.index', compact('peminjaman'));
    }

    public function input(Request $request)
    {
        return view("data-peminjaman.formInput");
    }

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
        //data untuk menambhkan ke halaman database yang nanti di panggil di view
        Peminjaman::create([
            'user_id' => $request->user_id,
            'buku_id' => $request->buku_id,
            'TaggalPeminjaman' => $request->TaggalPeminjaman,
            'TaggalPengembalian' => $request->TaggalPengembalian,
            'StatusPeminjaman' => $request->StatusPeminjaman,
        ]);

        
        //membuat alert succes ketika berhasil tersimpan ke halaman index
        return redirect()->route('data-peminjaman')->with('success', 'Data berhasil disimpan');
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
        //pengeditan
        $peminjaman = Peminjaman::findorfail($id);
        return view('data-peminjaman.formEdit', compact('peminjaman'));
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
        //untuk data yang sudah di edit lalu di update ke halaman index pemijaman
        $peminjaman = Peminjaman::findorfail($id);
        $peminjaman->update($request->all());

        return redirect()->route('data-peminjaman')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // untuk menghapus
        $peminjaman = Peminjaman::findorfail($id);

        $peminjaman->delete();

        return redirect()->route('data-peminjaman')->with('success', 'Data berhasil dihapus');
    }

    public function export_pdf(Request $request)
    {
        //DECLARE REQUEST
        //QUERY
        $peminjaman = Peminjaman::select('*');
        
        $peminjaman = $peminjaman->get();

        // Meneruskan parameter ke tampilan ekspor
        $pdf = PDF::loadview('data-peminjaman.exportPdf', ['peminjaman'=>$peminjaman]);
        $pdf->setPaper('a4', 'portrait');
        $pdf->setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        // SET FILE NAME
        $filename = date('YmdHis') . '_data-peminjaman';
        // untuk mendownload file pdf
        return $pdf->download($filename.'.pdf');
    }
}