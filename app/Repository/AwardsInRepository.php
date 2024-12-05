<?php 

    namespace App\Repository;
    use App\Models\AwardModel;

    class AwardsInRepository
    {
        protected $model;

        public function __construct(AwardModel $model)
        {
            $this->model = $model;
        }

        public function createAward($award)
        {
            return $this->model->create($award);
        }

        public function updateAward($award, $id)
        {
            return $this->model->where('id', $id)->update($award);
        }

        public function awardAvailable()
        {
            return $this->model->where('active', 1)->get();
        }
    }