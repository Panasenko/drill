<?php


if(isset($_GET['services'])){$services = $_GET['services'];}

$res_serv = mysql_query("SELECT * FROM services",$db);
$myrow_serv = mysql_fetch_array($res_serv);
echo "<div class='nav_aside'><ul >";
do
{
    if($services == $myrow_serv['services'] )
        {
            printf("<li><a href='http://skvazhina.pp.ua/uslugi/%s'><b>%s</b></a></li>",$myrow_serv['services'],$myrow_serv['title']);
                      
                       $res_podm = mysql_query("SELECT * FROM cat_podm WHERE id_serv = $services",$db);
                       $myrow_podm = mysql_fetch_array($res_podm);
                       if(!empty($myrow_podm))
                       {echo "<ul>";
                        do{printf("<li><a href='http://skvazhina.pp.ua/uslugi/%s'>%s</a></li>",$myrow_podm['id_serv'],$myrow_podm['title']);}
                        while ($myrow_podm = mysql_fetch_array($res_podm));
                        echo "</ul>";}
        }
    else {printf("<li><a href='http://skvazhina.pp.ua/uslugi/%s'>%s</a></li>",$myrow_serv['services'],$myrow_serv['title']);}
        
           
    
    
}
while ($myrow_serv = mysql_fetch_array($res_serv));
echo"</ul></div>";
?>
<br />
<!--<div class="asid_serch">
<div class="content">
<form action="search.php" method="post" name="search">
	<input placeholder="Поиск" type="search"/>
</form>
</div>
</div>-->
<br />

<p style="margin: 5px auto; text-align: center;"><a href="order.php"><img src="../files/aside_menu/zakaz.png" width="180" height="109" /></a></p><br />
<!--<p style="margin: 5px auto; text-align: center;"><a href="#"><img src="../files/aside_menu/summa.png" width="180" height="109" /></a></p>-->
<p style="margin: 5px auto; text-align: center;"><a href="#"><img src="../files/aside_menu/viza.png" width="180" height="235" /></a></p><br />
<p style="margin: 5px auto; text-align: center;"><a href="#"><img src="../files/aside_menu/garant.png" width="180" height="182"  /></a></p>
