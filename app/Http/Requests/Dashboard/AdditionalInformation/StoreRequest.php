<?php

namespace App\Http\Requests\Dashboard\AdditionalInformation;

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
            'home_phone_number' => 'required',
            'mobile_number' => 'required',
            'email' => 'required|email',
            'company_name' => 'required',
            'phone_work' => 'required',
            'job_title' => 'required',
            'bank_name' => 'required',
            'iban' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'home_phone_number.required' => __('يجب أدخال رقم الهاتف المنزلي'),
            'mobile_number.required' => __('يجب أدخال رقم الجوال'),
            'email.required' => __('يجب أدخال البريد اﻷلكتروني'),
            'email.email' => __('يجب أدخال البريد اﻷلكتروني بشكل صحيح'),
            'company_name.required' => __('يجب أدخال جهة العمل'),
            'phone_work.required' => __('يجب أدخال رقم هاتف العمل'),
            'job_title.required' => __('يجب أدخال المسمى الوظيفي'),
            'bank_name.required' => __('يجب ادخال أسم البنك'),
            'iban.required' => __('يجب أدخال رقم الايبان')
        ];
    }
}
