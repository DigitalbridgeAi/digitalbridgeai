<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\GlobalStatus;

class PaymentGateway extends Model
{
    use HasFactory, GlobalStatus;
    
    protected $casts = [
        'code' => 'string',
        'extra' => 'object',
        'input_form'=> 'object',
        'supported_currencies'=>'object'
    ];

    public function currencies()
    {
        return $this->hasMany(GatewayCurrency::class, 'method_code', 'code');
    }

    public function form()
    {
        return $this->belongsTo(Form::class);
    }

    public function singleCurrency()
    {
        return $this->hasOne(GatewayCurrency::class, 'method_code', 'code')->orderBy('id','desc');
    }

    public function scopeCrypto()
    {
        return $this->crypto == Status::ENABLE ? 'crypto' : 'fiat';
    }

    public function scopeAutomatic($query)
    {
        $query->where('code', '<', 1000);
    }

    public function scopeManual($query)
    {
        $query->where('code', '>=', 1000);
    }
}