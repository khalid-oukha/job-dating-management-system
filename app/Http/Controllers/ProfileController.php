<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($userId,)
    {
        $user = User::findOrfail($userId);
        $skills=$user->skills;
        return view("profile.index",compact('user','skills'));
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
}
