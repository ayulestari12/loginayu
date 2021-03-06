<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori_artikel; 

class KategoriArtikelController extends Controller
{
    public function index(){
        $listkategoriartikel=kategori_artikel::all();
        return view ('kategori_artikel.index',compact('listkategoriartikel'));
    }

    public function show($id){
        //Eloquent
        //$KategoriArtikel=kategoriArtikel::where('id',$id)->first(); // select * from katergori_artikel where id=$id limit 1
        $kategoriartikel=kategori_artikel::find($id);

        return view ('kategori_artikel.show',compact('kategoriartikel'));
    }

    public function create(){
        return view ('kategori_artikel.create');
    }

    public function store(Request $request ){
        $input= $request->all();
        
        kategori_artikel::create($input);

        return redirect(route('kategori_artikel.index'));
    }
}
