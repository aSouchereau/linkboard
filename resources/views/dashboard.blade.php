@extends('layouts.master')
@section('content')

    @foreach($groups as $group)
        <x-link-list groupId="{{$group->id}}"></x-link-list>
    @endforeach
@endsection
