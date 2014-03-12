<?php
	session_start();
	
	if( isset( $_POST['submit'])){
		$username = $_POST['name'];
		$surname = $_POST['surname'];
		$login = $_POST['login'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$date = $_POST['date'];
		$phone = $_POST['phone'];
		
		mysql_connect('localhost','root','') or die(mysql_error());
		mysql_select_db('bd') or die(mysql_error());
		
		if(strlen($password) < 6){
			header('localhost: pass.php');
				die("Длина пароля должна быть не меньше 6 символов");
		}
		
		
		$sel = mysql_query('SELECT * FROM users where login = "$login"');
		if($row = mysql_fetch_row($sel))		{
		}
		else{
			if($password == $r_password){
				$password = md5($password);
				mysql_query(INSERT INTO users (username,surname,login,password,email,date,mobile) VALUES ("'.$username.'", "'.$surname.'","'.$login.'", "'.$password.'","'.$email.'" ,"'.$date.'", "'.$phone.'")') or die(mysql_error());
				$_SESSION['login'] = $login;
				header('location: kb.php');
			}
			else {
				echo "password error" ;
				}
		}
	}
?>