<?php 


function _login_controller() {

	if(!empty($_POST['username']) && !empty($_POST['password']))
	{
		_load_view('index');
	} else {
		_load_view('login');
	}
}

function _test_controller() {
	_load_view('test');
}


 ?>