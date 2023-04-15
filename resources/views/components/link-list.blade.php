<div class="col-3 mx-4 mb-5">
    <div><span>{{$group->icon}}</span>{{$group->name}}</div>
    @foreach($group->links as $link)
        <div class="card p-2 mb-2 d-flex flex-row justify-content-between align-items-center">
            <div class="col-2 bg-black">

            </div>
            <div class="col-9">
                <span><strong>{{$link->name}}</strong></span>
                <p class="d-block text-truncate mb-0">{{$link->description}}</p>
            </div>
            <i class="bi bi-three-dots-vertical col-1"></i>
        </div>
    @endforeach
</div>
