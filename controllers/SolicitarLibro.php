<?php
	namespace controllers;	
	use libs\Controller;

	class Formulario extends Controller {

		public function __construct(){
			parent::__construct();
			
		}

		public function crear($params=array()){
			//Llamando al metodo del modelo
			if(isset($params['ncontrol']) && isset($params['nombre']) && isset($params['titulo_edicion']) && isset($params['cantidad_ejemplares_prestados']) && isset($params['fecha_entrega']) && isset($params['descripcion'])){
				$this->crearFormulario($params);
			}
			//Renderizando la vista asociada
			$this->view->render(explode("\\",get_class($this))[1], "crear",$this->getErrores());
		}

		public function crearFormulario($params){
			
		    $ncontrol = $params['ncontrol'];
		    $nombre = $params['nombre'];
		    $titulo_edicion = $params['titulo_edicion'];
		    $cantidad_ejemplares_prestados = $params['cantidad_ejemplares_prestados'];
		    $fecha_entrega = $params['fecha_entrega'];
		    $descripcion = $params['descripcion'];

		    if(!is_string($ncontrol)){
		        $this->errores['ncontrol']="Formato incorrecto";
		        
		    }
		    
		    if(!is_string($nombre)){
		        $this->errores['nombre']="Escribir un nombre";
		        
		    }

		    if(!is_string($titulo_edicion)){
		        $this->errores['titulo_edicion']="ingrese el titulo de edicion";
		        
		    }

		     if(!is_numeric($cantidad_ejemplares_prestados)){
		        $this->errores['cantidad_ejemplares_prestados']="Ingrese cantidad de ejemplares prestados";
		        
		    }

		    if(!is_numeric($fecha_entrega)){
		        $this->errores['fecha_entrega']="Ingrese la fecha de entrega";
		        
		    }

		     if(!is_string($descripcion)){
		        $this->errores['descripcion']="Ingrese una descripcion";
		        
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