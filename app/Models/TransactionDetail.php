<?php

namespace App\Models;


use App\Models\Transaction;
use App\Models\TravelPackage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionDetail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'transactions_id', 'username', 'nationality', 'is_visa', 'doe_passport'
    ];

    protected $hidden = [];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transactions_id', 'id');
    }
}
