<?php

class Estudiante {

	public $id;
	public $nombre;
	public $apellido;
	public $correo;
	public $pass;

	function guardar(){

		$sql="insert into estudiante(nombre,apellido,correo,contraseña) values( '($this->nombre)','($this->apellido)','($this->correo)','($this->pass)')";

		mysql_query($sql);
	}


}



