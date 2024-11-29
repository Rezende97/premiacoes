<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrizeNumbersPurchasedModel extends Model
{
    use HasFactory;

    protected $table = 'prize_numbers_purchased';

    protected $fillable = ['user_id', 'award_id', 'numberPurchased', 'purchasedOrReserved'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
