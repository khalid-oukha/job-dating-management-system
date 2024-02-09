<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Companie;
use App\Models\Announcement;
use Illuminate\Http\Request;

class statisticsController extends Controller
{
    public function index(){
        $totalStudents = $this->getTotalStudents();
        $totalCompanies = $this->getTotalCompanies();
        $totalAnnouncements = $this->getTotalAnnouncements();
        $totalApplications = $this->getTotalApplications();
        return view('statistics.index', compact('totalStudents','totalCompanies','totalAnnouncements','totalApplications'));
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

    public function getTotalApplications() {
        return $totalApplications = User::whereHas('Announcements')->count();
    }
}
