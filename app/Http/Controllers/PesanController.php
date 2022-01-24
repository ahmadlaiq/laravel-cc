<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PesanController extends Controller
{
    public function create(Request $request){
        $kategori = new Pesan();
        $kategori->nama = ucwords(strtolower($request->nama));
        $kategori->nomeja = $request->nomeja;
        $kategori->orang = $request->orang;
        $kategori->pesanan = $request->pesanan;
        $kategori->status = $request->status;
        $kategori->save();
        // return dd($kategori);
        return back()->withSuccess('Your booking request was sent. We will call back to confirm your reservation. Thank you!');
    }

    public function readMasuk() {
        $no = 1;
        $term = 1;
        $pesan = Pesan::all()->where('status','LIKE',$term);
        return view('admin.pesanan-masuk', compact('pesan', 'no'));
    }

    public function readSelesai() {
        $no = 1;
        $term = 2;
        $pesan = Pesan::all()->where('status','LIKE',$term);
        return view('admin.pesanan-selesai', compact('pesan', 'no'));
    }

    public function selesai(Request $request, $id)
    {
    $problems = Pesan::find($id);
    $problems->status = $request->status;
    //return dd($problems);
    $problems->save();
    return Redirect::to("/pesanan-selesai")->withSuccess('Pesanan Selesai!');
    }

    public function delete($id){
        DB::table('pesans')->where('id', $id)->delete();
        return redirect()->back();
    }

}
