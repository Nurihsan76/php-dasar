<?php

namespace App\Http\Controllers;

use App\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
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
        $santri = Santri::all();
        return view('santri.index', compact('santri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('santri.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'asal' => 'required',
            'umur' => 'required'
        ]);
        Santri::create($request->all());
        return redirect('/santri')->with('status', 'data santri berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Santri $santri)
    {
        return view('santri.detail', compact('santri'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Santri $santri)
    {
        return view('santri/edit', compact('santri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Santri $santri)
    {

        $request->validate([
            'nama' => 'required|max:255',
            'asal' => 'required',
            'umur' => 'required'
        ]);
        
        Santri::where('id', $santri['id'])
        ->update([
            'nama' => $request['nama'],
            'asal' => $request['asal'],
            'umur' => $request['umur']
        ]);
        return redirect('/santri')->with('status', 'data santri berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Santri $santri)
    {
        Santri::destroy($santri['id']);
        return redirect('/santri')->with('status', 'data santri berhasil dihapus');

    }
}
