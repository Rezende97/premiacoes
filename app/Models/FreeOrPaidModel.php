<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeOrPaidModel extends Model
{
    use HasFactory;

    protected $table = "free_or_paid";

    protected $fillable = [
        'id',
        'freeOrPaid'
    ];
}
