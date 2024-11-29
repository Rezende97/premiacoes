<?php 

    namespace App\Repository;

    use App\Models\PrizeNumbersPurchasedModel;

    class prizeNumbersPurchasedRepository
    {
        protected $PrizeNumbersPurchasedModel;

        public function __construct(PrizeNumbersPurchasedModel $PrizeNumbersPurchasedModel)
        {
            $this->PrizeNumbersPurchasedModel = $PrizeNumbersPurchasedModel;
        }

        public function numberUserAward($idAward)
        {
            return $this->PrizeNumbersPurchasedModel->whereHas('user')
                                                    ->with('user')
                                                    ->where("award_id", $idAward)
                                                    ->get();
        }
    }