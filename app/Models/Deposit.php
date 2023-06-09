<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Searchable;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Deposit extends Model
{

    use Searchable;

    protected $casts = [
        'detail' => 'object'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function gateway()
    {
        return $this->belongsTo(PaymentGateway::class, 'method_code', 'code');
    }

    public function statusBadge(): Attribute
    {
        return new Attribute(
            get:fn () => $this->badgeData(),
        );
    }

    public function badgeData(){
        $html = '';
        if($this->status == 2){
            $html = '<span class="badge badge--warning">'.trans('Pending').'</span>';
        }
        elseif($this->status == 1 && $this->method_code >= 1000){
            $html = '<span><span class="badge badge--success">'.trans('Approved').'</span><br>'.diffForHumans($this->updated_at).'</span>';
        }
        elseif($this->status == 1 && $this->method_code < 1000){
            $html = '<span class="badge badge--success">'.trans('Succeed').'</span>';
        }
        elseif($this->status == 3){
            $html = '<span><span class="badge badge--danger">'.trans('Rejected').'</span><br>'.diffForHumans($this->updated_at).'</span>';
        }else{
            $html = '<span><span class="badge badge--dark">'.trans('Initiated').'</span></span>';
        }
        return $html;
    }

    // scope
    public function scopeGatewayCurrency()
    {
        return GatewayCurrency::where('method_code', $this->method_code)->where('currency', $this->method_currency)->first();
    }

    public function scopeBaseCurrency()
    {
        return $this->gateway->crypto == 1 ? 'USD' : $this->method_currency;
    }

    public function scopePending($query)
    {
        $query->where('method_code','>=',1000)->where('status', 2);
    }

    public function scopeRejected($query)
    {
        $query->where('method_code','>=',1000)->where('status', 3);
    }

    public function scopeApproved($query)
    {
        $query->where('method_code','>=',1000)->where('status', 1);
    }

    public function scopeSuccessful($query)
    {
        $query->where('status', 1);
    }

    public function scopeInitiated($query)
    {
        $query->where('status', 0);
    }
}
