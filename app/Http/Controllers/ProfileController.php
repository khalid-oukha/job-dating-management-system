<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($userId,)
    {
        $user = User::findOrfail($userId);
        $skills=$user->skills;
        $applyedAnnouncements = $this->getAnnouncements($userId);
        // dd($applyedAnnouncements);
        return view("profile.index",compact('user','skills','applyedAnnouncements'));
    }

    public function edit(User $user)
    {
        $skills = Skill::all();
        return view('profile.edit', $user, compact('skills'));
    }

    public function update(Request $request,$userId)
    {
        $user =User::find($userId);
        // $user->update($request->only(['name', 'email', /* other fields */]));
        $user->skills()->sync($request->input('skills', []));
        return redirect()->route('profile.index', $user)->with('success', 'Profile updated successfully');
    }

    public function getAnnouncements($userId){
         $applyAnnouncements = Announcement::whereHas('user', function($query) use($userId){
              return $query->where('user_id',$userId);
        })->get();
        return $applyAnnouncements;
    }

}
