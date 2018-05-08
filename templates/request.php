<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$text = $_POST['text'];
	$mailtext = "Письмо отправил "+$name+". Электронная почта "+$email+". Сообщение:"+$text;
	mail("demidova.kd@gmail.com", "Запрос с сайта", $mailtext);
?>