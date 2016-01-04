<?php include("blocks/bd.php");

$res_settings = mysql_query("SELECT * FROM settings WHERE page = 'stock'",$db);
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

<article>
<h1 class="art_title"><?php echo $myrow_settings['title'];?></h1>
<div class="art_text"><? echo $myrow_settings['text'];?></div> 
 </article>
 <aside><?php include("blocks/aside.php"); ?></aside>
<footer><?php include("blocks/footer.php"); ?></footer>
</div> <!-- wrapper -->
</body>
</html>


