<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceLine extends Model
{
    use HasFactory;

    protected $fillable = ['invoice_id','date','amount','status','payment_date'];

    public function getFormatedDate()
    {
        return date('Y-m-d', strtotime($this->date));
    }

    public function getPayDate()
    {
        if ($this->payment_date == null) {
            return "------------";
        }
        return $this->payment_date;
    }

    public function getPaymentStatus()
    {
        if ($this->status == "paid") {
            return  __('تم الدفع');
        }
        return __('لم يتم الدفع');
    }
}
