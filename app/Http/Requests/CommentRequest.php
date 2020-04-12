<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//au lieu de false
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() //regle de validation de la requete
    {
        $comment_id = $this->comment;
        return [
            //
                   'user_name'=>'required|max:20',
                   'texte'=>'require|max:6500'
        ];
    }



}
