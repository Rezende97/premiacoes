<?php

    namespace App\Http\Controllers\Awards;

    use App\Contracts\AwardsInterface;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;

    class AwardsController extends Controller
    {
        protected $award;

        public function __construct(AwardsInterface $award)
        {
            $this->award = $award;    
        }

        public function registerPrizes(Request $request)
        {
            return $this->award->registerPrize($prizeInformation);
        }
    }
