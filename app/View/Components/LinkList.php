<?php

namespace App\View\Components;

use App\Models\Group;
use Closure;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class LinkList extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public int $groupId
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $group = Group::findOrFail($this->groupId);
        if (Auth::check()) {
            $user = User::findOrFail(Auth::id());
            return view('components.link-list', compact('group', 'user'));
        } else {
            return view('components.link-list', compact('group'));
        }
    }
}
