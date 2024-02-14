<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class applyHistoriqueController extends Controller
{
    public function index(){
        $usersApplys = Announcement::with('user')->whereHas('user')->get();
        return view('apply.index',compact('usersApplys'));
    }
}
