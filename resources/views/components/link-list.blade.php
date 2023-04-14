<div>
    <div><span>{{$group->icon}}</span>{{$group->name}}</div>
    @foreach($group->links as $link)
        <div>
            <span>
                {{$link->name}}
            </span>
        </div>
    @endforeach
</div>
