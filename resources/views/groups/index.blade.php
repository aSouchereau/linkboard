@extends('layouts.master')
@section('content')
    <div class="container">
        <h1>{{$user->name}}'s Groups</h1>
        <ul class="list-group mb-3">
            <li class="list-group-item list-group-item-secondary row d-flex">
                <span class="col-2">Group Name</span>
                <span class="col-2">Icon</span>
                <span class="col-2">Link Count</span>
                <span class="col-5">User</span>
                <span class="col-1">Actions</span>
            </li>
            @foreach($userGroups as $group)
                <li class="list-group-item row d-flex">
                    <div class="col-2 overflow-hidden">
                        <span>{{$group->name}}</span>
                    </div>
                    <div class="col-2 overflow-hidden">
                        <span class="text-truncate">{{$group->icon}}</span>
                    </div>
                    <div class="col-2 overflow-hidden">
                        <span class="text-truncate">{{count($group->links)}} links</span>
                    </div>
                    <div class="col-5 overflow-hidden">
                        <span class="text-truncate">{{$group->user->name}}</span>
                    </div>
                    <div class="col-1 d-flex flex-row justify-content-around align-items-center">
                        <a href="{{route('groups.edit', $group->id)}}">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <form method="POST" action="{{ route('groups.destroy', $group->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </form>

                    </div>
                </li>
            @endforeach
        </ul>

        @if($user->admin === 1)
            <h1>Default Groups</h1>
            <ul class="list-group mb-3">
                <li class="list-group-item list-group-item-secondary row d-flex">
                    <span class="col-2">Group Name</span>
                    <span class="col-2">Icon</span>
                    <span class="col-2">Link Count</span>
                    <span class="col-5">User</span>
                    <span class="col-1">Actions</span>
                </li>
                @foreach($defaultGroups as $group)
                    <li class="list-group-item row d-flex">
                        <div class="col-2 overflow-hidden">
                            <span>{{$group->name}}</span>
                        </div>
                        <div class="col-2 overflow-hidden">
                            <span class="text-truncate">{{$group->icon}}</span>
                        </div>
                        <div class="col-2 overflow-hidden">
                            <span class="text-truncate">{{count($group->links)}} links</span>
                        </div>
                        <div class="col-5 overflow-hidden">
                            <span class="text-truncate">{{$group->user->name}}</span>
                        </div>
                        <div class="col-1 d-flex flex-row justify-content-around align-items-center">
                            <a href="{{route('groups.edit', $group->id)}}">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form method="POST" action="{{ route('groups.destroy', $group->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </form>

                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
