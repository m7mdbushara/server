<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\FinanceRequest;
use App\Services\Invoice;
use Illuminate\Http\Request;

class FinanceRequestController extends Controller
{
    public function index()
    {
        $financeRequests = FinanceRequest::with('kid', 'parentChild')->pending()->get();

        return view('dashboard.admin.finance-request.index', compact('financeRequests'));
    }
 


    public function acceptedFinanceRequest(FinanceRequest $financeRequest)
    {
        $financeRequest->update([
            'status' => 'accepted',
        ]);

        $invoice = new Invoice($financeRequest);
        $invoice->createInvoice();

        alert()->success(__('تم قبول طلب التمويل'));

        return back();
    }

    public function rejectedFinanceRequest(FinanceRequest $financeRequest)
    {
        $financeRequest->update([
            'status' => 'rejected',
        ]);

        alert()->success(__('تم رفض طلب التمويل'));

        return back();
    }

    public function getAccepetdFinanceRequests()
    {
        $financeRequests = FinanceRequest::with('kid', 'parentChild')->accepted()->get();

        return view('dashboard.admin.finance-request.accepetd-requests', compact('financeRequests'));
    }

    public function getRejectedFinanceRequests()
    {
        $financeRequests = FinanceRequest::with('kid', 'parentChild')->rejected()->get();

        return view('dashboard.admin.finance-request.rejected-requests', compact('financeRequests'));
    }


    public function getFinanceRequestInvoice(FinanceRequest $financeRequest)
    {
        $financeRequest = $financeRequest->load('invoice.invoiceLines');

        return view('dashboard.admin.finance-request.invoice', compact('financeRequest'));
    }

    public function financeRequestDetails(FinanceRequest $financeRequest)
    {
        $financeRequest->load('parentChild', 'kid');

        return view('dashboard.admin.finance-request.financeRequest-details', compact('financeRequest'));
    }
}
