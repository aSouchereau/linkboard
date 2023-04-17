@extends('layouts.settings')
@section('settingsContent')
    <div class="container">
        <form method="POST" action="{{ action([App\Http\Controllers\GroupController::class, 'store']) }}">
            @php( $formLegend = "Create Group")
            @include('partials.groupsForm')
            <button type="submit" class="btn btn-primary">Create Group</button>
        </form>
        @include('partials.formErrors')
    </div>
@endsection
