<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ParentChild extends Authenticatable
{
    use HasFactory;

    public $table = "parents";

    protected $fillable = [
        'parent_name',
        'username',
        'nationality',
        'gender',
        'password',
        'id_expiration_date',
        'id_number'
    ];

    protected $hidden = [
        'password'
    ];

    public function bankInformation()
    {
        return $this->hasOne(BankInformation::class, 'parent_id');
    }

    public function contactInformation()
    {
        return $this->hasOne(ContactInformation::class, 'parent_id');
    }

    public function parentAddress()
    {
        return $this->hasOne(ParentAddress::class, 'parent_id');
    }

    public function kids()
    {
        return $this->hasMany(Kid::class, 'parent_id');
    }

    public function financeRequests()
    {
        return $this->hasMany(FinanceRequest::class, 'parent_id');
    }
}
