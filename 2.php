<?php
	function is_username_valid($username) {
        $cek_username = (preg_match('/[a-z ._]{8-12}/', $username)) ? TRUE : FALSE;
        return $cek_username;
    }    
	function is_password_valid($password) {
        $cek_password = (preg_match('/^([0-9]+[a-z]+(?=.*\d))$/', $password)) ? TRUE : FALSE;
        return $cek_password;
    }

    if(is_username_valid("jon.smith")) {
        echo "Username is Valid";
    }
    else {
        echo "Username is Invalid";
    }
	if(is_password_valid("j0hn5m!th")) {
        echo "Password is Valid";
    }
    else {
        echo "Password is Invalid";
    }
?>
