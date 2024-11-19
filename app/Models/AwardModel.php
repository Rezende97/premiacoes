<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwardModel extends Model
{
    use HasFactory;

    protected $table = "awards";

    protected $fillable = [
        'id',
        "file_path",
        "descriptionAward",
        "prizeValue",
        "dateTime",
        "valueNumberPrize",
        "freeOrPaid",
        "prizeOrCard",
        "reservationPaymentDeadline",
        "drawnNumber",
        "active"
    ];
}
