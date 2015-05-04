<?php 
define(USER_NAME_DB,"skvazhin");
define(USER_PASSWORD_DB,"qjWZnD3m668KUXjf");
define(NAME_DB,"skvazhin_drill");
define(HOST_NAME,"localhost");


$db = mysql_connect(HOST_NAME,USER_NAME_DB,USER_PASSWORD_DB) or die("Подключение не удалось");
mysql_query ("SET NAMES utf8");
mysql_select_db(NAME_DB,$db) or die("Невозможно выбрать БД");

?>