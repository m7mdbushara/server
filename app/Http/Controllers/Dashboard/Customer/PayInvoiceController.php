<?php

namespace App\Http\Controllers\Dashboard\Customer;

use App\Http\Controllers\Controller;
use App\Models\InvoiceLine;
use Illuminate\Http\Request;

class PayInvoiceController extends Controller
{
    public function pay(Request $request)
    {
        InvoiceLine::find($request->invoice_line_id)->update([
            'payment_date' => date('Y-m-d'),
            'status' => 'paid',
        ]);

        alert()->success(__('تم الدفع بنجاح'));

        return back();
    }
}
