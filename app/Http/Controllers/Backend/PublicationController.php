<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use File;

use App\Models\Publication;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::orderBy('created_at', 'desc')->get();
        return view('backend.publikasi.index', get_defined_vars());
    }

    public function create(Request $request)
    {
        $publication = New Publication();

        if($request->has('file') AND $request->has('cover')) {
            $filePath = $request->file('file')->store('publikasi/file', 'public');
            $coverPath = $request->file('cover')->store('publikasi/cover', 'public');

            $publication->title = $request->title;
            $publication->slug = Str::slug($request->title);
            $publication->file = $filePath;
            $publication->user_id = Auth::id();
            $publication->cover = $coverPath;
            $publication->save();
        }

        return redirect('publication')->with('success', 'Publikasi Berhasil Dibuat');

    }

    public function edit($id)
    {
        $publication = Publication::findOrFail($id);

        return view('backend.publikasi.edit', get_defined_vars());
    }

    public function update(Request $request, $id)
    {
        $publication = Publication::findOrFail($id);
        $existFile = public_path('storage/'.$publication->file);
        $existCover = public_path('storage/'.$publication->cover);

        if($request->has('file') AND $request->has('cover')) {
            if(File::exists($existFile, $existCover)) {
                File::delete($existFile, $existCover);
            }
            $filePath = $request->file('file')->store('publikasi/file', 'public');
            $coverPath = $request->file('cover')->store('publikasi/cover', 'public');

            $publication->title = $request->title;
            $publication->slug = Str::slug($request->title);
            $publication->file = $filePath;
            $publication->cover = $coverPath;
            $publication->user_id = Auth::id();
            $publication->update();
        } elseif ($request->has('file')) {
            if(File::exists($existFile)) {
                File::delete($existFile);
            }
            $filePath = $request->file('file')->store('publikasi/file', 'public');
            
            $publication->title = $request->title;
            $publication->slug = Str::slug($request->title);
            $publication->file = $filePath;
            $publication->user_id = Auth::id();
            $publication->update();
        } elseif ($request->has('cover')) {
            if(File::exists($existCover)) {
                File::delete($existCover);
            }
            $coverPath = $request->file('cover')->store('publikasi/cover', 'public');
            
            $publication->title = $request->title;
            $publication->slug = Str::slug($request->title);
            $publication->cover = $coverPath;
            $publication->user_id = Auth::id();
            $publication->update();
        } else {
            $publication->title = $request->title;
            $publication->slug = Str::slug($request->title);
            $publication->user_id = Auth::id();
            $publication->update();
        }

        return redirect('publication')->with('success', 'Publikasi Berhasil Dibuat');
    }

    public function delete(Request $request, $id)
    {
        $publication = Publication::findOrFail($id);

        if($publication->file AND $publication->cover) {
            $existFile = public_path('storage/'.$publication->file);
            $existCover = public_path('storage/'.$publication->cover);
            if(File::exists($existFile, $existCover)) {
                File::delete($existFile, $existCover);
            }
        }
        
        $publication->delete();

        return redirect('publication')->with('success', 'Publikasi Berhasil Hapus');
    }
}
