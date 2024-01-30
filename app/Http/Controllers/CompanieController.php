<?php

namespace App\Http\Controllers;

use App\Models\Companie;
use Illuminate\Http\Request;

class CompanieController extends Controller
{
    public function index()
    {
        $comapnies = Companie::all();
        // dd($comapnies);
        return view('companies.index', ['companies' => $comapnies]);
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'title' => 'required|max:255',
            'address' => 'required|max:255',
            'description' => 'required|max:2000',
            'founded_at' => 'required|date',
        ]);

        $newcompanie = Companie::create($data);
        return redirect(route('companie.index'));
    }

    public function edit(Companie $companie)
    {
        // dd($companie);
        return view('companies.edit', ['companie' => $companie]);
    }

    public function update($id, Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'title' => 'required|max:255',
            'address' => 'required|max:255',
            'description' => 'required|max:2000',
            'founded_at' => 'required|date',
        ]);
        $companie = Companie::find($id);
        // $companie->name = $request->input('name');
        // $companie->title = $request->input('title');
        // $companie->address = $request->input('address');
        // $companie->description = $request->input('description');
        // $companie->founded_at = $request->input('founded_at');
        $companie->update($data);
        return redirect(route('companie.index'));

    }

    public function delete($id){
        $companie = companie::destroy($id);
        return redirect(route('companie.index'));
    }
}
