<?php

require_once '../app/model/model.php';


class BaseController
{
    public $model;

    public function __construct()
    {
        $this->model = new Model;
    }
}
