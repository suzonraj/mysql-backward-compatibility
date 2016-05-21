<?php
/*
 * MySQL Runner -  Backward Compatibility for MySQL
 * All extension of MySQL was deprecated in PHP 5.5, and it was removed in PHP 7
 * If your application or website is developed in MySQL then all MySQL extension will throw error in PHP 7
 * So, this script will help you to run your website or application in MySQL without any change.
 * But if your server PHP version is support MySQL still now, this script will skip all this automatically.
 *
 * Just include this file before connect to database. That's it.
 *
 * (c) 2016 Almas MD. Estiak - Suzon
 * http://www.amesuzon.com
 */

/** @var mixed $_connect */
if (!empty($_connect)) $_connect = "";

/**
 * Get information about the most recent query
 * @return bool
 */
if(!function_exists('mysql_info')){
	function mysql_info(){
		global $_connect;
		return mysqli_info($_connect);
	}
}

/**
 * Get information about the most recent query
 * @return bool
 */
if(!function_exists('mysql_get_server_info')){
	function mysql_get_server_info(){
		global $_connect;
		return mysqli_get_server_info($_connect);
	}
}

/**
 * Open a connection to a MySQL Server
 * @param $_host
 * @param $_user
 * @param $_password
 * @return mixed|mysqli
 */
if(!function_exists('mysql_connect')){
	function mysql_connect($_host, $_user, $_password){
		global $_connect;
		$_connect = mysqli_connect($_host,$_user,$_password);
		return $_connect;
	}
}

/**
 * Close MySQL connection
 * @return bool
 */
if(!function_exists('mysql_close')){
	function mysql_close(){
		global $_connect;
		return mysqli_close($_connect);
	}
}

/**
 * Select a MySQL database
 * @param $_back_dbname
 * @return bool
 */
if(!function_exists('mysql_select_db')){
	function mysql_select_db($_back_dbname){
		global $_connect;
		return mysqli_select_Db($_connect,$_back_dbname);
	}
}

/**
 * Send a MySQL query
 * @param $sql
 * @return bool|mysqli_result
 */
if(!function_exists('mysql_query')){
	function mysql_query($sql){
		global $_connect;
		return mysqli_query($_connect,$sql);
	}
}

/**
 * Get number of rows in result
 * @param $_result A result set identifier returned by query
 * @return int
 */
if(!function_exists('mysql_num_rows')){
	function mysql_num_rows($result){
		return mysqli_num_rows($result);
	}
}

/**
 * Get number of affected rows in previous MySQL operation
 * @return int
 */
if(!function_exists('mysql_affected_rows')){
	function mysql_affected_rows(){
		global $_connect;
		return mysqli_affected_rows($_connect);
	}
}

/**
 * Returns the text of the error message from previous MySQL operation
 * @return string
 */
if(!function_exists('mysql_error')){
	function mysql_error($_connect){
		return mysqli_error($_connect);
	}
}

/**
 * Returns the numerical value of the error message from previous MySQL operation
 * @return string
 */
if(!function_exists('mysql_errno')){
	function mysql_errno($_connect){
		return mysqli_errno($_connect);
	}
}

/**
 * Fetch a result row as an associative array
 * @param $_result A result set identifier returned by query
 * @return array|null
 */
if(!function_exists('mysql_fetch_assoc')){
	function mysql_fetch_assoc($_result){
		return mysqli_fetch_assoc($_result);
	}
}

/**
 * Fetch a result row as an associative array, a numeric array, or both
 * @param $_result A result set identifier returned by query
 * @return array|null
 */
if(!function_exists('mysql_fetch_array')){
	function mysql_fetch_array($_result,$_result_type=false){
		return mysqli_fetch_array($_result,$_result_type);
	}
}

/**
 *  Get the length of each output in a result
 * @param $_result A result set identifier returned by query
 * @return array|null
 */
if(!function_exists('mysql_fetch_lengths')){
	function mysql_fetch_lengths($_result){
		return mysqli_fetch_lengths($_result);
	}
}

