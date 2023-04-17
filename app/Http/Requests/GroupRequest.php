<?php

namespace App\Http\Requests;

use App\Models\Group;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class GroupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $group = Group::find($this->group->id);
        $user = User::findOrFail(Auth::id());
        if ($user->id === $group->user_id || $user->admin === 1) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|unique:groups|max:20'
        ];
    }
}
