<?php 

require_once '../app/model/model.php';


class BaseController
{
	public $model;

	function __construct()
	{
		$this->model = new Model;
	}
}


 ?>