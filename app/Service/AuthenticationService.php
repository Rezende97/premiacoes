<?php 

    namespace App\Service;

    use App\Contracts\AuthenticationInterface;
    use App\Repository\AuthenticationRepository;

    class AuthenticationService implements AuthenticationInterface
    {
        protected $model;

        public function __construct(AuthenticationRepository $model)
        {
            $this->model = $model;
        }
        /**
         * 
         * register user
         * 
        */
        public function register()
        {

        }

        /**
         * 
         * log in
         * 
        */
        public function login($authentication)
        {
            $this->model->loginModel($authentication);
        }

        /**
         * 
         * end session
         * 
        */
        public function logout()
        {

        }

        /**
         * 
         * recover password
         * 
        */
        public function forgotPassword()
        {

        }
    }