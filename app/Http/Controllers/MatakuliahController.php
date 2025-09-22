<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Menampilkan data matakuliah';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'Mengisi data matakuliah baru';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'Menyimpanan data matakuliah baru (dari function Create)';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $param1 = '')
    {
        if ($param1 == '') {
            return 'Masukkan kode matakuliah!';
        } else if ($param1 != '') {
            return 'Anda mengakses matakuliah ' . $param1;
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'Mengedit data matakuliah';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'Menyimpan data matakuliah teredit';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'Menghapus data';
    }
}
