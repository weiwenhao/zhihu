<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title','content','is_show_user','user_id'];

    public function topics()
    {
        return $this->belongsToMany(Topic::class)->withTimestamps();;
    }
}