@extends('layouts.master')
@section('content')

    <section>
        <div class="container d-flex flex-wrap justify-content-center">
            @foreach($groups as $group)
                <x-link-list groupId="{{$group->id}}"></x-link-list>
            @endforeach
        </div>
    </section>


    @if(\Illuminate\Support\Facades\Auth::check())
        <section>
            <h2>User Groups</h2>
        @foreach($userGroups as $group)
            <x-link-list groupId="{{$group->id}}"></x-link-list>
        @endforeach
        </section>
    @endif
@endsection
