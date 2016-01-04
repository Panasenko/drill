<?php include("blocks/bd.php");

$res_settings = mysql_query("SELECT * FROM settings WHERE page = 'order'",$db);
$myrow_settings = mysql_fetch_array($res_settings);


 ?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8" />
	<meta name="author" content="admin" />
    <meta name="description" content="<?php echo $myrow_settings['meta_d'];?>" /> 
    <meta name="keywords" content="<?php echo $myrow_settings['meta_k'];?>" />
    <link href="http://skvazhina.pp.ua/css/style.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery.inputmask.js" type="text/javascript"></script>
	<title><?php echo $myrow_settings['title'];?></title>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/jscript.js" type="text/javascript"></script>
    <script src="js/inputmask.js" type="text/javascript"></script>
    <script src="js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    
    </head>

<body>


<div class="wrapper">
<header><?php include("blocks/header.php"); ?>
<nav><? include ("blocks/nav.php"); ?></nav>
</header>
<article>
    <h1 class="art_title"><?php echo $myrow_settings['title'];?></h1>
    <div class="art_text"><? echo $myrow_settings['text'];?></div> 
    
<div id="wrapper_order">
<form action="page/handler.php" name='form' method="POST" id="order_form">
<table >
	<tbody id="table_order">
		<tr>
			<td><input id="name" name="name" type="text" placeholder="Имя*" title="Введите Ваше имя" required='required' maxlength='500' /></td>
			<td><input id="fname" name="fname" type="text" placeholder="Отчество" title="Введите отчество" /></td>
			<td><input id="lname" name="lname" type="text" placeholder="Фамилия" title="Введите Вашу фамилию" /></td>
		</tr>
		<tr>
			<td><input id="date_w" name="date_w" type="text" placeholder="Желаемая дата работ" title="Выберете желаемую дату выполнения работ" /></td>
			<td><input id="phone" name="number_phone" type="text"  title="Введите Ваш номер телефона"   placeholder="Введите номер телефона*" /></td>
			<td><input id="mail" name="mail" type="email" placeholder="mail@my.com"  /></td>
		</tr>
		<tr>
			<td colspan="3"><textarea cols="60" id="information" name="information" placeholder="Дополнительная информация" title="Оставьте свои пожелания или дополнительную информацию по заказу или адресу проведения работ" maxlength='500' ></textarea></td>
		</tr>
	</tbody>
</table>
<p><button type="button" class="btn btn-primary btn-sm" id="button" name="button"  >Оформить заказ</button></p>


</form>
</div>


</article>
<aside><?php include("blocks/aside.php"); ?></aside>
<footer><?php include("blocks/footer.php"); ?></footer>
</div> <!-- wrapper -->
</body>
</html>

















