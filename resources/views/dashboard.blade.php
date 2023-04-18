@extends('layouts.master')
@section('content')
    @isset($user)
        <section class="container">
            <h2>Your Groups</h2>
            <button class="btn btn-sm btn-secondary" tabindex="-1" data-bs-toggle="modal" data-bs-target="#createGroupModal">Add Group</button>
            <div class="row">
                @foreach($groups as $group)
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
            @foreach($defaultGroups as $group)
                <div class="mx-4 mb-5 col-3">
                    <x-link-list groupId="{{$group->id}}"></x-link-list>
                </div>

            @endforeach
        </div>
    </section>

    @isset($user)
    <div class="modal fade" id="createLinkModal" tabindex="-1" aria-labelledby="createLinkModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createLinkModalLabel">Create Link</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ action([App\Http\Controllers\LinkController::class, 'store']) }}">
                        @php( $formLegend = "Create Link")
                        @include('partials.linksForm')
                        <button type="submit" class="btn btn-primary">Add Link</button>
                    </form>
                    @include('partials.formErrors')
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="createGroupModal" tabindex="-1" aria-labelledby="createGroupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createGroupModalLabel">Create Group</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ action([App\Http\Controllers\GroupController::class, 'store']) }}">
                        @php( $formLegend = "Create Group")
                        @include('partials.groupsForm')
                        <button type="submit" class="btn btn-primary">Add Group</button>
                    </form>
                    @include('partials.formErrors')
                </div>
            </div>
        </div>
    </div>
    @endisset
@endsection
