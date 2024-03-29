<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseHistory extends Model
{
    use HasFactory;

    protected $primaryKey = 'historyID';
    protected $fillable = [
        'historyID',
        'customerID',
        'orderID',
        'totalPrice',
        'paymentMethod',
    ];
}
