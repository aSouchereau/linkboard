@extends('layouts.settings')
@section('settingsContent')
    <div class="container">
        <form method="POST" action="{{ route('groups.update', $group->id) }}">
            @method('PATCH')
            {{$formLegend = "Edit Group"}}
            @include('partials.groupsForm')
            <button type="submit" class="btn btn-primary">Update Group</button>
        </form>
        @include('partials.formErrors')
    </div>
@endsection
