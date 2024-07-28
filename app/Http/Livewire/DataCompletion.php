<?php

namespace App\Http\Livewire;

use App\Rules\HomePhoneRule;
use App\Rules\IbnRule;
use App\Rules\PhoneNumber;
use Livewire\Component;

class DataCompletion extends Component
{
    public $home_phone_number;
    public $mobile_number;
    public $email;
    public $company_name;
    public $phone_work;
    public $job_title;
    public $bank_name;
    public $iban = 'SA';
    public $id_expiration_date;
    

    

    protected function rules()
    {
        return [
            'home_phone_number' => ['required', new HomePhoneRule(),'numeric','digits:10'],
            'mobile_number' => ['required',new PhoneNumber(),'numeric','digits:10'],
            'email' => 'required|email',
            'company_name' => 'required',
            'phone_work' => ['required',new HomePhoneRule(),'numeric','digits:10'],
            'job_title' => 'required',
            'bank_name' => 'required',
            'iban' => ['required',new IbnRule(),'digits:29'],
            'id_expiration_date'=>'required',
        ];
    }

    protected function messages()
    {
        return [
            'home_phone_number.required' => __('يجب أدخال رقم الهاتف المنزلي'),
            'home_phone_number.digits' => __('الهاتف المنزلي يجب أن يكون 10 أرقام'),
            'home_phone_number.numeric' => __('الهاتف المنزلي يجب أن يكون رقم'),
            'mobile_number.required' => __('يجب أدخال رقم الجوال'),
            'mobile_number.digits' => __('رقم الجوال يجب أن يكون 10 أرقام'),
            'mobile_number.numeric' => __('رقم الجوال يجب أن يكون رقم'),
            'email.required' => __('يجب أدخال البريد اﻷلكتروني'),
            'email.email' => __('يجب أدخال البريد اﻷلكتروني بشكل صحيح'),
            'company_name.required' => __('يجب أدخال جهة العمل'),
            'phone_work.required' => __('يجب أدخال رقم هاتف العمل'),
            'phone_work.digits' => __('هاتف العمل يجب أن يكون 10 أرقام'),
            'phone_work.numeric' => __('هاتف العمل يجب أن يكون رقم'),
            'job_title.required' => __('يجب أدخال المسمى الوظيفي'),
            'bank_name.required' => __('يجب ادخال أسم البنك'),
            'iban.required' => __('يجب أدخال رقم الايبان'),
            'iban.digits' => __('رقم الايبان يجب أن يكون 29 خانة'),
            'id_expiration_date.required' => __('يجب أدخال تاريخ أنتهاء الهوية')
        ];
    }


    public function render()
    {
        return view('livewire.data-completion');
    }


    public function store()
    {
        $this->validate([
            'home_phone_number' => ['required', new HomePhoneRule(),'numeric','digits:10'],
            'mobile_number' => ['required',new PhoneNumber(),'numeric','digits:10'],
            'email' => 'required|email',
            'company_name' => 'required',
            'phone_work' => ['required',new HomePhoneRule(),'numeric','digits:10'],
            'job_title' => 'required',
            'bank_name' => 'required',
            'iban' =>  ['required',new IbnRule()],
            'id_expiration_date'=>'required',
        ]);


        auth()->guard('parent')->user()->update([
           'id_expiration_date' => $this->id_expiration_date,
         ]);

        auth()->guard('parent')->user()->bankInformation()->create([
            'name' => $this->bank_name,
            'iban' => $this->iban
         ]);
 
        auth()->guard('parent')->user()->contactInformation()->create([
            'home_phone_numbe' => $this->home_phone_number,
            'mobile_number' => $this->mobile_number,
            'email' => $this->email,
         ]);
 
        auth()->guard('parent')->user()->parentAddress()->create([
           'company_name' => $this->company_name,
           'phone_work' => $this->phone_work,
           'job_title' => $this->job_title,
        ]);

        alert()->success(__('تم أضافة البيانات بنجاح'));

        return to_route('parents.profile');
    }


    public function updated($name)
    {
        $this->validateOnly($name, [
            'home_phone_number' => ['required','numeric', new HomePhoneRule(),'digits:10'],
            'mobile_number' => ['required','numeric',new PhoneNumber(),'digits:10'],
            'email' => 'required|email',
            'company_name' => 'required',
            'phone_work' => ['required',new HomePhoneRule(),'numeric','digits:10'],
            'job_title' => 'required',
            'bank_name' => 'required',
            'iban' =>  ['required',new IbnRule()],
            'id_expiration_date'=>'required',
        ]);
    }
}
