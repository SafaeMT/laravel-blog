<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
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
        return [
            'user_name' => 'required|max:255',
            'email' => 'required|max:255',
            'body' => 'required|max:6500'
        ];
    }



}
