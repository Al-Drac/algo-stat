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
use App\Model\resultModel;

require_once './src/Lib/smarty-3.1.29/libs/Smarty.class.php';

class HomeController
{
    private $Smarty;
    private $algo;
    private $list;
    private $result;

    public function __construct() {
        $this->algo = new algoModel();
        $this->list = new listModel();
        $this->result = new resultModel();
        $this->Smarty = new \Smarty();
    }

    public function index() {
        $this->Smarty->assign([]);
        $this->Smarty->display("./src/View/template/home.tpl");
    }

    public function result () {
        var_dump($_POST);
        $size = $_POST['size'];
        $func = $_POST['func'];
        $list = $_POST['list'];
        $listNumber = $this->list->$list($size);
        $result = [];
        foreach ($func as $key => $value) {
            $start = $this->result->microseconds();
            $list = $this->algo->$value($listNumber);
            $end = $this->result->microseconds();
            $time = $end - $start;
            $count = $this->algo->getCount();
            $result[$value] = $this->result->setResultArray($list, $time, $count);
        }

        $this->Smarty->assign([
                                'result' => $result,
                            ]);
        $this->Smarty->display("./src/View/template/result.tpl");
    }
}
