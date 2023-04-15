<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $groups = Group::all();
        if (Auth::check()) {
            $user = User::findOrFail(Auth::id());
            $userGroups = $user->groups;
            return view('dashboard', compact('groups', 'userGroups'));
        } else {
            return view('dashboard', compact('groups'));
        }
    }
}
