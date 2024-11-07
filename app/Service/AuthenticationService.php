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
        public function register($bettingData)
        {   

            return $this->model->createModel([
                "name"         => $bettingData->name,
                "cpf"          => $bettingData->cpf,
                "email"        => $bettingData->email,
                "dateOfBirth"  => $bettingData->dateOfBirth,
                "password"     => bcrypt($bettingData->password),
                "telephone"    => $bettingData->telephone,
                "pix_key"      => $bettingData->pix_key,
                "profile"      => $bettingData->profile
            ]);
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