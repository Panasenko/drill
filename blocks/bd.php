<?php 
define(USER_NAME_DB,"skvazhin");
<<<<<<< HEAD
define(USER_PASSWORD_DB,"8a1f@ip9zsz");
define(NAME_DB,"skvazhin_drill");
define(HOST_NAME,"db.tzk111.nic.ua");
=======
define(USER_PASSWORD_DB,"qjWZnD3m668KUXjf");
define(NAME_DB,"skvazhin_drill");
define(HOST_NAME,"localhost");
>>>>>>> fb0dd6ae394314daee96ae2fb278c71a5e2092ab


$db = mysql_connect(HOST_NAME,USER_NAME_DB,USER_PASSWORD_DB) or die("Подключение не удалось");
mysql_query ("SET NAMES utf8");
mysql_select_db(NAME_DB,$db) or die("Невозможно выбрать БД");

?>