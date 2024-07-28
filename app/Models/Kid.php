<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    use HasFactory;

    protected $fillable = ['name','id_number','birth_date','gender','school_name','level','nationality','parent_id'];

    public function parentChild()
    {
        return $this->belongsTo(ParentChild::class,'parent_id');
    }

    public function financeRequest()
    {
        return $this->hasOne(FinanceRequest::class);
    }
}
