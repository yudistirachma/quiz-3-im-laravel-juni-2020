<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArtikelModel;

class ArtikelController extends Controller
{
    public function index()
    {
        $data = ArtikelModel::artikel();
        // dd($data);
        return view('index', compact('data'));
    }
    public function create()
    {
        return view('create');
    }
    public function store()
    {
        $data = request()->all();
        $hasil = ArtikelModel::store($data);
        return redirect('/artikel');
    }
    public function detil($id)
    {
        $data = ArtikelModel::detil($id);
        return view('detil', compact('data'));
    }

    public function edit($id)
    {
        $data = ArtikelModel::detil($id);
        return view('edit', compact('data'));
    }
    public function storeEdit($id)
    {
        $data = request()->all();
        ArtikelModel::storeEdit($data, $id);
        return redirect('/artikel/' . $id);
    }
    public function hapus($id)
    {
        ArtikelModel::hapus($id);
        return redirect('/artikel');
    }
}