/**
 * Get a result row as an enumerated array
 * @param $_result A result set identifier returned by query
 * @return array|null
 */
if(!function_exists('mysql_fetch_row')){
	function mysql_fetch_row($_result){
		return mysqli_fetch_row($_result);
	}
}

/**
 * Get the ID generated in the last query
 * @return int|string
 */
if(!function_exists('mysql_insert_id')){
	function mysql_insert_id(){
		global $_connect;
		return mysqli_insert_id($_connect);
		
	}
}

/**
 * Free result memory
 * @param $_result A result set identifier returned by query
 */
if(!function_exists('mysql_free_result')){
	function mysql_free_result($_result){
		return mysqli_free_result($_result);
	}
}

/**
 * Get number of fields in result
 * @param $_result A result set identifier returned by query
 * @return int
 */
if(!function_exists('mysql_num_fields')){
	function mysql_num_fields($_result){
		return mysqli_num_fields($_result);
	}
}

/**
 * Fetch a result row as an object
 * @param $_result A result set identifier returned by query
 * @return null|object
 */
if(!function_exists('mysql_fetch_object')){
	function mysql_fetch_object($_result){
		return mysqli_fetch_object($_result);
	}
}

/**
 * Get the type of the specified field in a result
 * @param $_result A result set identifier returned by query
 * @param $_field The field number. This value must be in the range from 0 to number of fields - 1.
 * @return bool|object
 */
if(!function_exists('mysql_field_type')){
	function mysql_field_type($_result, $_field){
		return mysqli_fetch_field_direct($_result,$_field);
	}
}

/**
 * Get name of the table the specified field is in
 * @param $_result A result set identifier returned by query
 * @param $_field The field number. This value must be in the range from 0 to number of fields - 1.
 * @return bool|object
 */
if(!function_exists('mysql_field_table')){
	function mysql_field_table($_result, $_field){
		return mysqli_fetch_field_direct($_result,$_field);
	}
}

/**
 * Get column information from a result and return as an object
 * @param $_result A result set identifier returned by query
 * @return bool|object
 */
if(!function_exists('mysql_fetch_field')){
	function mysql_fetch_field($_result){
		return mysqli_fetch_field($_result);
	}
}

/**
 * Get the name of the specified field in a result
 * @param $_result A result set identifier returned by query
 * @param $_field The field number. This value must be in the range from 0 to number of fields - 1.
 * @return bool|object
 */
if(!function_exists('mysql_field_name')){
	function mysql_field_name($_result, $_field){
		return mysqli_fetch_field_direct($_result,$_field);
	}
}

/**
 * Returns the length of the specified field
 * @param $_result A result set identifier returned by query
 * @param $_field The field number. This value must be in the range from 0 to number of fields - 1.
 * @return bool|object
 */
if(!function_exists('mysql_field_len')){
	function mysql_field_len($_result, $_field){
		return mysqli_fetch_field_direct($_result,$_field);
	}
}

/**
 * Set result pointer to a specified field offset
 * @param $_result A result set identifier returned by query
 * @param $_field The field number. This value must be in the range from 0 to number of fields - 1.
 * @return bool
 */
if(!function_exists('mysql_field_seek')){
	function mysql_field_seek($_data){
		global $_connect;
		return mysqli_field_seek($_connect,$_data);
	}
}

/**
 * Escapes a string for use in a mysql_query
 * @param $_data Unsafe data
 * @return string
 */
if(!function_exists('mysql_escape_string')){
	function mysql_escape_string($_data){
		global $_connect;
		return mysqli_escape_string($_connect,$_data);
	}
}

/**
 *  Escapes special characters in a string for use in an SQL statement
 * @param $_data
 * @return string
 */
if(!function_exists('mysql_real_escape_string')){
	function mysql_real_escape_string($_data){
		global $_connect;
		return mysqli_real_escape_string($_connect,$_data);
	}
}

/**
 * Ping a server connection or reconnect if there is no connection
 * @param $_connect
 * @return bool
 */
if(!function_exists('mysql_ping')){
	function mysql_ping($_connect){
		return mysqli_ping($_connect);
	}
}
