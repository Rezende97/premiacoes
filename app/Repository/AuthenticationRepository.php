<?php 

    namespace App\Repository;

    use App\Models\User;

    class AuthenticationRepository
    {
        protected $model;

        public function __construct(User $model)
        {
            $this->model = $model;    
        }

        public function createModel($gambler)
        {
           return $this->model->create($gambler);
        }

        public function logoutModel($authentication)
        {
            echo 'Login Repository';
        }
    }