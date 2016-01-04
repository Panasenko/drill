<? include ("bd.php"); ?>

<div class="menu">
<ul>
<?
$res = mysql_query("SELECT * FROM nav ORDER BY position",$db);
$my = mysql_fetch_array($res);

do{ printf("<li><a href='http://skvazhina.pp.ua/%s'>%s</a></li>",$my['url'],$my['title']);}
while ($my = mysql_fetch_array($res));

?>
</ul>
</div>