@extends('layouts.master')
@section('content')
    <div class="container">
        <h1>All Links</h1>
        <ul class="list-group mb-3">
            <li class="list-group-item list-group-item-secondary row d-flex">
                <span class="col-2">Link Name</span>
                <span class="col-3">Description</span>
                <span class="col-2">Destination URL</span>
                <span class="col-3">Status URL</span>
                <span class="col-1">Group</span>
                <span class="col-1">Actions</span>
            </li>
            @foreach($links as $link)
                <li class="list-group-item row d-flex">
                    <div class="col-2 overflow-hidden">
                        <span>{{$link->name}}</span>
                    </div>
                    <div class="col-3 overflow-hidden">
                        <span class="text-truncate">{{$link->description}}</span>
                    </div>
                    <div class="col-2 overflow-hidden">
                        <span class="text-truncate">{{$link->url}}</span>
                    </div>
                    <div class="col-2 overflow-hidden">
                        <span class="text-truncate">{{$link->status_url}}</span>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-1 overflow-hidden">
                        <span>{{$link->group->name}}</span>
                    </div>
                    <div class="col-1 d-flex flex-row justify-content-around align-items-center">
                        <a href="{{route('links.edit', $link->id)}}">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <form method="POST" action="{{ route('links.destroy', $link->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </form>

                    </div>
                </li>
            @endforeach
        </ul>
        {{$links->links()}}
    </div>
@endsection
