<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinkRequest;
use App\Models\Group;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groups = Group::all();
        return view('links.create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LinkRequest $request)
    {
        $formData = $request->all();
        Link::create($formData);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Link $link)
    {
        return view('links.show', compact('link'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link)
    {
        $groups = Group::all();
        return view('links.edit', compact('link', 'groups'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LinkRequest $request, link $link)
    {
        $formData = $request->all();
        $link->update($formData);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        $link->delete();
        return redirect('/');
    }
}
