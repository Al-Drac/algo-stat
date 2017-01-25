<?php
/**
 * Created by PhpStorm.
 * User: AlDrac
 * Date: 18/01/2017
 * Time: 15:09
 */


/* Tri Insertion */
function triInsrt($list)
{
    echo('Tri à Insertion');
    $size = count($list);
    $orig = microtime();
    $z = 0;
    for($i = 0; $i < $size; $i++)
    {
        $elmToInsert = $list[$i];
        for($j = 0; $j < $i; $j++)
        {
            $z++;
            $curElm = $list[$j];
            if ($elmToInsert < $curElm)
            {
                $list[$j] = $elmToInsert;
                $elmToInsert = $curElm;
            }
        }
        $list[$i] = $elmToInsert;
    }
    $end = microtime();
    $time = $end - $orig;
    var_dump($list);
    var_dump($z);
    var_dump($time);
}

/*Tri par sélection*/

/*Tri à bulle*/

function triBulle($list)
{
    echo('Tri à bulle');
    $size = count($list);
    $orig = microtime();
    $z = 0;
    for($i = $size-2; $i >= 0; $i--)
    {
        for($j = 0; $j <= $i; $j++)
        {
            $z++;
            if($list[$j+1] < $list[$j])
            {
                $temp = $list[$j+1];
                $list[$j+1] = $list[$j];
                $list[$j] = $temp;
            }
        }
    }
    $end = microtime();
    $time = $end - $orig;
    var_dump($list);
    var_dump($z);
    var_dump($time);
}


function quicksort($list){
    if(count($list) === 0){
        return array();
    }

    $pivot = $list[0];
    $left = array();
    $right = array();

    for($i = 1; $i < count($list); $i++){
        if($list[$i] < $pivot){
            $left[] = $list[$i];
        }
        else{
            $right[] = $list[$i];
        }
    }

    return array_merge(quicksort($left), array($pivot), quicksort($right));
}




$list = array(4, 3, 5, 9, 3, 2, 1, 0);

triInsrt($list);
triBulle($list);
var_dump(quicksort($list));