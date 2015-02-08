<?php 


function _model_user_check($value) {
	$table_name = 'users';
	$field_username = 'Username';

	$sql = 'SELECT * FROM ' . $table_name . ' WHERE ' . $field_username . " = '" . $value . "'";

	$checkusername = _db_connect($sql, true);
	if($checkusername == 1) {
		
		return true;
	} else {
		return false;
	}
}

function _model_user_insert($userdata)  {
	$sql = "INSERT INTO users (Username, Password, EmailAddress) VALUES('".$userdata['username']."', '".$userdata['password']."', '".$userdata['email']."')";
	$insertdata = _db_connect($sql);
	if($insertdata) {
		return true;
	} else {
		return false;
	}
}


 ?>