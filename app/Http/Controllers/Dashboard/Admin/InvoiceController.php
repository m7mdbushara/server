<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::with('FinanceRequest.parentChild')->get();

        return view('dashboard.admin.invoices.index', compact('invoices'));
    }

    public function invoiceDetails(Invoice $invoice)
    {
        $invoice->load('invoiceLines');
        return view('dashboard.admin.invoices.invoice-details', compact('invoice'));
    }
}
