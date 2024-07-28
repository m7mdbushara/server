<?php

namespace App\Http\Requests\Dashboard\Kid;

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
            'name' => 'required',
            'id_number' => ['required','numeric','digits:10'],
            'birth_date' => 'required',
            'gender' => 'required',
            'school_name' => 'required', 
            'level' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name' => __('يجب أدخال أسم الطفل'),
            'id_number.required' => __('يجب أدخال رقم الهوية'),
            'birth_date.required' => __('يجب أدخال تاريخ الميلاد'),
            'gender.required' => __('يجب أختيار النوع'),
            'school_name.required' => __('يجب أدخال أسم المدرسة'),
            'level.required' => __('يجب تحديد المستوى'),
            'id_number.digits' => __('رقم الهوية يجب ان يكون 10 أرقام'),
            'id_number.numeric' => __('رقم الهوية يجب أن يكون رقم'),
        ];
    }
}
