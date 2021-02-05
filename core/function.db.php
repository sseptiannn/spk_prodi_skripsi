<?php
/* File berisi berbagai function manipulasi database yang bisa dipanggil dalam program 
 @ author CiptaHost
 CRUD -> Create, Read, Update, Delete
	Kamus:
	get_data($atribut,$table,$parameter)	 		-> Function ambil data dari database dengan kriteria "where"
	get_data_desc($atribut,$table,$parameter,$order)	-> Function ambil data dari database semua diurutkan secara Descending	
	get_data_asc($atribut,$table,$parameter,$order)		-> Function ambil data dari database semua diurutkan secara Asccending
	update_data($tabel, $atribut, $parameter)		-> Function update data ke record tabel	
	insert_data($tabel, $values)				-> Function insert record data ke tabel
	delete_data($tabel, $parameter)				-> Function hapus record data dari tabel
	
*/

function get_data($atribut,$table,$parameter)
{
	@$query=(empty($parameter))?mysql_query("SELECT $atribut FROM $table"):mysql_query("SELECT $atribut FROM $table WHERE $parameter");
	@$return=$query;
	return $return;
}

function get_data_desc($atribut,$table,$parameter,$order)
{
	@$query=(empty($parameter))?mysql_query("SELECT $atribut FROM $table ORDER BY $order DESC"):mysql_query("SELECT $atribut FROM $table WHERE $parameter ORDER BY $order DESC");
	@$return=$query;
	return $return;
}

function get_data_asc($atribut,$table,$parameter,$order)
{
	@$query=(empty($parameter))?mysql_query("SELECT $atribut FROM $table ORDER BY $order ASC"):mysql_query("SELECT $atribut FROM $table WHERE $parameter ORDER BY $order ASC");
	@$return=$query;
	return $return;
}

function update_data($tabel, $atribut, $parameter)
{
	@$query=(empty($parameter))?mysql_query("UPDATE $tabel SET $atribut"):mysql_query("UPDATE $tabel SET $atribut WHERE $parameter");
	$return=($query)?TRUE:FALSE;
	return $return;
}

function insert_data($tabel, $values)
{
	@$query=mysql_query("INSERT INTO $tabel SET $values");
	$return=($query)?TRUE:FALSE;
	return $return;
}


function delete_data($tabel, $parameter)
{
	@$query=mysql_query("DELETE FROM $tabel WHERE $parameter");
	$return=($query)?TRUE:FALSE;
	return $return;
} 

?>
