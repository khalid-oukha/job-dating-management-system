<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\User;
use App\Models\Companie;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Requests\AnnouncementRequest;
use Illuminate\Support\Facades\Cache;

class AnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // if(Cache::has('announcements')){
        //     $Announcements = Cache::get('announcements');

        // }else{
        //     $Announcements = Announcement::all();
        //     Cache::put('announcements', $Announcements,5000);
        // }
        $Announcements = Cache::remember('announcements', 10, function () {
            return Announcement::all();
        });
        // $Announcements = Cache::remember('announcements', 10, function () {
        //     return Announcement::paginate(10);
        // });

        // $paginationLinks = Cache::remember('announcements_links', 10, function () use ($announcements) {
        //     return $announcements->links('pagination::tailwind');
        // });
        return view("announcements.index", compact("Announcements"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // if (Cache::has('companies') && Cache::has('users') && Cache::has('skills')) {
        //     $companies = Cache::get('companies');
        //     $users = Cache::get('users');
        //     $skills = Cache::get('skills');
        // } else {
            $companies = Companie::all();
            $users = User::all();
            $skills = Skill::all();
            // Cache::put('companies', $companies, 5000);
            // Cache::put('users', $users, 5000);
            // Cache::put('skills', $skills, 5000);
        // }

        return view("announcements.create", ["companies" => $companies, "users" => $users, "skills" => $skills]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AnnouncementRequest $request)
    {
        $announcement = Announcement::create($request->validated());
        $announcement->skills()->attach($request->input('skills', []));
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
        $skills = Skill::all();
        return view('announcements.edit', ['Announcement' => $Announcement, 'companies' => $companies, 'users' => $users, "skills" => $skills]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AnnouncementRequest $request, Announcement $announcement)
    {

        $announcement->update($request->validated());
        $announcement->skills()->sync($request->input('skills', []));
        return redirect('/announcement');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $announcement = Announcement::find($id);
        Announcement::destroy($id);

        $announcement->skills()->delete();
        return redirect(route('announcement.index'));
    }

    public function apply(Announcement $announcement)
    {
        $user = auth()->id();
        $announcement->user()->sync($user);
        return redirect('/');
    }


}
