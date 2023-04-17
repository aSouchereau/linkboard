@extends('layouts.settings')
@section('settingsContent')
    <div class="container">
        <form method="POST" action="{{ route('links.update', $link->id) }}">
            @method('PATCH')
            {{$buttonName = "Save Changes"}}
            {{$formLegend = "Edit Link"}}
            @include('partials.linksForm')
        </form>
    </div>
@endsection
