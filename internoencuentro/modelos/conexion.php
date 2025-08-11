<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=u545591534_usersencuentro",
			            "u545591534_usersencuentro",
			            "mc426&xO");

		$link->exec("set names utf8");

		return $link;

	}

}