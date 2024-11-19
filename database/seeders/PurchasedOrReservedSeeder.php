<?php

namespace Database\Seeders;

use App\Models\PurchasedOReservedModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PurchasedOrReservedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $freeOrPaids = [
            'Comprado', 
            'Reservado'
        ];

        foreach ($freeOrPaids as $freeOrPaid) {

            PurchasedOReservedModel::create([
                'purchasedOrReserved' => $freeOrPaid,
            ]);

        }
    }
}
