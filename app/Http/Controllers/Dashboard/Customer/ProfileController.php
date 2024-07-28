<?php

namespace App\Http\Controllers\Dashboard\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $parent = auth()->guard('parent')->user()->load('kids', 'BankInformation', 'ContactInformation', 'ParentAddress');

        return  view('dashboard.customer.profile', compact('parent'));
    }
}
