<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $groups = Group::where('default', 1)->get();
        if (Auth::check()) {
            $user = User::findOrFail(Auth::id());
            $userGroups = Group::where('user_id', $user->id)->where('default', 0)->get();
            return view('dashboard', compact('user','groups', 'userGroups'));
        } else {
            return view('dashboard', compact('groups'));
        }
    }
}
