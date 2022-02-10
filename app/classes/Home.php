<?php


namespace App\classes;


class Home
{
    protected $number;
    protected $i;
    protected $check;
    protected $result;

    public function __construct($data=null)
    {
        $this->number = $data['given_number'];
        $this->check  = 'Prime';
    }

    public function index()
    {
        header('Location: action.php?pages=home');
    }
    public function primeNumber()
    {
        if ($this->number == 1 || $this->number == 2)
        {
            return "Your number $this->number is prime";
        }
        else
        {
            for ($this->i = 2;$this->i < $this->number; $this->i++)
            {
                if ($this->number % $this->i == 0)
                {
                    return "Your number $this->number is not prime";
                }
            }
        }
        return "Your number $this->number is prime";

    }
}