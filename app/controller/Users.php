<?php
class Users extends Controller {
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function login(){
        $data = [
            'username' => '',
            'password' => '',
            'username_error' => '',
            'password_error' => '' 
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
           //Get data from forms
            $data = [
                'username' => $_POST['username'],
                'password' => $_POST['password'],
                'username_error' => '',
                'password_err' => '' 
            ];

            //Validate username
            if(empty($data['username'])){
                //Set error
                $data['username_error'] = "Username Empty";
            }elseif($this->userModel->checkUser($data['username'])){
                $data['username_error'] = "User doesnt exist";
            }
            
            //Validate password
            if(empty($data['password'])){
                $data['password_error'] = "Password Empty";
            }
            
            //Login User
            if(empty($data['username_error']) && empty($data['password_err'])){
                //Login
                $loggedInUser = $this->userModel->login($data['username'], $data['password']);
                if($loggedInUser){
                    //Check what kind of user
                    if($this->userModel->findUserByUsername($data['username'])->role_id == 1){
                        $user = $this->userModel->findUserByUsername($data['username']);
                        self::createSession($user, 'admins/index');
                    }elseif($this->userModel->findUserByUsername($data['username'])->role_id == 2){
                        //Redirect to ceo
                        $user = $this->userModel->findUserByUsername($data['username']);
                        self::createSession($user, 'ceos/index');
                    }else{
                        //Redirect to worker
                        $user = $this->userModel->findUserByUsername($data['username']);
                        self::createSession($user, 'workers/index');
                    }
                }else{
                    //Password wrong error
                    $data['password_error'] = "Password wrong";
                    $this->view('users/login', $data);
                }
            }else{
                //Load with errors
                $this->view('users/login', $data);
            }
        }
        $this->view('users/login', $data);
    }

    public function createSession($data, $filename){
        $_SESSION['id'] = $data->id;
        $_SESSION['username'] = $data->username;
        redirect($filename);
    }

    public function logout(){
        unset($_SESSION['username']);
        unset($_SESSION['id']);
        redirect('users/login');
    }
}
?>