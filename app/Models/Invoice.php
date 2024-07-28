<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    public function invoiceLines()
    {
        return $this->hasMany(InvoiceLine::class);
    }

    public function financeRequest()
    {
        return $this->belongsTo(FinanceRequest::class);
    }

    public function getFormtedDate()
    {
        return date('Y-m-d', strtotime($this->created_at));
    }
}
