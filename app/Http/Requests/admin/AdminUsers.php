<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminUsers extends FormRequest
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
            'username'=>'required|min:3|max:5',
            'password'=>'required|between:3,5|confirmed',
            'email'=>'email'
        ];
    }

    public function messages()
    {
        return [
            'required'=>':attribute不能为空',
            'max'=>':attribute长度应在3-5之间 ',
            'min'=>':attribute长度应在3-5之间 ',
            'between'=>':attribute长度应在3-5之间',
            'confirmed'=>'两次:attribute不一致',
            'email'=>':attribute格式不正确'
        ];
    }

    public function attributes()
    {
        return [
            'username'=>'用户名',
            'password'=>'密码',
            'email'=>'邮箱',
        ];
    }
    
}
