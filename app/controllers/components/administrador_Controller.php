<?php
class AdministradorController extends AppController{
	var $uses = array('Publicacion','Usuario','Receta');
	var $name = 'Administrador';
	var $layout = 'admin';

	function index(){
		//action logic goes here
		//	$arrPublicaciones = $this->Publicacion->find('all');
		// pr($arrPublicaciones); //imprimir arreglo pr
		//$this->set('publicaciones',$arrPublicaciones);
		$this->layout='admin';	
	}
	function post(){

	}
	function user(){

	}
	function save_post(){
//		pr($this->data);
		$this->Publicacion->create();
		if($this->Publicacion->save($this->data)){
			echo json_encode(array('success' =>true));
		}else{
			echo json_encode(array('success' =>false));
		}
		exit;
	}
	function list_post(){
		$arrPublicaciones = $this->Publicacion->find('all');
		$this->set('publicaciones',$arrPublicaciones);
	}
	function save_user(){
		// pr($this->data);
		$this->Usuario->create();
		if($this->Usuario->save($this->data)){
			echo json_encode(array('success' =>true));
		}else{
			echo json_encode(array('success' =>false));
		}
		exit;
	}
	function list_user(){

			$arrUser = $this->Usuario->find('all');
			// pr($arrUser);
			$this->set('usuario',$arrUser);

	}
	function recetas(){
		$arrRecetas= $this->Receta->find('all');
		pr($arrRecetas); exit;
	}
}
?>