<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    public function read() {
        $no = 1;
        $kategori = Kategori::all();
        return view('admin.data-kategori', compact('kategori', 'no'));
    }

    public function create(Request $request){
        $kategori = new Kategori();
        $kategori->nama = ucwords(strtolower($request->nama));
        $kategori->save();

        return Redirect::to("/data-kategori")->withSuccess('Berhasil! Daftar Kategori Berhasil Diinput.');
    }

    public function delete($id){
        DB::table('kategoris')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function halamanupdate($id){
        $kategori = Kategori::where('id',$id)->first();
        return view('admin.edit-data-kategori', compact('kategori'));
     }

     public function update(Request $request, $id)
    {
    $kategori = Kategori::find($id);
    $kategori->nama = ucwords(strtolower($request->nama));
    // return dd($kategori);
    $kategori->save();
    return Redirect::to("/data-kategori")->withSuccess('Berhasil! Daftar Kategori Berhasil Diubah.');
    }

}
