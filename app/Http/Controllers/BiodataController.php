<?php

namespace App\Http\Controllers;

use App\Http\Requests\BiodataRequest;
use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BiodataController extends Controller
{
    public function index()
    {
        // return Biodata::all();

        return view('biodata.index', [
            'biodatas' => Biodata::all(),
        ]);

    }

    public function create()
    {
       return view('biodata.create');
    }

    public function store(BiodataRequest $request)
    {
        $foto = $request->file('foto')->store('public/foto');

        $biodata = Biodata::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tmpt_lahir' => $request->tmpt_lahir,
            'alamat' => $request->alamat,
            'tgl_lahir' => $request->tgl_lahir,
            'foto' => $foto,
        ]);
        return redirect('biodata')->with('success', 'Data berhasil ditambahkan');
        // return $biodata;
    }

    public function edit(Biodata $biodata)
    {
        return view('biodata.edit', compact('biodata'));
    }

    public function update(BiodataRequest $request, Biodata $biodata)
    {
        $foto = $biodata->foto;
        if ($request->hasFile('foto')) {
            Storage::delete($foto);
            $foto = $request->file('foto')->store('public/foto');
        }

        $biodata->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tmpt_lahir' => $request->tmpt_lahir,
            'alamat' => $request->alamat,
            'tgl_lahir' => $request->tgl_lahir,
            'foto' => $foto,
        ]);

        return redirect('biodata');
    }

    public function destroy(Biodata $biodata)
    {
        Storage::delete($biodata->foto);
        $biodata->delete();

        return Biodata::destroy($biodata);
    }

    public function show(Biodata $biodata)
    {
        return Biodata::find($biodata);
    }
}
