<?php

    namespace App\Http\Controllers\Authentication;

use App\Contracts\AuthenticationInterface;
use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;

    class AuthenticationController extends Controller
    {
        protected $authentication;

        public function __construct(AuthenticationInterface $authentication)
        {
            $this->authentication = $authentication;    
        }

        public function authentication(Request $request)
        {
            $this->authentication->login($request);
        }
    }
