<?php

namespace App\Http\Controllers;

use App\Models\Companie;
use Illuminate\Http\Request;

class CompanieController extends Controller
{
    public function index(){
        $comapnies = Companie::all();
        // dd($comapnies);
        return view('companies.index',['companies' => $comapnies]);
    }

    public function create(){
        return view('companies.create');
    }

    public function store(Request $request){
        $data= $request->validate([
            'name' => 'required|max:255',
            'title' => 'required|max:255',
            'address' => 'required|max:255',
            'description' => 'required|max:2000',
            'founded_at' => 'required|date',
        ]);

        $newcompanie = Companie::create($data);
        return redirect(route('companie.index'));
    }
}
