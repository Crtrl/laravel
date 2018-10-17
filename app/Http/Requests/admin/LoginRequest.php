<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'username' => 'required',
            'password' => 'required',
            'captcha' => 'bail|required|captcha'
        ];
    }

    //自定义错误信息
    public function messages()
    {
        return [
            'username.required' => '用户名不能为空',
            'password.required'  => '密码不能为空',
            'captcha.required'  => '验证码不能为空',
            'captcha.captcha'  => '验证码错误',
        ];
    }
}
