<?php

namespace App\Http\Controllers;

use App\Models\User;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        return auth()->user()->following()->toggle($user->profile);
    }
}
