<?php

    namespace App\Http\Controllers\Awards;

    use App\Contracts\AwardsInterface;
    use App\Http\Controllers\Controller;
    use App\Http\Requests\PrizeRequest;
    use App\Http\Requests\UpdatePrizeRequest;
    use Illuminate\Http\Request;

    class AwardsController extends Controller
    {
        protected $award;

        public function __construct(AwardsInterface $award)
        {
            $this->award = $award;    
        }

        public function registerPrizes(PrizeRequest $prizeRequest)
        {
            return $this->award->registerPrize($prizeRequest);
        }

        public function update(Request $updatePrizeRequest)
        {
            return $this->award->updatePrize($updatePrizeRequest);
        }
    }
