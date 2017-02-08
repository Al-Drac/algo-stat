<?php

namespace App\Model;


/**
 *
 */
class algoModel
{
    /* Tri Insertion */
    public function triInsrt($list) {
        $size = count($list);
        $orig = microtime();
        $loop = 0;
        for ($i = 0; $i < $size; $i++) {
            $elmToInsert = $list[$i];
            for ($j = 0; $j < $i; $j++) {
                $loop++;
                $curElm = $list[$j];
                if ($elmToInsert < $curElm) {
                    $list[$j] = $elmToInsert;
                    $elmToInsert = $curElm;
                }
            }
            $list[$i] = $elmToInsert;
        }
        $end = microtime();
        $time = $end - $orig;

        return ["list" => $list,
                "time" => $time,
                "loop" => $loop,
        ];
    }

    /*Tri à bulle*/

    public function triBulle($list) {
        $size = count($list);
        $orig = microtime();
        $loop = 0;

        for ($i = $size-2; $i >= 0; $i--) {
            for ($j = 0; $j <= $i; $j++) {
                $loop++;
                if ($list[$j+1] < $list[$j]) {
                    $temp = $list[$j+1];
                    $list[$j+1] = $list[$j];
                    $list[$j] = $temp;
                }
            }
        }
        $end = microtime();
        $time = $end - $orig;

        return ["list" => $list,
                "time" => $time,
                "loop" => $loop,
        ];
    }

    /* Quicksort */
    public function quick_sort($list) {

        $orig = microtime();
        $result = $this->quicksort($list);
        $end = microtime();
        $time = $end - $orig;

        return ["list" => $result,
                "time" => $time,
        ];


    }
    private function quicksort($list)
    {
        if (count($list) === 0) {
            return [];
        }

        $pivot = $list[0];
        $left = [];
        $right = [];

        for ($i = 1; $i < count($list); $i++) {

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
      $orig = microtime();
      $invert = 1;
      $loop = 0;
      $n=0;
      while ( $n<$size ) {
          $n =3*$n+1;
          $loop++;
      }
      while ( $n!=0 ) {
        $loop++;
        $n=(int)($n/3);
        for ( $i=$n;$i<$size;$i++ ) {
          $loop++;
          $mem=$list[$i];
          $j=$i;
          while ( $j>($n-1) && $list[$j-$n]>$mem ) {
            $loop++;
            $list[$j]=$list[$j-$n];
            $j=$j-$n;
          }
          $list[$j]=$mem;
        }
      }
      $end = microtime();
      $time = $end - $orig;

      return ["list" => $list,
              "time" => $time,
              "loop" => $loop,
      ];
    }

    /*Tri par sélection*/

    function triSelec($list)
    {
      $size = count($list);
      $new = [];
      $orig = microtime();
      $loop = 0;
      for ($i = 0;$i<$size-1;) {
          $loop++;
          $val = $list[0];
          $pos = 0;

          for ($f = 0; $f < $size; $f++) {

              $loop++;

              if ($list[$f]<$val) {
                  $val = $list[$f];
                  $pos = $f;
              }
          }

          $new[] = $val;
          $list[$pos] = $list[0];
          array_shift($list);
          $size = $size-1;

          if ($size === 1) {
              $new[] = $list[0];
          }
        }

      $list = $new;
      $end = microtime();
      $time = $end - $orig;

      return ["list" => $list,
              "time" => $time,
              "loop" => $loop,
      ];
    }

    /*Tri fusion*/

    /*Tri à peigne*/
}
