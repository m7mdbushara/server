<?php

namespace App\Http\Controllers\Dashboard\Customer;

use App\Http\Controllers\Controller;
use App\Models\FinanceRequest;
use Illuminate\Http\Request;

class FinanceRequestController extends Controller
{
    public function index()
    {
        $parent = auth()->guard('parent')->user()->load('financeRequests.kid');

     

        return view('dashboard.customer.finance-request.index', compact('parent'));
    }
}
