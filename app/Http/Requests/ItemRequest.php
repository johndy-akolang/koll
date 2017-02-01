<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;
use App\Item;
use App\User;
use Auth;

class ItemRequest extends Request
{
    /**
    * Determin if the user is authorized to make this request.
    *
    * @return bool
    */
    public function authorize()
    {
        if ($this->user()->can_post()) 
        {
            return true;
        }
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
            'title'     =>  'required|unique:item',
            'title'     => array('Regex:/^[A-Za-z0-9 ]+$/'),
            'price'     =>  'required',
            'condition' =>  'required',
            'category' =>  'required',
            'description' => 'required',
            'images'    =>  'required|mimes:jpeg,jpg,png|max:1000',
            'province'  =>  'required',
            'city'      =>  'required',
            'mobile'    =>  'required|numeric',
        ];

        return $rules;
    }
}
