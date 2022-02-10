<?php
namespace App\classes;
class Series
{
    protected $startingNumber;
    protected $endingNumber;
    protected $result;
    protected $i;
    protected $sum;

    public function __construct($data=null)
    {
        $this->startingNumber = $data['start_num'];
        $this->endingNumber   = $data['end_num'];
    }

    public function index()
    {
        header('Location: action.php?pages=series');
    }

    public function seriesCount()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            $this->result .= $this->i.'+';
            $this->sum += $this->i;
        }
        return [
            'result' => rtrim($this->result, '+').' = '. $this->sum,
            'starting_number' => $this->startingNumber,
            'ending_number' => $this->endingNumber,
        ];
    }
}