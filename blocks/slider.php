<div class="wrapper_slider">
	<div id="container">
		<div class="sliderbutton" id="slideleft" onclick="slideshow.move(-1)"></div>
		<div id="slider">
			<ul>
			<? $res_slide = mysql_query("SELECT * FROM slider ORDER BY position",$db);
            $my_slide = mysql_fetch_array($res_slide);
            do{ printf("<li><img src='%s' width='1200' height='400' alt='%s' /></li>",$my_slide['url'],$my_slide['alt']);}
            while ($my_slide = mysql_fetch_array($res_slide));?>
            </ul>
		</div>
		<div class="sliderbutton" id="slideright" onclick="slideshow.move(1)"></div>
		<ul id="pagination" class="pagination">
			<ul id="pagination" class="pagination">
            <?
            $res_COUNT = mysql_query("SELECT COUNT(*)FROM slider",$db);
            $myrow_COUNT = mysql_fetch_array($res_COUNT);
            for($a=0;$a <$myrow_COUNT[0];$a++)
            {echo "<li onclick='slideshow.pos(".$a.")'></li>";}

            ?>
		</ul>
	</div>
</div>
<script type="text/javascript">
var slideshow=new TINY.slider.slide('slideshow',{
	id:'slider',
	auto:8,
	resume:false,
	vertical:false,
	navid:'pagination',
	activeclass:'current',
	position:0,
	rewind:false,
	elastic:false,
	left:'slideleft',
	right:'slideright'
});
</script>