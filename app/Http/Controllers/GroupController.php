<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupRequest;
use App\Models\Group;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['show']]);
    }

    public function index() {
        $user = User::findOrFail(Auth::id());
        $userGroups = $user->groups;
        if ($user->admin === 1) {
            $defaultGroups = Group::where('default', 1)->get();
            return view('groups.index', compact('userGroups', 'user',  'defaultGroups'));
        } else {
            return view('groups.index', compact('userGroups', 'user'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groups.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GroupRequest $request)
    {
        $formData = $request->all();
        Group::create($formData);
        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        return view('groups.show', compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        return view('groups.form', 'group');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GroupRequest $request, group $group)
    {
        $formData = $request->all();
        $group->update($formData);

        return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        $group->delete();

        return redirect('dashboard');
    }
}
