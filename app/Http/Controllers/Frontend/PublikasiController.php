<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Downloader;

class PublikasiController extends Controller
{
    public function index()
    {
        $publications = Publication::orderBy('created_at', 'desc')->get();
        return view('frontend.publikasi.index', get_defined_vars());
    }

    public function view(Request $request, $slug)
    {
        $publication = Publication::where('slug', $slug)->first();

        return view('frontend.publikasi.view', get_defined_vars());
    }

    public function downloader(Request $request, $slug)
    {
        $publication = Publication::where('slug', $slug)->first();

        $downloader = New Downloader();

        $request->validate([
            'publication_id' => 'required',
            'nama' => 'required',
            'instansi' => 'required',
            'email' => 'required',
        ]);

        $downloader->publication_id = $publication->id;
        $downloader->nama = $request->nama;
        $downloader->instansi = $request->instansi;
        $downloader->email = $request->email;

        $downloader->save();

        return view('frontend.publikasi.download', get_defined_vars());
    }

    static function publikasiCount()
    {
        return Publication::count();

    }
}
