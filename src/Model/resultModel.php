<?php


namespace App\Model;


/**
 *
 */
class resultModel
{
    private $i;
    public function __construct()
    {
        $this->i = 0;
    }

    public function setResultArray($list, $time = null, $loop = null)
    {
        $result =   [
                        'list' => $list,
                        'time' => $time,
                        'loop' => $loop
                    ];
        return $result;
    }

    /* Func microseconds */
    public function microseconds() {
        $mt = explode(' ', microtime());
        return ((int)$mt[1]) * 1000000 + ((int)round($mt[0] * 1000000));
    }

    public function count()
    {
        $this->i++;
    }

    public function getCount()
    {
        return $this->i;
    }

    public function setCountToZero()
    {
        $this->i = 0;
    }
}
