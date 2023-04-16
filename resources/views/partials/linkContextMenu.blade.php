<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
    <li><a class="dropdown-item" tabindex="-1" href="{{$link->status_url}}">Visit Status Page</a></li>
    <li><a class="dropdown-item" tabindex="-1" role="button" id="linkAddressBtn" onclick="copyAddress('linkAddressBtn')" data-text="{{$link->url}}">Copy Link Address</a></li>
    <li><a class="dropdown-item" tabindex="-1" role="button" id="statusAddressBtn" onclick="copyAddress('statusAddressBtn')" data-text="{{$link->status_url}}">Copy Status Address</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" tabindex="-1" href="{{ route('links.edit', $link->id) }}">Edit Link</a></li>
    <li>
        <form method="POST" action="{{ route('links.destroy', $link->id) }}">
            @csrf
            @method('DELETE')
            <input type="submit" class="dropdown-item" value="Delete Link">
        </form>
    </li>
</ul>
