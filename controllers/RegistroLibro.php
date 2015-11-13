<?php
	namespace controllers;	
	use libs\Controller;

	class Formulario extends Controller {

		public function __construct(){
			parent::__construct();
			
		}

		public function crear($params=array()){
			//Llamando al metodo del modelo
			if(isset($params['codigo']) && isset($params['titulo_edicion']) && isset($params['ISBN']) && isset($params['autor']) && isset($params['genero']) && isset($params['descripcion']) && isset($params['año_publicacion']) && isset($params['editorial']) && isset($params['fecha_publicacion']) && isset('ciudad_publicacion'])&& isset($params['cantidad_ejemplares']) && isset($params['cantidad_ejemplares_prestados']) && isset('numero_de_paginas'])){
				$this->crearFormulario($params);
			}
			//Renderizando la vista asociada
			$this->view->render(explode("\\",get_class($this))[1], "crear",$this->getErrores());
		}

		public function crearFormulario($params){
			
		    $codigo = $params['codigo'];
		    $titulo_edicion = $params['titulo_edicion'];
		    $ISBN = $params['ISBN'];
		    $autor = $params['autor'];
		    $genero = $params['genero'];
		    $descripcion = $params['descripcion'];
		    $año_publicacion = $params['año_publicacion'];
		    $editorial = $params['editorial'];
		    $fecha_publicacion = $params['fecha_publicacion'];
		    $ciudad_publicacion = $params['ciudad_publicacion'];
		    $cantidad_ejemplares = $params['cantidad_ejemplares'];
		    $cantidad_ejemplares_prestados = $params['cantidad_ejemplares_prestados'];
		    $numero_de_paginas = $params['numero_de_paginas'];

		    if(!is_string($codigo)){
		        $this->errores['codigo']="Ingrese el codigo";
		        
		    }
		    
		    if(!is_string($titulo_edicion)){
		        $this->errores['titulo_edicion']="ingrese el titulo de edicion";
		        
		    }

		    if(!is_string($ISBN)){
		        $this->errores['ISBN']="Ingrese el codigo de ISBN";
		        
		    }

		    if(!is_string($autor)){
		        $this->errores['autor']="Escribe el autor del libro";
		        
		    }

		    if(!is_string($genero)){
		        $this->errores['genero']="Ingrese el genero";
		        
		    }
		    if(!is_string($descripcion)){
		        $this->errores['descripcion']="Ingrese una descripcion";
		        
		    }
		    if(!is_numeric($año_publicacion)){
		        $this->errores['año_publicacion']="Ingrese el año de publicacion";
		        
		    }
		    if(!is_string($editorial)){
		        $this->errores['editorial']="Ingrese la editorial";
		        
		    }
		    if(!is_numeric($fecha_publicacion)){
		        $this->errores['fecha_publicacion']="Ingrese la fecha de publicacion";
		        
		    }
		    if(!is_string($ciudad_publicacion)){
		        $this->errores['ciudad_publicacion']="Ingrese la ciudad de publicacion";
		        
		    }
		    if(!is_numeric($cantidad_ejemplares)){
		        $this->errores['cantidad_ejemplares']="Ingrese cantidad_ejemplares";
		        
		    }

		    if(!is_numeric($cantidad_ejemplares_prestados)){
		        $this->errores['cantidad_ejemplares_prestados']="Ingrese cantidad de ejemplares prestados";
		        
		    }

		    if(!is_numeric($numero_de_paginas)){
		        $this->errores['numero_de_paginas']="Ingrese el numero de página";
		        
		    }

		    if(count($this->errores) ==0 ){
		    	try{
		        	$this->model->crearFormulario($codigo, $titulo_edicion, $ISBN, $autor, $genero, $descripcion, $año_publicacion, $editorial, $fecha_publicacion, $ciudad_publicacion, $cantidad_ejemplares, $cantidad_ejemplares_prestados);
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