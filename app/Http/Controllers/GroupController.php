<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{

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
    public function store(Request $request)
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
        $group = Group::findOrFail($group);
        return view('groups.show', compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        $group = Group::findOrFail($group);
        return view('groups.form', 'group');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, group $group)
    {
        $formData = $request->all();
        $group = Group::findOrFail($group);
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
