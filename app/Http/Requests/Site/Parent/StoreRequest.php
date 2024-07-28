<?php

namespace App\Http\Requests\Site\Parent;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'parent_name' => 'required|string',
            'username' => 'required|string|unique:parents,username',
            'nationality' => 'required|string',
            'gender' => 'required|string',
            'password' => 'required|string|confirmed',
            'id_number' => ['required','numeric','digits:10']
        ];
    }


    public function messages()
    {
        return [
            'parent_name.required' => __('أسم ولي الامر مطلوب'),
            'username.required' => __('أسم المستخدم مطلوب'),
            'nationality.required' => __('الجنسية مطلوبة'),
            'gender.required' => __('النوع مطلوب'),
            'password.required' => __('كلمة المرور مطلوبة'),
            'password.confirmed' => __('كلمة المرور غير متطابقة'),
            'id_number.required' => __('رقم الهوية مطلوب'),
            'id_number.digits' => __('رقم الهوية يجب ان يكون 10 أرقام'),
            'id_number.numeric' => __('رقم الهوية يجب أن يكون رقم'),
        ];
    }
}
