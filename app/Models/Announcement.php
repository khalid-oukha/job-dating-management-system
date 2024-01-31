<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $table='announcements';

    protected $fillable=[
        "title",
        'content',
        'user_id',
        'companie_id',
    ];
    public function Companie(){
        return $this->belongsTo(Companie::class,'company_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
