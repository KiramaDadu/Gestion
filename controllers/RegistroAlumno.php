<?php
	namespace controllers;	
	use libs\Controller;

	class Formulario extends Controller {

		public function __construct(){
			parent::__construct();
			
		}

		public function crear($params=array()){
			//Llamando al metodo del modelo
			if(isset($params['ncontrol']) && isset($params['nombre']) && isset($params['grado']) && isset($params['carrera']) && isset($params['telefono'])){
				$this->crearFormulario($params);
			}
			//Renderizando la vista asociada
			$this->view->render(explode("\\",get_class($this))[1], "crear",$this->getErrores());
		}

		public function crearFormulario($params){
			
		    $ncontrol = $params['ncontrol'];
		    $nombre = $params['nombre'];
		    $grado = $params['grado'];
		    $carrera = $params['carrera'];
		    $telefono = $params['telefono'];

		    if(!is_string($ncontrol)){
		        $this->errores['ncontrol']="Formato incorrecto";
		        
		    }
		    
		    if(!is_string($nombre)){
		        $this->errores['nombre']="Escribir un nombre";
		        
		    }

		    if(!is_string($grado)){
		        $this->errores['grado']="Escribir el grado";
		        
		    }

		    if(!is_string($carrera)){
		        $this->errores['carrera']="Escribir la carrera";
		        
		    }

		    if(!is_numeric($telefono)){
		        $this->errores['telefono']="Ingrese un numero telefonico valido";
		        
		    }

		    if(count($this->errores) ==0 ){
		    	try{
		        	$this->model->crearFormulario($ncontrol, $nombre, $grado, $carrera, $telefono);
		    	}
		    	catch(\Exception $e){
					$this->errores['global']=$e->getMessage();
				}
		    }
				
		}

		public function Listas($params=array()){
			$formularios = $this->model->listarFormularios();
			$this->view->render(explode("\\",get_class($this))[1],"listar",$formularios,$this->getErrores());
		}
		
	}

?>