@foreach($groups as $group)
    <h1>{{$group->name}}</h1>
    <p>{{$group->icon}}</p>
@endforeach