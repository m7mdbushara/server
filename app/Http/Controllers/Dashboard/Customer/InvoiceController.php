<?php

namespace App\Http\Controllers\Dashboard\Customer;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::whereHas('financeRequest', function ($q) {
            return $q->where('parent_id', auth()->guard('parent')->id());
        })->with('financeRequest.parentChild')->get();

        return view('dashboard.customer.invoices.index', compact('invoices'));
    }

    public function invoiceDetails(Invoice $invoice)
    {
        $invoice->load('invoiceLines');
        return view('dashboard.customer.invoices.invoice-details', compact('invoice'));
    }
}
