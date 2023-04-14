<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $user = User::findOrFail(Auth::id());
        $groups = Group::all();
        $userGroups = $user->groups;
        return view('dashboard', compact('groups', 'userGroups'));
    }
}
