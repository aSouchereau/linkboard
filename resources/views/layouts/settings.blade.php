@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-2 bg-white shadow-sm min-vh-100">
            <nav class="mx-2 mt-4">
                <ul class="navbar-nav d-flex flex-column gap-3 ms-auto">
                    <li class="nav-item">
                        <a href="{{route('home')}}" class="nav-link">Settings Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('links.index')}}" class="nav-link">Manage Links</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('groups.index')}}" class="nav-link">Manage Groups</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Manage Shared Groups</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('customization.index')}}" class="nav-link">Customization</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-10">
            @yield('settingsContent')
        </div>
    </div>
@endsection
