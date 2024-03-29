<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Companie;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Requests\AnnouncementRequest;

class AnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Announcements = Announcement::all();
        return view("announcements.index", compact("Announcements"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Companie::all();
        $users = User::all();
        return view("announcements.create",["companies" => $companies,"users"=> $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AnnouncementRequest $request)
    {
        // dd($request->validated());
        Announcement::create($request->validated());
        return redirect(route('announcement.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $Announcement)
    {
        $companies = Companie::all();
        $users = User::all();
        return view('announcements.edit',['Announcement' => $Announcement,'companies' => $companies,'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AnnouncementRequest $request, string $id)
    {
        $announcement = Announcement::find($id);
        $announcement->update($request->validated());
        return redirect(route('companie.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Announcement::destroy($id);
        return redirect(route('announcement.index'));
    }
}
