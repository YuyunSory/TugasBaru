<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeAController extends Controller
{
    //
    public function index()
    {
        $homes = Home::all();
        return view('layouts.admin.home.index', compact('homes'));
    }

    public function create()
    {
        return view('layouts.admin.home.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        Home::create($request->all());

        return redirect()->route('home.index')
            ->with('success', 'Data Home berhasil ditambahkan.');
    }

    public function edit(Home $home)
    {
        return view('layouts.admin.home.edit', compact('home'));
    }

    public function update(Request $request, Home $home)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        $home->update($request->all());

        return redirect()->route('home.index')
            ->with('success', 'Data Home berhasil diperbarui.');
    }
    public function destroy(Home $home)
    {
        $home->delete();

        return redirect()->route('home.index')
            ->with('success', 'Data Home berhasil dihapus.');
    }
}
