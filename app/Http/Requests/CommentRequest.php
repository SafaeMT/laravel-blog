<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use App\Comment;

class CommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//au lieu de false car l'authentification n'est pas gérée

        // $comment = Comment::find($this->route('comment'));

        // return $comment && $this->user()->can('update', $comment);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() //regle de validation de la requete
    {
        $rules = ['body' => 'required|max:6500'];
        
        if (!Auth::check()) {
            $rules['user_name'] = 'required|max:255';
            $rules['email'] = 'required|max:255';
        }

        return $rules;
    }



}
