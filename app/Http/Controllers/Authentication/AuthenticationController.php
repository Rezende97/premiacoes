<?php

    namespace App\Http\Controllers\Authentication;

    use App\Contracts\AuthenticationInterface;
    use App\Http\Controllers\Controller;
    use App\Http\Requests\AuthenticationRequest;
    use App\Http\Requests\RegisterGamblerRequest;
    use Illuminate\Http\Request;

    class AuthenticationController extends Controller
    {
        protected $gambler;

        public function __construct(AuthenticationInterface $authentication)
        {
            $this->gambler = $authentication;    
        }

        public function authentication(AuthenticationRequest $authenticationRequest)
        {
            $responseAuthentication = $this->gambler->login($authenticationRequest);

            print_r($responseAuthentication);
        }

        public function registerGambler(RegisterGamblerRequest $registerGamblerRequest)
        {
            $responseRegisterGambler = $this->gambler->register($registerGamblerRequest);
            
            return response()->json(['status' => 'ok'])->setEncodingOptions(JSON_UNESCAPED_UNICODE);
        }
    }
