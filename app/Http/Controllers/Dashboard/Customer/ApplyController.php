<?php

namespace App\Http\Controllers\Dashboard\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Apply\StoreRequest;
use App\Models\FinanceRequest;
use App\Models\Kid;
use Illuminate\Http\Request;
use Illuminate\Support\Benchmark;

class ApplyController extends Controller
{
    public function apply(Kid $kid)
    {
        //    Benchmark::dd(fn() => $kid->load('parentChild.contactInformation','parentChild.parentAddress','parentChild.bankInformation'));
        $kid = $kid->load('parentChild.contactInformation', 'parentChild.parentAddress', 'parentChild.bankInformation');
        
        return view('dashboard.customer.apply.apply', compact('kid'));
    }

    public function sendApply(StoreRequest $request)
    {
        if (auth()->guard('parent')->user()->bankInformation()->exists()) {
            FinanceRequest::create([
                  'kid_id' => $request->kid_id,
                  'parent_id' => auth()->guard('parent')->id(),
                  'amount' => $request->amount,
                  'description' => $request->description
              ]);
    
            alert()->success(__('تم تقديم الطلب بنجاح'));
    
            return back();
        } else {
            alert()->error(__('يجب أستكمال بياناتك'));
            return to_route('additional-information.create');
        }
    }
}
