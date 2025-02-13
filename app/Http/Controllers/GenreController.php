<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // fetching data dari tabel genres
        $genres = DB::table('genres')->get();
        // return ke view dan kirirmkan data $genres
        return view('genre.index', compact('genres'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|min:5'
        ]);

        // Query untuk menyimpan data
        $query = DB::table('genres')->insert([
            'name' => $request['name']
        ]);

        //jika data disimpan maka akan di redirect ke halaman index

        return redirect()->route('genre.index')->with(['success' =>  'Genre berhasil ditambahkan']);;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $genre = DB::table('genres')->where('id', $id)->first();
        // menampilkan view edit data
        return view('genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        //validasi data inputan data wajib diisi dan minimal 5 karakter
        $request->validate([
            'nama'  => 'required|min:5',
        ]);
        // Query Untuk menyimpan data
        $query = DB::table('genres')
        ->where('id', $id)
        ->update([
            'nama'  => $request['nama'],
        ]);
        // Jika data disimpan maka di redirect ke halaman index
        return redirect()->route('genre.index')->with(['success' => 'Data Berhasil diupdate']);;                   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
