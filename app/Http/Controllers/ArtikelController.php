<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = ArtikelModel::get_all();
        return view('index', compact('artikel'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        // dd($data);
        $artikel = ArtikelModel::save($data);
        if($artikel){
            return redirect('/artikel');
        }
    }

    public function show($id){
        $artikel = ArtikelModel::find_by_id($id);
        // dd($artikel);
        return view('show', compact('artikel'));
    }

    public function edit($id){
        $artikel = ArtikelModel::find_by_id($id);
        return view('edit', compact('artikel'));
    }
    
    public function update($id,Request $request){
        $data = $request->all();
        unset($data['_token']);
        $artikel = ArtikelModel::update($id,$data);
        if($artikel){
            return $this->show($id);
        }
    }

    public function delete($id)
    {
        $hapus = ArtikelModel::destroy($id);
        return redirect("/artikel");
    }
}
