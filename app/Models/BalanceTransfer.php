<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalanceTransfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'charge',
        'to',
        'from',
        'status',
        'details',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
