<?php

/**
 * Created by PhpStorm.
 * User: AlDrac
 * Date: 08/02/2017
 * Time: 11:15
 */

namespace App\Model;

class listModel
{
    function randomNumbers($quantity) {
        $array = array();
        for($i = 0; $i <= $quantity; $i++) {
            $array[] = mt_rand(1, 999);
        }
        return($array);
    }

    function sortedNumbers($quantity) {
        $array = array();
        for($i = 0; $i <= $quantity; $i++) {
            $array[] = mt_rand(1, 999);
        }
        sort($array);
        return($array);
    }

    function sortedReverseNumbers($quantity) {
        $array = array();
        for($i = 0; $i <= $quantity; $i++) {
            $array[] = mt_rand(1, 999);
        }
        rsort($array);
        return($array);
    }

    function almostSortedNumbers($quantity) {
        $array = array();
        for($i = 0; $i <= $quantity; $i++) {
            $array[] = mt_rand(1, 999);
        }
        sort($array);
        for($j = 0; $j <= $quantity; $j++){
            if ($j % 3 == 0){
                $array[$j] = mt_rand(1, 999);
            }
        }
        var_dump($array);
    }
}
