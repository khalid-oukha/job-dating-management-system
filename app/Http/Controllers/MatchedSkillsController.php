<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\User;
use Illuminate\Http\Request;

class MatchedSkillsController extends Controller
{
    public static function checkForMatch($userId, $announcementId)
    {
        $numberOfMatchedSkills = 0;

        $user = User::findOrfail($userId);
        $userSkills = $user->skills;
        $announcement = Announcement::findOrfail($announcementId);
        $announcementSkills = $announcement->skills;
        foreach ($userSkills as $skill_user) {

            foreach ($announcementSkills as $skill_announcement)
            {
                if ($skill_user->skill_id == $skill_announcement->skill_id)
                {
                    $numberOfMatchedSkills++;
                }
            }
        }
        return $numberOfMatchedSkills;
    }
}
