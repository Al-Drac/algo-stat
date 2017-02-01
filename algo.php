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
    var_dump($list);
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

function triSelec($list)
{
  echo ('Tri par sélection');
  var_dump($list);
  $size = count($list);
  $new = array();
  $orig = microtime();
  $z = 0;
  for($i = 0;$i<$size-1;)
  {
    $z++;
    $val = $list[0];
    for($f = 0;$f < $size; $f++)
    {
      $z++;
      //var_dump($f);

      if($list[$f]<$val)
      {
        $val = $list[$f];
        $pos = $f;
      }
    }
    $new[] = $val;
    unset($list[$pos]);
    $size = $size -1;
    var_dump($new,$list);
  }
  $list = $new;
  $end = microtime();
  $time = $end - $orig;
  var_dump($list);
  var_dump($z);
  var_dump($time);
}

/*Tri à bulle*/

function triBulle($list)
{
    echo('Tri à bulle');
    var_dump($list);
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

/*Tri rapide*/

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

/*Tri de Shell*/

function triShell($list)
{
  echo('Tri de shell');
  var_dump($list);
  $size = count($list);
  $orig = microtime();

  $invert = 1;
  for($size != 1; $size = $size / 2;)
  {
    for($invert == 1; $invert = 0;)
    {

    }
  }

  $end = microtime();
  $time = $end - $orig;
  var_dump($list);
  var_dump($z);
  var_dump($time);

}


/*Tri fusion*/

/*Tri à peigne*/





$list = array(4, 3, 5, 9, 15, 2, 1, 0);

//triInsrt($list);
//triBulle($list);
triSelec($list);
//triShell($list);
var_dump(quicksort($list));
