<?php 

    namespace App\Service;

    use App\Contracts\AwardsInterface;
    use App\Repository\AwardsInRepository;
    use Illuminate\Support\Facades\Auth;

    class AwardsService implements AwardsInterface
    {
        public function registerPrize($prizeInformation)
        {
            dd($prizeInformation);
        }
    }