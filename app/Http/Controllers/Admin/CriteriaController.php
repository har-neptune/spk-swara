<?php

namespace App\Http\Controllers\Admin;

use App\Models\Criteria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CriteriaController extends Controller
{
    public function index()
    {
        $criteria = Criteria::all();
        return view('admin.criteria.index', compact('criteria'));
    }

    public function create()
    {
        return view('admin.criteria.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'weight' => 'required|numeric',
        ]);

        Criteria::create($request->all());
        return redirect()->route('admin.criteria.index')->with('success', 'Kriteria berhasil ditambahkan.');
    }

    public function edit(Criteria $criterium)
    {
        return view('admin.criteria.edit', compact('criterium'));
    }

    public function update(Request $request, Criteria $criterium)
    {
        $request->validate([
            'name' => 'required',
            'weight' => 'required|numeric',
        ]);

        $criterium->update($request->all());
        return redirect()->route('admin.criteria.index')->with('success', 'Kriteria berhasil diperbarui.');
    }

    public function destroy(Criteria $criterium)
    {
        $criterium->delete();
        return redirect()->route('admin.criteria.index')->with('success', 'Kriteria berhasil dihapus.');
    }
}
