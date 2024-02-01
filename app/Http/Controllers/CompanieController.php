<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanieRequest;
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

    public function store(CompanieRequest $request)
    {
        // $data = $request->validate([
        //     'name' => 'required|max:255',
        //     'title' => 'required|max:255',
        //     'address' => 'required|max:255',
        //     'description' => 'required|max:2000',
        //     'founded_at' => 'required|date',
        // ]);

        $newcompanie = Companie::create($request->validated());
        return redirect(route('companie.index'));
    }

    public function edit(Companie $companie)
    {
        // dd($companie);
        return view('companies.edit', ['companie' => $companie]);
    }

    public function update($id, CompanieRequest $request)
    {
        // $data = $request->validate([
        //     'name' => 'required|max:255',
        //     'title' => 'required|max:255',
        //     'address' => 'required|max:255',
        //     'description' => 'required|max:2000',
        //     'founded_at' => 'required|date',
        // ]);
        $companie = Companie::find($id);
        $companie->update($request->validated());
        return redirect(route('companie.index'));

    }

    public function delete($id){
        
        $companie = companie::destroy($id);
        return redirect(route('companie.index'));
    }
}
