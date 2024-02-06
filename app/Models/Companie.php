<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Companie extends Model
{
    use SoftDeletes;
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

    public static function boot(){
        parent::boot();
        static::deleting(function(Companie $companie){
            $companie->Announcements()->delete();
        });
    }
}
