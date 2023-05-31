<?php

namespace App\Http\Controllers;

use App\Models\mahasiswaModel;
use Illuminate\Http\Request;

class MahasiswaModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa=MahasiswaModel::all();
        return view('mahasiswa')
        ->with('mhs',$mahasiswa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mahasiswaModel  $mahasiswaModel
     * @return \Illuminate\Http\Response
     */
    public function show(mahasiswaModel $mahasiswaModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mahasiswaModel  $mahasiswaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(mahasiswaModel $mahasiswaModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mahasiswaModel  $mahasiswaModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mahasiswaModel $mahasiswaModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mahasiswaModel  $mahasiswaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(mahasiswaModel $mahasiswaModel)
    {
        //
    }
}
