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

        public function loginModel($authentication)
        {
            echo 'Login Repository';
        }
    }