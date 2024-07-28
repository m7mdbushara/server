<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceRequest extends Model
{
    use HasFactory;

    
    protected $fillable = ['kid_id','status','parent_id','date','amount','description'];

    public function kid()
    {
        return $this->belongsTo(Kid::class);
    }
    public function parentChild()
    {
        return $this->belongsTo(ParentChild::class, 'parent_id');
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class, 'finance_request_id');
    }

    public function getFormtedDate()
    {
        return date('Y-m-d', strtotime($this->created_at));
    }

    public function ScopeAccepted($q)
    {
        $q->where('status', 'accepted');
    }
    public function ScopeRejected($q)
    {
        $q->where('status', 'rejected');
    }

    public function ScopePending($q)
    {
        $q->where('status', 'pending');
    }

    public function getStatus()
    {
        $status = match ($this->status) {
            'accepted' => __('تم الموافقة'),
            'rejected' => __('مرفوض'),
            'pending' => __('في الانتظار')
        };

        return $status;
    }
}
