<div class="col-3 mx-4 mb-5">
    <div><span>{{$group->icon}}</span>{{$group->name}}</div>
    @foreach($group->links as $link)
        <div class="card p-2 mb-2 d-flex flex-row justify-content-between align-items-center">
            @isset($link->icon_path)
                <div class="col-2">
                    <img src="{{asset('storage/' . $link->icon_path)}}" alt="Link Icon">
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
</div>
