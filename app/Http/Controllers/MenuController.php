<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Menu;
use App\Models\Pesan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class MenuController extends Controller
{
    public function create(Request $request)
    {
        // $rules = [
        //     'nama'                  => 'required',
        //     'harga'                 => 'required',
        //     'deskripsi'             => 'required',
        //     'foto'                  => 'required',
        // ];
 
        // $messages = [
        //     'nama.required' => 'Nama Lengkap wajib diisi.',
        //     'harga.required'    => 'Harga wajib diisi.',
        //     'deskripsi.required'    => 'Deskripsi wajib diisi.',
        //     'foto.required'    => 'Foto wajib diisi.',
        // ];
 
        // $validator = Validator::make($request->all(), $rules, $messages);
 
        // if($validator->fails()){
        //     return redirect()->back()->withErrors($validator)->withInput($request->all);
        // }

        $lampiran     = $request->file('gambar');
        $lampiranName = time() . "_" . $lampiran->getClientOriginalName();
        $lampiranPath   = "gambar";
        $lampiran->move($lampiranPath, $lampiranName);

        ($request->all());
        $this->saveMenu($request->all(), $lampiranName);

        return Redirect::to("/data-menu")->withSuccess('Berhasil! Daftar Menu Berhasil Diinput.');
    }

    protected function saveMenu(array $data, $lampiran = null)
    {
        //dd($data);
        return Menu::create([
            'nama'         => $data['nama'],
            'harga'     => $data['harga'],
            'kategori'     => $data['kategori'],
            'deskripsi'   => $data['deskripsi'],
            'gambar'      => $lampiran,
        ]);
    }

    public function read()
    {
        $no = 1;
        $menu = Menu::all();
        return view('admin.data-menu', compact('menu', 'no'));
    }

    public function readKategori(){

        $kategori = Kategori::all();
        return view('admin.tambah-data-menu', compact('kategori'));
    }

    public function readtoIndex(){

        $menu = Menu::all();
        return view('customer.index', compact('menu'));
    }

    public function delete($id){
        DB::table('menus')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function halamanupdate($id){
        $menu = Menu::where('id',$id)->first();
        $kategori = Kategori::all();
        return view('admin.edit-data-menu', compact('menu', 'kategori'));
     }

     public function countMenu() {
        $countMenu = Menu::all()->count();
        $countKagetori = Kategori::all()->count();
        $countPesan1 = Pesan::all()->where('status','LIKE', 1)->count();
        $countPesan2 = Pesan::all()->where('status','LIKE', 2)->count();
        return view('admin.dashboard', compact('countMenu', 'countKagetori', 'countPesan1', 'countPesan2'));
     }
}
