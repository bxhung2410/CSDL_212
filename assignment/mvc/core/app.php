<?php
class App
{

    protected $controller = "CoffeeShop";
    protected $action = "index";
    protected $params = [];

    function __construct()
    {
        $arr = $this->processURL();

        //controller process
        if (isset($arr[0])) {
            if (file_exists("./mvc/controllers/" . $arr[0] . ".php")) {
                $this->controller = $arr[0];
            }
            unset($arr[0]);
        }

        require_once "./mvc/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;
        //action process
        if (isset($arr[1])) {
            if (strlen(strstr($arr[1], ".php")) > 0) {
                $arr[1] = substr($arr[1], 0, strlen($arr[1]) - 4);
            }
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }

        //params process
        $this->params = $arr ? array_values($arr) : [];
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    function processURL()
    {
        if (isset($_GET["url"])) {
            return explode("/", filter_var(trim($_GET["url"])));
        }
    }
}
