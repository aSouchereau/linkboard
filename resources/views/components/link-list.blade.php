
    <div>
        <span><i class="bi {{$group->icon}}"></i>{{$group->name}}</span>
        @isset($user)
            @if($user->admin === 1)
{{--                TODO create bootstrap modal for form partials here --}}
{{--                <a href="{}}" class="btn btn-secondary"></a>--}}
            @endif
        @endisset
    </div>

    @if(count($group->links) === 0)
        <div role="button" type="button" class="new-link-button card p-3 mb-2 d-flex flex-row justify-content-between align-items-center" data-bs-toggle="modal" data-bs-target="#createLinkModal">
                <i class="bi bi-plus"></i>
                <span class="col-10">Add New Link</span>
        </div>
    @endif

    @foreach($group->links as $link)
        <div class="card p-2 mb-2 d-flex flex-row justify-content-between align-items-center">
            @isset($link->icon_path)
                <div class="col-2">
                    <img class="w-75" src="{{asset('storage/' . $link->icon_path)}}" alt="Link Icon">
                </div>
            @endisset
            <div class="col-9">
                <span><strong>{{$link->name}}</strong></span>
                <p class="d-block text-truncate mb-0">{{$link->description}}</p>
            </div>
            <div class="dropdown col-1">
                <span role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots-vertical"></i>
                </span>
                @include('partials.linkContextMenu')
            </div>
        </div>
    @endforeach
