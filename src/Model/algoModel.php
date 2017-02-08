<?php

namespace App\Model;


/**
 *
 */
class algoModel
{
    /* Tri Insertion */
    public function triInsrt($list)
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

    /*Tri à bulle*/

    public function triBulle($list)
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

    /* Quicksort */
    public function quicksort($list){
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

        return array_merge($this->quicksort($left), array($pivot), $this->quicksort($right));
    }

    /*Tri de Shell*/

    public function triShell($list)
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
        $pos = 0;
        for($f = 0; $f < $size; $f++)
        {
          $z++;
          if($list[$f]<$val)
          {
            $val = $list[$f];
            $pos = $f;
          }

        }
        $new[] = $val;
        $list[$pos] = $list[0];
        array_shift($list);
        //unset($list[$pos]);
        $size = $size-1;
        if($size == 1)
        {
          $new[] = $list[0];
        }
        //var_dump($new,$list);
      }
      $list = $new;
      $end = microtime();
      $time = $end - $orig;
      var_dump($list);
      var_dump($z);
      var_dump($time);
    }

    /*Tri fusion*/

    /*Tri à peigne*/
}
