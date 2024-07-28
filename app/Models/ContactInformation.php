<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInformation extends Model
{
    use HasFactory;

    protected $fillable = ['parent_id','home_phone_numbe','mobile_number','email'];

    public function parentChild()
    {
        return $this->belongsTo(ParentChild::class);
    }
}
