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
require './src/Model/algoModel.php';
require './src/Model/listModel.php';

class HomeController
{
    private $Smarty;
    private $algo;

    public function __construct()
    {
        $this->algo = new algoModel();
        $this->list = new listModel();
        $this->Smarty = new \Smarty();
    }

    public function index(){
        $list = array(4, 3, 5, 9, 15, 2, 1, 0, 25, 564, 2, 38, 2, 5, 5);
        $this->algo->triInsrt($list);
        $this->algo->triBulle($list);
        $this->algo->triSelec($list);
        $this->algo->triShell($list);
        $this->list->randomNumbers(10);
        $this->list->sortedNumbers(10);
        $this->list->sortedNumbersReverse(10);
        $this->list->almostSorted(10);
        $quicksort = $this->algo->quicksort($list);
        $this->Smarty->assign(["quicksort"=>$quicksort]);
        $this->Smarty->display("./src/View/template/home.tpl");
    }
}
