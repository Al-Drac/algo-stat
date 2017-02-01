<?php
/**
 * Created by PhpStorm.
 * User: theo
 * Date: 25/07/16
 * Time: 15:53
 */

namespace App\Controller;

require_once './src/Lib/smarty-3.1.29/libs/Smarty.class.php';
require './src/Model/algo.php';

class HomeController
{
    private $Smarty;

    public function __construct()
    {
        $this->Smarty = new \Smarty();
    }

    public function index(){
        $this->Smarty->display("./src/View/template/home.tpl");
    }
}
