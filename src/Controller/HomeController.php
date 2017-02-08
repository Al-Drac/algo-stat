<?php
/**
 * Created by PhpStorm.
 * User: theo
 * Date: 25/07/16
 * Time: 15:53
 */

namespace App\Controller;


use App\Model\algoModel;
use App\Model\listModel;


require_once './src/Lib/smarty-3.1.29/libs/Smarty.class.php';

class HomeController
{
    private $Smarty;
    private $algo;

    public function __construct() {
        $this->algo = new algoModel();
        $this->list = new listModel();
        $this->Smarty = new \Smarty();
    }

    public function index() {
        $list = array(4, 3, 5, 9, 15, 2, 1, 0, 25, 564, 2, 38, 2, 5, 5);
        $inst = $this->algo->triInsrt($list);
        $bulle = $this->algo->triBulle($list);
        $selec = $this->algo->triSelec($list);
        $shell = $this->algo->triShell($list);
        $quicksort = $this->algo->quick_sort($list);
        $this->list->randomNumbers(10);
        $this->list->sortedNumbers(10);
        $this->list->sortedNumbersReverse(10);
        $this->list->almostSorted(10);
        $this->Smarty->assign(["quicksort" => $quicksort,
                               "insertion" => $inst,
                               "bulle" => $bulle,
                               "selec" => $selec,
                               "shell" => $shell,
        ]);
        $this->Smarty->display("./src/View/template/home.tpl");
    }
}
