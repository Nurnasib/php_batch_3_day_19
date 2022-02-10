<?php


namespace App\classes;
use App\classes\User;
use App\classes\Home;


class Auth
{
    protected $email;
    protected $password;
    protected $user;
    protected $users;
    protected $msg;
    protected $home;

    public function __construct($data=null)
    {
        if (isset($data['email']))
        {
            $this->email = $data['email'];
            $this->password = $data['password'];
        }
    }

    public function login()
    {
        header('Location: action.php?pages=login');
    }
    public function logout()
    {
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        $this->login();

    }
    public function verify()
    {
        $this->user = new User();
        $this->users = $this->user->getAlluser();
        foreach ($this->users as $dt)
        {
            if ($dt['email'] == $this->email && $dt['password'] == $this->password)
            {
                session_start();
                $_SESSION['id'] = $dt['id'];
                $_SESSION['name'] = $dt['name'];

                $this->home = new Home();
                $this->home->index();
            }
        }
        return 'Sorry, your email address or password is invalid';
    }

}