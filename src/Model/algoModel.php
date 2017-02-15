<?php

namespace App\Model;


use App\Model\resultModel;

/**
 *
 */
class algoModel
{
    private $result;

    public function __construct() {
        $this->result = new resultModel();
    }

    /* Tri Insertion */
    public function triInsrt($list) {
        $size = count($list);
        $this->result->setCountToZero();
        for ( $i = 0; $i < $size; $i++ ) {
            $elmToInsert = $list[$i];
            for ( $j = 0; $j < $i; $j++ ) {
                $this->result->count();
                $curElm = $list[$j];
                if ( $elmToInsert < $curElm ) {
                    $list[$j] = $elmToInsert;
                    $elmToInsert = $curElm;
                }
            }
            $list[$i] = $elmToInsert;
        }

        return $list;
    }

    /*Tri à bulle*/

    public function triBulle($list) {

        $size = count($list);
        $this->result->setCountToZero();
        for ( $i = $size-2; $i >= 0; $i-- ) {
            for ( $j = 0; $j <= $i; $j++ ) {
                $this->result->count();
                if ( $list[$j+1] < $list[$j] ) {
                    $temp = $list[$j+1];
                    $list[$j+1] = $list[$j];
                    $list[$j] = $temp;
                }
            }
        }

        return $list;
    }

    /* Quicksort */

    public function quicksort($list)
    {
        if ( count($list) === 0 ) {
            return [];
        }

        $pivot = $list[0];
        $left = [];
        $right = [];

        for ( $i = 1; $i < count($list); $i++ ) {

            if ($list[$i] < $pivot) {
                $left[] = $list[$i];
            }
            else {
                $right[] = $list[$i];
            }
        }

        $list = array_merge($this->quicksort($left), [$pivot], $this->quicksort($right));
        return $list;
    }

    /*Tri de Shell*/

    public function triShell($list) {
      $size = count($list);
      $invert = 1;
      $this->result->setCountToZero();
      $n=0;
      while ( $n<$size ) {
          $n =3*$n+1;
          $this->result->count();
      }
      while ( $n!=0 ) {
        $this->result->count();
        $n=(int)($n/3);
        for ( $i=$n;$i<$size;$i++ ) {
          $this->result->count();
          $mem=$list[$i];
          $j=$i;
          while ( $j>($n-1) && $list[$j-$n]>$mem ) {
            $this->result->count();
            $list[$j]=$list[$j-$n];
            $j=$j-$n;
          }
          $list[$j]=$mem;
        }
      }

      for ( $size != 1; $size = $size / 2; ) {
          $this->result->count();
        for ( $invert == 1; $invert = 0; ) {

        }
      }

      return $list;
    }

    /*Tri par sélection*/

     public function triSelec($list)
    {
      $size = count($list);
      $new = [];
      $loop = 0;
      for ( $i = 0;$i<$size-1; ) {
          $loop++;
          $val = $list[0];
          $pos = 0;

          for ( $f = 0; $f < $size; $f++ ) {

              $loop++;

              if ( $list[$f]<$val ) {
                  $val = $list[$f];
                  $pos = $f;
              }
          }

          $new[] = $val;
          $list[$pos] = $list[0];
          array_shift($list);
          $size = $size-1;

          if ( $size === 1 ) {
              $new[] = $list[0];
          }
        }

      $list = $new;

      return $list;
    }

    /*Tri fusion*/

        function triFusion($array)
    {
        if(count($array) === 1 )
        {
            return $array;
        }

        $mid = count($array) / 2;
        $left = array_slice($array, 0, $mid);
        $right = array_slice($array, $mid);
        $left = $this->triFusion($left);
        $right = $this->triFusion($right);

        $list = $this->merge($left, $right);
        return $list;
    }


    function merge($left, $right)
    {
        $res = [];

        while (count($left) > 0 && count($right) > 0)
        {
            if($left[0] > $right[0])
            {
                $res[] = $right[0];
                $right = array_slice($right , 1);
            }
            else
            {
                $res[] = $left[0];
                $left = array_slice($left, 1);
            }
        }

        while (count($left) > 0)
        {
            $res[] = $left[0];
            $left = array_slice($left, 1);
        }

        while (count($right) > 0)
        {
            $res[] = $right[0];
            $right = array_slice($right, 1);
        }

        return $res;
    }


    /*Tri à peigne*/

    public function triPeigne($list) {
        $size = count($list);
        $new = [];
        $loop = 0;
        $change = True;
        $inter = $size;

        while ( $inter>1 || $change == True ) {
            $loop++;
            $inter = (int) ( $inter / 1.3 );
            if ( $inter < 1 ) $inter = 1;
            $i = 0;
            $change = False;
            while ( $i < $size - $inter ) {
                $loop++;
                if ( $list[$i] > $list[$i+$inter] ) {
                    $temps = $list[$i];
                    $list[$i] = $list[$i + $inter];
                    $list[$i + $inter] = $temps;
                }
                $i++;
            }
        }

        return $list;
    }

    public function getCount()
    {
        return $this->result->getCount();
    }
}
