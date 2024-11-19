<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchasedOReservedModel extends Model
{
    use HasFactory; 

    protected $table = "purchased_or_reserved";
    
    protected $fillable = [
        'id',
        'purchasedOrReserved'
    ];
    
}
