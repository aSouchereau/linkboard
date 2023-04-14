<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $groups = Group::all();
        return view('dashboard', compact('groups'));
    }
}
