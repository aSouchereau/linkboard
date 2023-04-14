@extends('layouts.master')
@section('content')

    @foreach($groups as $group)
        <x-link-list groupId="{{$group->id}}"></x-link-list>
    @endforeach

    <section class="container-fluid">
        <h2>User Groups</h2>
    @foreach($userGroups as $group)
        <x-link-list groupId="{{$group->id}}"></x-link-list>
    @endforeach
    </section>
@endsection
