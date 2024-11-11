<?php

    namespace App\Contracts; 

    interface AuthenticationInterface
    {
        public function register($bettingData);
        public function login($authentication);
        public function logout($logoutRequest);
        public function forgotPassword($cpf);
    }