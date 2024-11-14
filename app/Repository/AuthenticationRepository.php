<?php 

    namespace App\Repository;

    use App\Models\LogoutTokenModel;
    use App\Models\User;

    class AuthenticationRepository
    {
        protected $model;
        protected $logoutToken;

        public function __construct(User $model, LogoutTokenModel $logoutTokenModel)
        {
            $this->model       = $model;    
            $this->logoutToken = $logoutTokenModel; 
        }

        public function createModel($gambler)
        {
           return $this->model->create($gambler);
        }

        public function logoutModel($id)
        {
            return $this->logoutToken->where('id', $id)->delete();
        }

        public function recoverPassword($cpf)
        {
            return $this->model->where('cpf', $cpf)->get('id');
        }

        public function newPasswordModel($idUSer, $password)
        {
            return $this->model->where('id', $idUSer)->update(['password' => $password]);
        }
    }