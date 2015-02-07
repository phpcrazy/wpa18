<?php 


function _login_controller() {

	if(_isPost())
	{
		_load_view('index');
	} else {
		_load_view('login');
	}
}

function _home_controller() {
	_load_view("home");
}

function _test_controller() {
	_load_view('test');
}


function _blog_controller() {
	$page_title = _config_get('blog.title');
	_load_view('blog');
}


function _register_controller() {
	if(_isPost()) {
		$userdata = array(
			'username' 	=> $_POST['username'],
			'password' 	=> $_POST['password'],
			'email' 	=> $_POST['email']
			);
		dump($userdata);
	}
	_load_view('mregister');
}

 ?>