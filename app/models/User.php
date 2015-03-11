<?php

class User extends AppModel {
    var $name = 'User'; //Debe ser igual el nombre de la tabla, de la clase $name y $usertable
    var $useDbConfig = 'admin';
    var $useTable = 'users';
}


?>