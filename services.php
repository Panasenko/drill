<?php include("blocks/bd.php");


if(isset($_GET['services'])) {$services = $_GET['services'];}



$res_settings = mysql_query("SELECT * FROM settings WHERE page = 'services'",$db);
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css"/>
	<title><?php echo $myrow_settings['title'];?></title>
    <script type="text/javascript" src="slide/script.js"></script>
</head>

<body>
<div class="wrapper">
<header><?php include("blocks/header.php"); ?>
<nav><? include ("blocks/nav.php"); ?></nav>
</header>
<article >

<?php

echo "<div class='art_text'>";
echo $myrow_settings['text'];
echo "</div>";


if(empty($services))
{

	$res_services = mysql_query("SELECT * FROM services",$db);
    $myrow_services = mysql_fetch_array($res_services);
  
    
     do{ printf("
     <div class='serv_menu'>
<table cellpadding='1' cellspacing='1' >
	<tbody>
		<tr>
			<td><a href='http://skvazhina.pp.ua/uslugi/%s'><img src='%s' class='serv_mini_img' /></a></td>
		</tr>
		<tr >
			<th><p style='text-align: center; margin-top:10px;' ><a style = 'color: #0E7A91; text-decoration: none;' href='http://skvazhina.pp.ua/uslugi/%s' >%s</a></p></th>
		</tr>
	</tbody>
</table>
</div>",$myrow_services['services'],$myrow_services['mimi_img'],$myrow_services['services'],$myrow_services['title']);}


 while ($myrow_services = mysql_fetch_array($res_services)); 
}
else
{
  $res_services = mysql_query("SELECT * FROM services WHERE services = '$services'",$db);
    $myrow_services = mysql_fetch_array($res_services);  
    echo "<div class='art_text'>";
    echo $myrow_services['text'];
    echo "</div>";
    
    
}

?>


</article>
<aside><?php include("blocks/aside.php"); ?></aside>
<footer><?php include("blocks/footer.php"); ?></footer>
</div> <!-- wrapper -->
</body>
</html>