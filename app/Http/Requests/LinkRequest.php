<?php

namespace App\Http\Requests;

use App\Models\Link;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class LinkRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $link = Link::find($this->link->id);
        $user = User::findOrFail(Auth::id());
        if ($user->id === $link->user_id || $user->admin === 1) {
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
            'name' => 'required|max:50',
            'description' => 'nullable|max:255',
            'url' => 'required|active_url',
            'status_url' => 'nullable|active_url',
        ];
    }
}
