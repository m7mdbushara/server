<?php

namespace App\Services;

use App\Models\FinanceRequest;
use App\Models\Invoice as ModelsInvoice;
use App\Models\InvoiceLine;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Invoice
{
    private FinanceRequest $financeRequest;

    const NUMBER_OF_MONTHS = 10;

    public function __construct(FinanceRequest $financeRequest)
    {
        $this->financeRequest = $financeRequest;
    }

    public function createInvoice() :void
    {
        DB::beginTransaction();

        try {
            $invoice = new ModelsInvoice();

            $invoice->finance_request_id = $this->financeRequest->id;
            $invoice->amount = $this->financeRequest->amount;
            $invoice->number_of_months = self::NUMBER_OF_MONTHS;
            $invoice->save();
            $this->createInvoiceLines($invoice);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    private function createInvoiceLines($invoice) :void
    {
        $monthly_amount = $this->calculateMonthlyAmount($invoice->amount);
        for ($month = 1; $month <= self::NUMBER_OF_MONTHS; $month++) {
            $invoiceLine = new InvoiceLine();
            $invoiceLine->invoice_id = $invoice->id;
            $invoiceLine->date =  Carbon::now()->addMonth($month);
            $invoiceLine->amount = $monthly_amount;
            $invoiceLine->save();
        }
    }

    private function calculateMonthlyAmount($amount) 
    {
        $monthly_amount = $amount / self::NUMBER_OF_MONTHS;
        return $monthly_amount;
    }
}
