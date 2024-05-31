<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactAController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('layouts.admin.contact.index', compact('contacts'));
    }

    public function create()
    {
        return view('layouts.admin.contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'sosmed' => 'required', // Menambahkan validasi untuk kolom sosmed
        ]);

        Contact::create($request->all());

        return redirect()->route('contact.index')
            ->with('success', 'Data contact berhasil ditambahkan.');
    }

    public function edit(Contact $contact)
    {
        return view('layouts.admin.contact.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'sosmed' => 'required', // Menambahkan validasi untuk kolom sosmed
        ]);

        $contact->update($request->all());

        return redirect()->route('contact.index')
            ->with('success', 'Data contact berhasil diperbarui.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contact.index')
            ->with('success', 'Data contact berhasil dihapus.');
    }
}
