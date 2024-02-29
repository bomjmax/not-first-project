<?php
	$connect = mysqli_connect('localhost', 'root', '', 'NewProject');
	if(!$connect){
		die('Ошибка подключения к БД');
	}	