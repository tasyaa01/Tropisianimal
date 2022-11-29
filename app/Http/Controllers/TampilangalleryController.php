<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class TampilangalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery()
    {
        //menampilkan semua data dari model Gallery
        $gallery = Gallery::all();
        return view('userpage.gallery', compact('gallery'));
    }
}