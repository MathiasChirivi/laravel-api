<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "image",
        "title",
        "description",
        "repository",
        "tipe_id",
    ];

    public function tipe(){
        return $this->belongsTo(Tipe::class);
    }

    public function technologies(){
        return $this->belongsToMany(Technology::class);
    }
}
