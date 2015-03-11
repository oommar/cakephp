<?php

class Usuario extends AppModel {
    var $name = 'Usuario'; //Debe ser igual el nombre de la tabla, de la clase $name y $usertable
    var $useTable = 'usuarios';
	public $hasMany = array(
		'Publicacion' => array (
			'className' => 'Publicacion',
			'foreignKey' => 'usuario_id'
			)
	);
}

?>