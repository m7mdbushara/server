<?php

namespace App\Http\Requests\Dashboard\Apply;

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
            'kid_id' => 'required|exists:kids,id',
            'description' => 'required',
            'amount' => 'required|numeric'
        ];
    }


    public function messages()
    {
        return [
            'description.required' => __('يجب أدخال وصف للطلب'),
            'amount.required' => __('يجب أدخال المبلغ المراد تقسيطه'),
        ];
    }
}
