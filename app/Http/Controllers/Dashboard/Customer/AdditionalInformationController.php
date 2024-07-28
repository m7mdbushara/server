<?php

namespace App\Http\Controllers\Dashboard\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\AdditionalInformation\StoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdditionalInformationController extends Controller
{
    public function create()
    {
        return view('dashboard.customer.additional-information.livewireData');
    }


    public function store(StoreRequest $request)
    {
        auth()->guard('parent')->user()->bankInformation()->create([
           'name' => $request->bank_name,
           'iban' => $request->iban
        ]);

        auth()->guard('parent')->user()->contactInformation()->create([
            'home_phone_numbe' => $request->home_phone_number,
            'mobile_number' => $request->mobile_number,
            'email' => $request->email,
         ]);

        auth()->guard('parent')->user()->parentAddress()->create([
           'company_name' => $request->company_name,
           'phone_work' => $request->phone_work,
           'job_title' => $request->job_title,
        ]);

        alert()->success(__('تم أضافة البيانات بنجاح'));

        return to_route('parents.profile');
    }


    public function edit()
    {
        $parent = auth()->guard('parent')->user()->load('bankInformation', 'contactInformation', 'parentAddress');

        return view('dashboard.customer.additional-information.update', compact('parent'));
    }
}
