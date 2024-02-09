<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $announcements = Announcement::all();
        $recommendedAnnouncement = [];
        if(auth()->user()){
            $recommendedAnnouncement = $this->getRecommendedAnnouncement();
        }
        return view('welcome', compact('announcements', 'recommendedAnnouncement'));
    }

    // public static function checkForMatch($userId, $announcementId)
    // {
    //     $numberOfMatchedSkills = 0;

    //     $user = User::findOrfail($userId);
    //     $userSkills = $user->skills;

    //     $announcement = Announcement::findOrfail($announcementId);
    //     $announcementSkills = $announcement->skills;

    //     foreach ($userSkills as $skill_user)
    //     {

    //         foreach ($announcementSkills as $skill_announcement)
    //         {
    //             if ($skill_user->skill_id == $skill_announcement->skill_id)
    //             {
    //                 $numberOfMatchedSkills++;
    //             }
    //         }
    //     }
    //     return $numberOfMatchedSkills;
    // }

    private function getRecommendedAnnouncement(){
        $user = auth()->user();
        $userSkills = $user->skills;
        $recommendedAnnouncement = [];
        $announcements = Announcement::all();

        foreach ($announcements as $announcement) {
            $numberOfMatchedSkills = 0;
            $size = count($announcement->skills);
            foreach ($userSkills as $skill_user) {
                foreach ($announcement->skills as $skill_announcement) {
                    if ($skill_user->id == $skill_announcement->id) {
                        $numberOfMatchedSkills++;
                        break;
                    }

                }
            }
            if ($numberOfMatchedSkills > $size/2) {
                $recommendedAnnouncement[] = $announcement;
            }
        }
        return $recommendedAnnouncement;
    }


}
