<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveAllRequest extends FormRequest
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
        return [

            'metaTitle' => 'required',
            'metaDescription' => 'required',
            'pageSlug' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
            'title' => 'required',
            'subtitle' => 'required',
            'shortDescription' => 'required',
            'largDescription' => 'required',
            'authorNews' => 'required',
            'imageTitle' => 'required',
            'imageSlug' => 'required',
            'imageAuthor'=>'required',
            'status' => 'required',
            'homeMain' => 'required',
            'newsMain'=> 'required',
            'categorie_id'=>'required'


        ];




    }

public function messages()
{
    return [
        'title.required'=> 'El proyectito necesita un titulo'
    ];
}

}
