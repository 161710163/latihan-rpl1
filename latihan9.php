<?php
	require_once 'latihan8.php';
	
	$identitas1 = new identitas ('Roger','Hutan','Mobile legend','Pembunuh');

	echo " nama : " .$identitas1->get_nama(). '<br>';
	echo " tempat lahir : " .$identitas1->get_tempatlahir(). '<br>';
	echo " kelas : " .$identitas1->get_kelas(). '<br>';
	echo " status : " .$identitas1->get_status(). '<br>';
?>