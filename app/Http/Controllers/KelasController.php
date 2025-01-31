<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KelasController extends Controller
{
    public function showKelas($id)
    {
        $kelas = Kelas::where('id', $id)->first()
            ->load('datadiri');
        return view('page.show-kelas', compact('kelas'));
    }

    public function edit($id)
    {
        $kelases = Kelas::where('id', $id)->first();
        return view('page.edit-kelas', compact('kelases'));
    }

    public function resourceImage($filename)
    {
        $path = base_path('public_01/img/' . $filename); // Sesuaikan dengan jalur folder Anda
        if (!file_exists($path)) {
            abort(404);
        }
        $file = file_get_contents($path);
        $type = mime_content_type($path);
        return response($file, 200)->header('Content-Type', $type);
    }
}
