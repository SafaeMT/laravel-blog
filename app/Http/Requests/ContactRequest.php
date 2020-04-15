<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;


class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'message' => ['min:100']
        ];

        if (!Auth::check()) {
            $rules['name'] = ['bail', 'string', 'min:3', 'max:255']; 
            $rules['mail'] = ['bail', 'string', 'min:3', 'max:255'];
        }
        
        return $rules;
    }
}
