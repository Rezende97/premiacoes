<?php

    namespace App\Contracts; 

    interface AuthenticationInterface
    {
        public function register($bettingData);
        public function login($authentication);
        public function logout();
        public function forgotPassword();
    }