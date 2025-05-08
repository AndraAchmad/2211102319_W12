<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $people = Person::all();
        return view('people.index', compact('people'));
    }

    public function create()
    {
        return view('people.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nama_panggilan' => 'required',
            'nim' => 'required|numeric',
            'email' => 'required|email',
        ]);

        Person::create($request->all());

        return redirect()->route('people.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $person = Person::findOrFail($id);
        return view('people.edit', compact('person'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'nama_panggilan' => 'required',
            'nim' => 'required|numeric',
            'email' => 'required|email',
        ]);

        $person = Person::findOrFail($id);
        $person->update($request->all());

        return redirect()->route('people.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $person = Person::findOrFail($id);
        $person->delete();

        return redirect()->route('people.index')->with('success', 'Data berhasil dihapus!');
    }
}
