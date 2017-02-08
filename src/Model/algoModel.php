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
        $orig = $this->microseconds();
        $loop = 0;
        for ( $i = 0; $i < $size; $i++ ) {
            $elmToInsert = $list[$i];
            for ( $j = 0; $j < $i; $j++ ) {
                $loop++;
                $curElm = $list[$j];
                if ( $elmToInsert < $curElm ) {
                    $list[$j] = $elmToInsert;
                    $elmToInsert = $curElm;
                }
            }
            $list[$i] = $elmToInsert;
        }
        $end = $this->microseconds();
        $time = $end - $orig;

        return ["list" => $list,
                "time" => $time,
                "loop" => $loop,
        ];
    }

    /*Tri à bulle*/

    public function triBulle($list) {
        $size = count($list);
        $orig = $this->microseconds();
        $loop = 0;

        for ( $i = $size-2; $i >= 0; $i-- ) {
            for ( $j = 0; $j <= $i; $j++ ) {
                $loop++;
                if ( $list[$j+1] < $list[$j] ) {
                    $temp = $list[$j+1];
                    $list[$j+1] = $list[$j];
                    $list[$j] = $temp;
                }
            }
        }
        $end = $this->microseconds();
        $time = $end - $orig;

        return ["list" => $list,
                "time" => $time,
                "loop" => $loop,
        ];
    }

    /* Quicksort */
    public function quick_sort($list) {

        $orig = $this->microseconds();
        $result = $this->quicksort($list);
        $end = $this->microseconds();
        $time = $end - $orig;

        return ["list" => $result,
                "time" => $time,
        ];


    }
    private function quicksort($list)
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

        $list = array_merge( $this->quicksort($left), [$pivot], $this->quicksort($right) );
        return $list;
    }

    /*Tri de Shell*/

    public function triShell($list) {
      $size = count($list);
      $orig = $this->microseconds();
      $invert = 1;
      $loop = 0;

      for ( $size != 1; $size = $size / 2; ) {
          $loop++;
        for ( $invert == 1; $invert = 0; ) {

        }
      }

      $end = $this->microseconds();
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
      $orig = $this->microseconds();
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
      $end = $this->microseconds();
      $time = $end - $orig;

      return ["list" => $list,
              "time" => $time,
              "loop" => $loop,
      ];
    }

    /*Tri fusion*/

    /*Tri à peigne*/


    /* Func microseconds */
    private function microseconds() {
        $mt = explode(' ', microtime());
        return ((int)$mt[1]) * 1000000 + ((int)round($mt[0] * 1000000));
    }
}
