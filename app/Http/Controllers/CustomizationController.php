<?php

namespace App\Http\Controllers;

use App\Http\Requests\BackgroundImageRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomizationController extends Controller
{
    /**
     *
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function index() {
        return view('users.customization');
    }

    /**
     * @param BackgroundImageRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function updateBackgroundImage(BackgroundImageRequest $request) {
        $user = User::findOrFail(Auth::id());
        if($user && $request->hasFile('background_image') && $request->file('background_image')->isValid()) {
            $path = $request->background_image->storePublicly('users', 'public');
            $user->background_image = $path;
            $user->save();
        }
        return redirect('/settings/customization');
    }

    public function removeBackgroundImage() {
        $user = User::findOrFail(Auth::id());
        if ($user) {
            $user->background_image = "";
            $user->save();
        }
        return redirect('/settings/customization');
    }
}
