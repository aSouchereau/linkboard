@extends('layouts.settings')
@section('settingsContent')
    <div class="container">
        <form method="POST" action="{{ route('links.update', $link->id) }}">
            @method('PATCH')
            {{$formLegend = "Edit Link"}}
            @include('partials.linksForm')
            <button type="submit" class="btn btn-primary">Add Link</button>
        </form>
        @include('partials.formErrors')
    </div>
@endsection
