<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$text = $_POST['text'];
	
	$mailtext = array(
		fio => "Сообщение от: ".$name,
		email => ". Эл.почта: ".$email,
		phone => ". Номер телефона: ".$phone,
		mess => ". Текст запроса: ".$text.".",
	);
	foreach ($mailtext as $value) {
		$mailtext_fin .= $value;
	};
	mail("info@ros-allyans.ru", "Запрос с сайта", $mailtext_fin);

	$ip_address = $_SERVER['REMOTE_ADDR'];
	$date = $_SERVER['REQUEST_TIME'];

	$link = mysql_connect('localhost', 'ksenia', '1710');
	if(!$link) die ("Невозможно подключиться к базе данных");
	$bd = "zaprosy_vs_posetiteli";
	mysql_select_db($bd) or die ("Нневозможно открыть базу данных $bd");
	$query = "INSERT INTO zaprosy VALUES ('".$name."', '".$email."', '".$phone."', '".$text."', '".$ip_address."', '".$date."')";
	mysql_query($query);
	mysql_close($link);
?>