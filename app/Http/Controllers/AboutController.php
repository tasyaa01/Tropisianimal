<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data dari model About
        $about = About::all();
        return view('about.index', compact('about'));
    }

    public function create()
    {
        return view('about.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'subjudul' => 'required',
            'deskripsi' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $about = new About();
        $about->judul = $request->judul;
        $about->subjudul = $request->subjudul;
        $about->deskripsi = $request->deskripsi;
        $about->visi = $request->visi;
        $about->misi = $request->misi;
        $about->save();
        return redirect()->route('about.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    public function show($id)
    {
        $about = About::findOrFail($id);
        return view('about.show', compact('about'));
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'judul' => 'required',
            'subjudul' => 'required',
            'deskripsi' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $about = About::findOrFail($id);
        $about->judul = $request->judul;
        $about->subjudul = $request->subjudul;        
        $about->deskripsi = $request->deskripsi;
        $about->visi = $request->visi;
        $about->misi = $request->misi;
        $about->save();
        return redirect()->route('about.index')
            ->with('success', 'Data berhasil diedit!');

    }

    public function destroy($id)
    {
        $about = about::find($id);
        return redirect()->route('about.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}