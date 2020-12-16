<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        return '/storage/' . (($this->image) ? $this->image : 'profile/a6m8GJcPOAjDUGOZceQwlrjSDhjY6fmxxWFLLT5J.png');
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
