<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrizeOrCardModel extends Model
{
    use HasFactory;

    protected $table = "prize_or_card";
    
    protected $fillable = [
        'id',
        'prizeOrCard'
    ];
}
