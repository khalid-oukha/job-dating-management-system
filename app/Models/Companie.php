<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companie extends Model
{
    
    use HasFactory;
    protected $table='companies';
    protected $fillable = [
        'name',
        'title',
        'founded_at',
        'address',
        'description',
    ];

    public function Announcements(){
        return $this->hasMany(Announcement::class);
    }
}
