<?php

namespace App\Http\Controllers;

use App\Models\Articel;
use App\Models\Reviews;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticelController extends Controller
{
    //
    public function show(){
        // $data['produk'] = Produk::all();
        $data['article'] = Articel::orderby('judul','asc')->get();
        $data['total'] = Articel::count();
        // dd($data);

        return view('dshbd', $data);
    }

    public function search(Request $request){
        $data['article'] = Articel::where('id','LIKE','%'.$request->cari.'%')
        ->orWhere('judul','LIKE','%'.$request->cari,'%')
        ->orWhere('kategori','LIKE','%'.$request->cari.'%')->get();
        $data['total'] = $data['article']->count();

        return view('dshbd',$data);
    }
    public function create(){
        return View('artikel-create');
    }
    public function add(Request $request){
        $fileName = '';
        if($request->file('foto')){
            $extfile = $request -> file('foto')->getClientOriginalExtension();
            $fileName = time(). ".".$extfile;
            $request->file('foto')->storeAs('foto',$fileName);
        }
        Articel::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'foto' => $fileName
        ]);
        
        return redirect('dshbd');
    }
    public function edit(Request $request){
        $data['article'] = Articel::all();
        $data['article'] = Articel::find($request->id);
        return view('artikel-edit',$data);
    }

    public function delete(Request $request)
    {
        $artikel = Articel::find($request->id);
        $delete = Articel::where('id', $request->id)->delete();
        if ($delete) {
            if($artikel->foto) {
                Storage::delete('foto/' .$artikel->foto);
            }
            Session::flash('pesan', 'Data berhasil di hapus');
        }else{
            Session::flash('pesan', 'Data gagal dihapus');
        }
        return redirect('/dshbd');
    }

    public function update(Request $request){
        $produk = Articel::find($request->id);

        // Storage::delete($produk->foto);
        
        $fileName = '';
        if($request->file('foto')){
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time(). ".".$extfile;
            $request->file('foto')->storeAs('foto',$fileName);
        }

        // $update = 
        $update = Articel::where('id',$request->id)->update([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'foto' => $fileName
        ]);
        if($update){
            Session::flash('pesan','Data berhasil diubah');
        }else{
            Session::flash('pesan','Data gagal diubah');
        }
        return redirect('/dshbd');
    }

    public function createw(){
        return View('review');
    }
    public function ad(Request $request){
        Reviews::create([
            'name' => $request->name,
            'review' => $request->review,
            'rating' => $request->rating,
        ]);
        
        return redirect('/');
    }
}
