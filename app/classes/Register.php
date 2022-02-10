<?php


namespace App\classes;


class Register
{
    protected $name;
    protected $email;
    protected $mobile;
    protected $result;

    public function __construct($data)
    {
        if (isset($data['full_name']))
        {
            $this->name   =$data['full_name'];
            $this->email   =$data['email'];
            $this->mobile   =$data['mobile'];
        }
    }
    public function add()
    {
//        session_start();
        $_SESSION['name'] = $this->name;
        $_SESSION['email'] = $this->email;
        $_SESSION['mobile'] = $this->mobile;
        return 'Data stored successfully';
    }
    public function allData()
    {
        $this->result = [
            'name' => $_SESSION['name'],
            'email' => $_SESSION['email'],
            'mobile' => $_SESSION['mobile'],
        ];
        return $this->result;
    }


}