<?php

//   各々のローカル
	$db_host = "localhost";  // DBサーバのurl
	$db_user = "root";
	$db_password = "root";
	$db_dbname = "forest";

	// 　統合環境1
	// $db_host = "192.168.0.82:3306";  // DBサーバのurl
	// $db_user = "root";
	// $db_password = "kslabkslab";
	// $db_dbname = "nishida2";

	// mysqlへの接続
	$mysqli = new mysqli($db_host, $db_user, $db_password, $db_dbname);
	if ($mysqli->connect_error) {
	  print('<p>データベースへの接続に失敗しました。</p>' . $mysqli->connect_error);
	  exit();
	} else {
    $mysqli->set_charset("utf8");
	}

?>