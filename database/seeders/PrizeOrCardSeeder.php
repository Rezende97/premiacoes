<?php

namespace Database\Seeders;

use App\Models\PrizeOrCardModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrizeOrCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $freeOrPaids = [
            'Premiação', 
            'Cartela'
        ];

        foreach ($freeOrPaids as $freeOrPaid) {

            PrizeOrCardModel::create([
                'prizeOrCard' => $freeOrPaid,
            ]);

        }
    }
}
