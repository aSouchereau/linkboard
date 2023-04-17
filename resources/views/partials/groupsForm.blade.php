@csrf
<fieldset>
    <legend>{{$formLegend}}</legend>
    <div class="mb-3">
        <label for="name" class="form-label">Group Name</label>
        <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($group->name) ? $group->name : null) }}">
    </div>
    <div class="mb-3">
        <label for="icon" class="form-label">Icon</label>
        <input type="text" id="icon" name="icon" class="form-control" value="{{ old('icon', isset($group->icon) ? $group->icon : null) }}" aria-describedby="iconHelp">
        <small id="iconHelp" class="form-text text-muted">Choose any icon from <a href="https://icons.getbootstrap.com/">Bootstrap.</a></small>
    </div>
    @if($user->admin)
        <div class="mb-3">
            <label for="default" class="form-check-label">Group is public</label>
            <input type="checkbox" id="default" name="default" class="form-check-input" value="1" {{ old('default') ? 'checked="checked"' : '' }}>
        </div>
    @endif
    <div class="visually-hidden">
        <label for="user_id"></label>
        <input type="text" id="user_id" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}" hidden>
    </div>
</fieldset>
