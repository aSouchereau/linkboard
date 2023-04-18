<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinkRequest;
use App\Models\Group;
use App\Models\Link;
use App\Models\User;
use Illuminate\Http\Request;
use AshAllenDesign\FaviconFetcher\Facades\Favicon;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{
    public function index() {
        $links = Link::paginate(10);
        return view('links.index', compact('links'));
    }

    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::findOrFail(Auth::id());
        if ($user->admin === 1) {
            $groups = Group::all();
        } else {
            $groups = Group::where('user_id', $user->id)->get();
        }
        return view('links.create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LinkRequest $request)
    {
        $group = Group::findOrFail($request->group_id);
        $link = new Link($request->all());
        $link->group()->associate($group)->save();
        $link->icon_path = Favicon::fetchAll($request->url)->largest()->store('favicons', 'public');
        $link->save();


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
        $user = User::findOrFail(Auth::id());
        if ($user->admin === 1) {
            $groups = Group::all();
        } else {
            $groups = Group::where('user_id', $user->id);
        }
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
