<?php 

    namespace App\Service;

    use App\Contracts\AuthenticationInterface;
    use App\Repository\AuthenticationRepository;
use Illuminate\Support\Facades\Auth;

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
            try {

                $this->model->createModel([
                    "name"         => $bettingData->name,
                    "cpf"          => $bettingData->cpf,
                    "email"        => $bettingData->email,
                    "dateOfBirth"  => $bettingData->dateOfBirth,
                    "password"     => bcrypt($bettingData->password),
                    "telephone"    => $bettingData->telephone,
                    "pix_key"      => $bettingData->pix_key,
                    "profile"      => $bettingData->profile
                ]);

                return true;

            } catch (\Throwable $th) {
                return false;
            }
        }

        /**
         * 
         * log in
         * 
        */
        public function login($authentication)
        {
            try {

                if(!Auth::attempt(["cpf" => $authentication->cpf, "password" => $authentication->password])) {
                    return response()->json(['response' => false, 'message' => 'Usuário ou senha inválida'])->setEncodingOptions(JSON_UNESCAPED_UNICODE);                
                }

                $token = $authentication->user()->createToken('auth_token')->plainTextToken;

                return response()->json(
                                            [
                                                    'response' => true, 
                                                    'message' =>  
                                                [
                                                    'auth'      => 'Usuário logado com sucesso', 
                                                    'token'     => 'Bearer '.$token,
                                                    'id'        => $authentication->user()->id,
                                                    'name'      => $authentication->user()->name,
                                                    'profile'   => $authentication->user()->profile
                                                ]
                                            ]
                                        )->setEncodingOptions(JSON_UNESCAPED_UNICODE);

            } catch (\Throwable $th) {

                return response()->json(['response' => false, 'message' => 'Usuário ou senha inválida'])->setEncodingOptions(JSON_UNESCAPED_UNICODE);                
            }

        }

        /**
         * 
         * end session
         * 
        */
        public function logout($logoutRequest)
        {
            $token = $logoutRequest->user()->tokens()->find($logoutRequest->id);
        
            if ($token) {

                $token->delete();

                return response()->json(['response' => true, 'message' => 'Logged out successfully'])->setEncodingOptions(JSON_UNESCAPED_UNICODE);
            } else {
                return response()->json(['response' => false, 'message' => 'Token not found'])->setEncodingOptions(JSON_UNESCAPED_UNICODE);
            }
        }

        /**
         * 
         * recover password
         * 
        */
        public function forgotPassword($cpf)
        {

        }
    }