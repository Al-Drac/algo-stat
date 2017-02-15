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
        $this->Smarty->assign([]);
        $this->Smarty->display("./src/View/template/home.tpl");
    }

    public function result () {
        $size = $_POST['size'];
        $func = $_POST['func'];
        $list = $_POST['list'];
        $listNumber = $this->list->$list($size);
        $result = [];
        foreach ($func as $key => $value) {
            $result[$value] = $this->algo->$value($listNumber);
        }
        $this->Smarty->assign([
                                'result'-> $result
                            ]);
    }
}
