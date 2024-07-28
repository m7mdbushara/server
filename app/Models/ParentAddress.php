<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentAddress extends Model
{
    use HasFactory;

    protected $fillable = ['parent_id','company_name','job_title','phone_work'];

    public function parentChild()
    {
        return $this->belongsTo(ParentChild::class);
    }
}
