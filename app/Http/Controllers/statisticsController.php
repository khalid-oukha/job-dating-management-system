<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\User;
use App\Models\Companie;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class statisticsController extends Controller
{
    public function index(){
        $totalStudents = $this->getTotalStudents();
        $totalCompanies = $this->getTotalCompanies();
        $totalAnnouncements = $this->getTotalAnnouncements();
        // $skillRec = Skill::withCount('Announcement')->orderByDesc('announcements_count')->first();
        $skillRec = Skill::join('announcement_skills', 'announcement_skills.skill_id', '=', 'skills.id')
        ->groupBy('skills.id')
        ->get(['skills.id', 'skills.name', DB::raw('count(skills.id) as skills_count')])
        ->sortByDesc('skills_count')
        ->first();

        return view('statistics.index', compact('totalStudents','totalCompanies','totalAnnouncements','skillRec'));
    }

    public function getTotalStudents(){
        $totalStudents = User::whereHas('roles', function($query) {
             $query->where('name', 'student');
        })->count();

        return $totalStudents;
    }

    public function getTotalCompanies() {
       return  $totalCompanies = Companie::count();
    }

    public function getTotalAnnouncements() {
        return $totalAnnouncements = Announcement::count();
    }



}
