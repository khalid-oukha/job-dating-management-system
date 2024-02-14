<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Announcement extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='announcements';

    protected $fillable=[
        "title",
        'content',
        'user_id',
        'companie_id',
    ];
    public function companie(){
        return $this->belongsTo(Companie::class,'companie_id');
    }

    public function skills(){
        return $this->belongsToMany(Skill::class,'announcement_skills');
    }

    public function user(){
        return $this->belongsToMany(User::class,'announcement_user');
    }

}
