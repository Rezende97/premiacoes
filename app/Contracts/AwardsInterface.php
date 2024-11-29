<?php 

    namespace App\Contracts; 

    interface AwardsInterface
    {
        public function registerPrize($prizeInformation);
        public function updatePrize($updatePrizeInformation);

        public function numberGamblerPrize($idPrize);
    }