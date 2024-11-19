<?php

namespace Database\Seeders;

use App\Models\FreeOrPaidModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FreeOrPaidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $freeOrPaids = [
            'Pago', 
            'Gratuito'
        ];

        foreach ($freeOrPaids as $freeOrPaid) {

            FreeOrPaidModel::create([
                'freeOrPaid' => $freeOrPaid,
            ]);

        }
    }
}
