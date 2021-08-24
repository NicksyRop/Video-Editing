<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class UserProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'avatar' => 'required|image',
            'bio' => 'required',
            'nationality' => 'required',
            'skill' => 'required',
            
        ];
    }
}
