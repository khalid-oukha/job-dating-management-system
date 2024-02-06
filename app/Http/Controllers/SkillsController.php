<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillRequest;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::all();
        return view("skills.index", compact("skills"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
           return view("skills.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillRequest $request)
    {
        Skill::create($request->validated());
        return redirect()->route("skill.index")->with("success","skill added");
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skills)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {

        return view("skills.edit", compact("skill"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SkillRequest $request, Skill $skill)
    {

        $skill->update($request->validated());
        return redirect()->route("skill.index")->with("success","skill updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route("skill.index")->with("success","skill deleted");

    }
}
