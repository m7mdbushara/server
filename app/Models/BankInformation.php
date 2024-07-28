<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankInformation extends Model
{
    use HasFactory;

    protected $fillable = ['name','iban','parent_id'];

    public function parentChild()
    {
        return $this->belongsTo(ParentChild::class);
    }
}
