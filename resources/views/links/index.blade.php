@foreach($links as $link)
    <h1>{{$link->name}}</h1>
    <p>{{$link->description}}</p>
    <a href="{{$link->url}}">URL</a>
    <a href="{{$link->status_url}}">STATUS</a>
@endforeach
