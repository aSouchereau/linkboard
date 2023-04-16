@extends('layouts.master')
@section('content')
    <div class="container">
        <form method="POST" action="{{ action([App\Http\Controllers\LinkController::class, 'update']) }}">
            @method('PATCH')
            {{$buttonName = "Save Changes"}}
            {{$formLegend = "Edit Link"}}
            @include('partials.linksForm')
        </form>
    </div>
@endsection
