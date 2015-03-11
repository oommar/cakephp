<?php
class MiPaginaController extends AppController{
	var $uses = array('Publicacion');
	function index(){
	//action logic goes here
		$arrPublicaciones = $this->Publicacion->find('all');
		// pr($arrPublicaciones); //imprimir arreglo pr
		$this->set('publicaciones',$arrPublicaciones);
		$this->layout='admin';	
	}
}
?>