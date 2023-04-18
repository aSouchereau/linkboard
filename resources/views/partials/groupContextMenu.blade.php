<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
    <li><a class="dropdown-item" tabindex="-1" data-bs-toggle="modal" data-bs-target="#createLinkModal" role="button">Create Link</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" tabindex="-1" href="{{ route('groups.edit', $group->id) }}">Edit Group</a></li>
    <li>
        <form method="POST" action="{{ route('groups.destroy', $group->id) }}">
            @csrf
            @method('DELETE')
            <input type="submit" class="dropdown-item" value="Delete Group">
        </form>
    </li>
</ul>
