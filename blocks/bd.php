<?php 
define(USER_NAME_DB,"skvazhin");
define(USER_PASSWORD_DB,"8a1f@ip9zsz");
define(NAME_DB,"skvazhin_drill");
define(HOST_NAME,"db.tzk111.nic.ua");


$db = mysql_connect(HOST_NAME,USER_NAME_DB,USER_PASSWORD_DB) or die("Подключение не удалось");
mysql_query ("SET NAMES utf8");
mysql_select_db(NAME_DB,$db) or die("Невозможно выбрать БД");

?>