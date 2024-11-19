<?php

    namespace App\Http\Controllers\Authentication;

    use App\Contracts\AuthenticationInterface;
    use App\Http\Controllers\Controller;
    use App\Http\Requests\AuthenticationRequest;
    use App\Http\Requests\LogoutRequest;
    use App\Http\Requests\newPasswordRequest;
    use App\Http\Requests\RecoverPasswordRequest;
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
            return $this->gambler->login($authenticationRequest);
        }

        public function registerGambler(RegisterGamblerRequest $registerGamblerRequest)
        {
            $responseRegisterGambler = $this->gambler->register($registerGamblerRequest);
            
            $response = $responseRegisterGambler ? 'Usuário criado com sucesso' : 'Erro ao criar o usuário';

            return response()->json(['response' => $responseRegisterGambler, 'message' => $response])->setEncodingOptions(JSON_UNESCAPED_UNICODE);
        }

        public function logoutGamber(LogoutRequest $logoutRequest)
        {
            return $this->gambler->logout($logoutRequest);
        }

        public function recoverPasswordGamber(RecoverPasswordRequest $recoverPasswordRequest)
        {
            return $this->gambler->recoverPassword($recoverPasswordRequest);
        }

        public function newPasswordGamber(newPasswordRequest $newPasswordRequest)
        {
            return $this->gambler->newPassword($newPasswordRequest);
        }
    }
