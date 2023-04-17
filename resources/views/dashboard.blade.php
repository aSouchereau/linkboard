@extends('layouts.master')
@section('content')
    @isset($user)
        <section class="container">
            <h2>Your Groups</h2>
            <div class="row">
                @foreach($userGroups as $group)
                    <div class="mx-4 mb-5 col-3">
                        <x-link-list groupId="{{$group->id}}"></x-link-list>
                    </div>
                @endforeach
            </div>
        </section>
    @endif
    <section class="container">
        <h2>Default Groups</h2>
        <div class="row">
            @foreach($groups as $group)
                <div class="mx-4 mb-5 col-3">
                    <x-link-list groupId="{{$group->id}}"></x-link-list>
                </div>

            @endforeach
        </div>
    </section>

@endsection
