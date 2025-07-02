<?php

namespace App\Http\Requests\Auth;

use App\Foundations\BaseRequest;

class PasswordRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "new_password"              => "required|string|min:6",
            "new_password_confirmation" => "required|string|min:6|same:new_password",

            "old_password"              => ["required", "string", function ($attribute, $value, $fail) {
                if (!\Hash::check($value, auth()->user()->password)) {
                    $fail('The provided password was incorrect.');
                }
            }],
        ];
    }
}
