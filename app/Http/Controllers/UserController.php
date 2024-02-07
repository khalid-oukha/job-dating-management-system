<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view("users.index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view("users.create", compact("roles"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $user = User::create($request->validated());
        $roleName = $request->input('role_name');

        $user->assignRole($roleName);
        return redirect()->route("user.index")->with("success", "user created");
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
    public function edit(string $id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view('users.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        $user = User::find($id);
        $user->update($request->validated());
        $roleName = $request->input('role_name');

        if ($user->roles->isNotEmpty()) {
            $currentRole = $user->roles->first();
            if ($currentRole->name !== $roleName) {
                $user->removeRole($currentRole->name);
            }
        }

        $user->assignRole($roleName);

        return redirect()->route("user.index")->with("success", "user created");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        
        return redirect()->route('user.index')->with("success",'user deleted');
    }
    
    
}
