@extends('layouts.settings')
@section('settingsContent')
    <div class="container">
        <form method="POST" action="{{ action([App\Http\Controllers\LinkController::class, 'store']) }}">
            @php( $formLegend = "Create Link")
            @include('partials.linksForm')
            <button type="submit" class="btn btn-primary">Add Link</button>
        </form>
        @include('partials.formErrors')
    </div>
@endsection
