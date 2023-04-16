@csrf
<fieldset>
    <legend>{{$formLegend}}</legend>
    <div class="mb-3">
        <label for="name" class="form-label">Link Name</label>
        <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($link->name) ? $link->name : null) }}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" id="description" name="description" class="form-control" value="{{ old('description', isset($link->description) ? $link->description : null) }}">
    </div>
    <div class="mb-3">
        <label for="url" class="form-label">Destination URL</label>
        <input type="text" id="url" name="url" class="form-control" value="{{ old('url', isset($link->url) ? $link->url : null) }}">
    </div>
    <div class="mb-3">
        <label for="status_url" class="form-label">Service Status URL</label>
        <input type="text" id="status_url" name="status_url" class="form-control" value="{{ old('status_url', isset($link->status_url) ? $link->status_url : null) }}">
    </div>
    <div class="visually-hidden">
        <label for="user_id"></label>
        <input type="text" id="user_id" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}" hidden>
    </div>
    @isset($currentGroup)
        <div class="visually-hidden">
            <label for="group_id"></label>
            <input type="text" id="group_id" name="group_id" value="{{$currentGroup->id}}" hidden>
        </div>
    @else
        <div class="mb-3">
            <label for="group_id">Group</label>
            <select name="group_id" id="group_id">
                <option value="" selected disabled hidden>Select Group</option>
                @foreach($groups as $group)
                    <option value="{{$group->id}}" {{$link->group_id === $group->id ? "selected" : ""}}>{{$group->name}}</option>
                @endforeach
            </select>
        </div>
    @endisset
</fieldset>
