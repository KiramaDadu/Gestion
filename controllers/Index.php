<?php

 namespace controllers;

 use libs\Controller;

 	class Index extends Controller{

 		public function __construct(){
 		parent::__construct();


 		
 		public function index() {
     	$a = explode("\\", get_class($this))[1];
      	//echo $a;
      	$this->errores[0] = "Pepito lol";
      	$this->view->render($a,"Index", $this->getErrores());
    	//  $this->view->render($a,"index",$this->getErrores());
    }
 }
 ?>
 