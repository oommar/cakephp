<?php

class Publicacion extends AppModel {
    var $name = 'Publicacion';
    var $useTable = 'publicaciones';
    public $belongsTo = array(
		'Usuario' => array(
			'className'=>'Usuario',
			'foreignKey'=>'usuario_id'
			)
    	);
}

?>