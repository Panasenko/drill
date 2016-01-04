<?php include("blocks/bd.php");
$res_settings = mysql_query("SELECT * FROM settings",$db);
$myrow_settings = mysql_fetch_array($res_settings);?>

<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <meta name="description" content="<?php echo $myrow_settings['meta_d'];?>" /> 
    <meta name="keywords" content="<?php echo $myrow_settings['meta_k'];?>" />
    <link href="http://skvazhina.pp.ua/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css"/>
	<title><?php echo $myrow_settings['title'];?></title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jscript.js"></script>
    <script type="text/javascript" src="js/slide.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    
</head>

<body>
    <div class="wrapper">
	<header><?php include("blocks/header.php"); ?>
            <nav><? include ("blocks/nav.php"); ?></nav>
            <div class="slider"><? include ("blocks/slider.php"); ?></div>
    </header>
    <article>
        <h1><?php echo $myrow_settings['title'];?></h1>
        <div class="art_text"><?echo $myrow_settings['text'];?></div>
    </article>
    <aside><?php include("blocks/aside.php"); ?></aside>
    <footer><?php include("blocks/footer.php"); ?></footer>
<<<<<<< HEAD
</div> 

=======
</div> <!-- wrapper -->
>>>>>>> fb0dd6ae394314daee96ae2fb278c71a5e2092ab
</body>

</html>