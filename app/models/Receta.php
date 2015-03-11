<?php

class Receta extends AppModel {
    var $name = 'Receta'; 
    var $useTable = 'recetas';//Debe ser igual el nombre de la tabla, de la clase $name y $usertable
	public $hasAndBelongsToMany = array(
		'Ingrediente' =>
		array(
			'className' => 'Ingrediente',
			'joinTable' => 'receta_ingredientes',
			'foreignKey' => 'receta_id',
			'associationForeignKey' => 'Ingrediente_id'
			)
		);
}

?>