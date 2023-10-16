<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Letterin;

class LetterinController extends Controller
{
    public function index()
    {
       $letterins = Letterin::all(); 
          
       // Return Json Response
       return response()->json([
            'letterin' => $letterins
       ],200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'noterima' => 'required',
            'tglditerima' => 'required|date',
            'jamditerima' => 'required|date_format:H:i',
            'dari' => 'required',
            'nosurat' => 'required',
            'tglsurat' => 'required|date',
            'nd' => 'required',
            'perihal' => 'required',
            'pberwenang' => 'required',
            'jenisurat' => 'required',
            'kepada' => 'required',
            'notatindakan' => 'required',
            'tgldisposisi' => 'required|date',
            'catatanevp' => 'nullable',
            'catatandevp' => 'nullable',
            'catatanosm' => 'nullable',
            'upimage' => 'nullable|file|mimes:jpeg,png,jpg,gif,pdf|max:2048',
        ]);


        // Jika ada file yang diunggah, simpan file
        if ($request->hasFile('upimage')) {
            $file = $request->file('upimage');
            $filename = $file->getClientOriginalName();
            $file->storeAs('uploads', $filename, 'public'); // Simpan file di storage
            $validatedData['upimage'] = $filename; // Simpan nama file dalam kolom "upimage"
        }

        $letterins = Letterin::create($validatedData);

        return response()->json($letterins, 201);
    }
}
