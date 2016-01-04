<?php 
include("../blocks/bd.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){

if(isset($_POST['name'])) {     
    $name = $_POST['name']; 
    $name = trim($name);
    $name = stripcslashes($name);
    $name = htmlspecialchars($name, ENT_QUOTES);
}

if(isset($_POST['fname'])) {     
    $fname = $_POST['fname']; 
    $fname = trim($fname);
    $fname = stripcslashes($fname);
    $fname = htmlspecialchars($fname, ENT_QUOTES);
}
if(isset($_POST['lname'])) {     
    $lname = $_POST['lname']; 
    $lname = trim($lname);
    $lname = stripcslashes($lname);
    $lname = htmlspecialchars($lname, ENT_QUOTES);
}
if(isset($_POST['date_w'])) {     
    $date_w = $_POST['date_w']; 
    $date_w = trim($date_w);
    $date_w = stripcslashes($date_w);
    $date_w = htmlspecialchars($date_w, ENT_QUOTES);
}
if(isset($_POST['number_phone'])) {     
    $number_phone = $_POST['number_phone']; 
    $number_phone = trim($number_phone);
    $number_phone = stripcslashes($number_phone);
    $number_phone = htmlspecialchars($number_phone, ENT_QUOTES);
}
if(isset($_POST['mail'])) {     
    $mail = $_POST['mail']; 
    $mail = trim($mail);
    $mail = stripcslashes($mail);
    $mail = htmlspecialchars($mail, ENT_QUOTES);
}
if(isset($_POST['information'])) {     
    $information = $_POST['information']; 
    $information = stripcslashes($information);
    $information = htmlspecialchars($information, ENT_QUOTES);
}


$date_o = date("Y-m-d H:i:s");

$result_number_order = mysql_query("SELECT number_order FROM order_drill WHERE number_order =(SELECT MAX(number_order) FROM order_drill)",$db);
$myrow_number_order = mysql_fetch_array($result_number_order);
$number_order = ($myrow_number_order['number_order'] + 1);



$result = mysql_query("INSERT INTO order_drill (name,number_order,lname,fname,date_w,date_o,number_phone,mail,information)values ('$name','$number_order','$lname','$fname','$date_w','$date_o','$number_phone','$mail','$information')");

if ($result == 'true'){ echo "1";} else {echo "0";}

function mail_Result($number_order,$db){
    
    
    $result_or = mysql_query("SELECT * FROM order_drill WHERE number_order = '$number_order'",$db);
    $myrow_or = mysql_fetch_array($result_or); 

      
    $adres = "clearwater_dz@ukr.net,pmv87@ukr.net";
    $sabject = "Поступил новый заказ. Номер заказа: ".$myrow_or['number_order']." ".$myrow_or['date_o'];
    
        $message = " Появился новый заказ от клиента: ".$myrow_or['lname']." ".$myrow_or['name']." ".$myrow_or['fname']."<br/>
        Желаемая дата работ ".$myrow_or['date_w']."<br/>
        Номер телефона клиента:".$myrow_or['number_phone']."<br/>
        Почта клиента: ".$myrow_or['mail']."<br/>
        Текст комментария: ".$myrow_or['information'];
        
    mail($adres,$sabject,$message);
    }



if ($result == 'true'){ mail_Result($number_order,$db);}

}
else{echo "Данные не поступили";}

?>