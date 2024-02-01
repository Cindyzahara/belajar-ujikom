<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use Validator;
use Tanggal;

class BukuController extends Controller
{
    public function __construct(){
        $this->Tanggal = new Tanggal();
    }

    public function index(Request $request)
    {
        $f1=$request->input('f1');
        $data = Buku::select('*');
        if($f1){
            $data->where('kategori_id','=',''.$f1.'')->get();
        }
        $data = $data->get();
        return view('data-buku.index',['data'=>$data]);
    }

    public function input(Request $request)
    {
        return view('data-buku.formInput');
    }

    public function create(Request $request)
    {
        //  $isrole=auth()->user()->isrole;
        //DECLARE REQUEST
        $judul = $request->input('judul');
        $kategori_id = $request->input('kategori_id');
        $penulis = $request->input('penulis');
        $penerbit = $request->input('penerbit');
        $tahun_terbit = $request->input('tahun_terbit');
        //COSTUM REQUEST
        if($tahun_terbit){
            $tahun_terbit=$this->Tanggal->tanggalDatabase($tahun_terbit);
        }else{
            $tahun_terbit=null;
        }

        //VALIDATION FORM
        $validator = Validator::make($request->all(), [
            'judul' => 'required|max:255',
            'penulis' => 'required|max:255',
            'penerbit' => 'required|max:255',
            'kategori_id' => 'required|max:5|numeric',
            'tahun_terbit' => 'date_format:d/m/Y',
        ]);
        if ($validator->fails()) {
            $errormessage='';
            foreach ($validator->errors()->all() as $message) {
                $errormessage.='<li>'.$message.'</li>';
            }
            //NOT VALID
            return back()
            ->with('failed','Harap periksa kembali!. <ul>'.$errormessage.'</ul>')->withInput();
        }


        try {
            $data =  new Buku();
            $data->created_us   = auth()->user()->id;
            $data->updated_us   = auth()->user()->id;
            $data->judul         = $judul;
            $data->penulis         = $penulis;
            $data->kategori_id  = $kategori_id;
            $data->penerbit = $penerbit;
            $data->tahun_terbit = $tahun_terbit;
            // SAVE THE DATA
            if ($data->save()) {
                // SUCCESS
                return redirect()
                ->route('data-buku.edit',['id' => $data->id])
                ->with('success', 'Data berhasil disimpan');
            }
		}
		catch(Exception $e){
            //ERROR
			return back()
            ->withInput()
            ->with('error','Gagal memproses!');
		}
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
       // GET THE DATA BASED ON ID
       $data = Buku::find($id);
       // CHECK IS DATA FOUND
       if (!$data) {
           // DATA NOT FOUND
           return back()
               ->withInput()
               ->with('error', 'item not found!');
       }
       return view('data-buku.formEdit', compact('data','id'));
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
         // CHECK OBJECT ID
         if ((int) $id < 1) {
            // INVALID OBJECT ID
            return redirect()
                ->route('data-buku')
                ->with('error', 'item not found!');
        }
        // $isrole=auth()->user()->isrole;
        
        //DECLARE REQUEST
        $judul = $request->input('judul');
        $kategori_id = $request->input('kategori_id');
        $penulis = $request->input('penulis');
        $penerbit = $request->input('penerbit');
        $tahun_terbit = $request->input('tahun_terbit');

        //COSTUM REQUEST
        if($tahun_terbit){
            $tahun_terbit=$this->Tanggal->tanggalDatabase($tahun_terbit);
        }else{
            $tahun_terbit=null;
        }
        // GET THE DATA BASED ON ID
        $data = Buku::find($id);
        // CHECK IS DATA FOUND
        if (!$data) {
            // DATA NOT FOUND
            return back()
                ->withInput()
                ->with('error', 'item not found!');
        }
        //VALIDATION FORM
        $validator = Validator::make($request->all(), [
            'judul' => 'required|max:255',
            'penulis' => 'required|max:255',
            'penerbit' => 'required|max:255',
            'kategori_id' => 'required|max:5|numeric',
            'tahun_terbit' => 'date_format:d/m/Y',
        ]);
        if ($validator->fails()) {
            $errormessage='';
            foreach ($validator->errors()->all() as $message) {
                $errormessage.='<li>'.$message.'</li>';
            }
            //NOT VALID
            return back()
            ->withInput()
            ->with('failed','Harap periksa kembali!. <ul>'.$errormessage.'</ul>');
        }

        try {
            $data->updated_us   = auth()->user()->id;
            $data->judul         = $judul;
            $data->penulis         = $penulis;
            $data->kategori_id  = $kategori_id;
            $data->penerbit = $penerbit;
            $data->tahun_terbit = $tahun_terbit;
            // SAVE THE DATA
            if ($data->save()) {
                // SUCCESS
                return redirect()
                ->route('data-buku.edit',['id' => $data->id])
                ->with('success', 'Data berhasil disimpan');
            }
		}
		catch(Exception $e){
            // ERROR
			return back()
            ->withInput()
            ->with('error','Gagal memproses!');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // CHECK OBJECT ID
        if ((int) $id < 1) {
            // INVALID OBJECT ID
            return redirect()
                ->route('data-buku')
                ->with('error', 'item not found!');
        }

        $db = Buku::where('id', $id);
        $cek = $db->count();
        $data = $db->first();
        try {
            if ($cek) {
                if ($file_b) {
                    $destinationPath = 'images/buku/';
                    if (File::exists(public_path($destinationPath.$file_b))) {
                        File::delete(public_path($destinationPath.$file_b));
                    }
                }
                $db->delete();
            }
            // SUCCESS
            return redirect()
            ->route('data-buku')
            ->with('success', 'Data berhasil dihapus');
        }
        catch(Exception $e){
            // ERROR
			return back()
            ->withInput()
            ->with('error','Gagal memproses!');
		}
    }
}
