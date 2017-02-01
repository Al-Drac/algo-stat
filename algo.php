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

function triSelec($list)
{
  echo ('Tri par sélection');
  $size = count($list);
  $orig = microtime();
  for($i=0;$i<$size-1;$i++)
	{
		$min = $i;
		$minV = $arrayOf[$min];
		for($j=$i+1;$j<$size;$j++)
		{
      $z++;
			if($arrayOf[$j] < $minV)
			{
				$min = $j;
				$minV = $arrayOf[$min];
			}
		}

		if($min != $i)
		{
			$arrayOf[$min] = $arrayOf[$i];
			$arrayOf[$i] = $minV;
		}
	}
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

function shellsort($list)
{
  echo('Tri de shell');
  $size = count($list);
  $orig = microtime();
  $z = 0;
  $i = 1;
  for($i < $size; $i = 3 * $i + 1; $i++)
  {
    for($i > 0;;)
    {
      $i = $i / 3

    }
  }
  /*h = 1
while h < n, h = 3*h + 1
while h > 0,
    h = h / 3
    for k = 1:h, insertion sort a[k:h:n]
    → invariant: each h-sub-array is sorted
end*/
  $end = microtime();
  $time = $end - $orig;
  var_dump($list);
  var_dump($z);
  var_dump($time);

}

/*Tri fusion*/

/*Tri à peigne*/





$list = array(4, 3, 5, 9, 3, 2, 1, 0);

//triInsrt($list);
//triBulle($list);
triSelec($list);
var_dump(quicksort($list));
