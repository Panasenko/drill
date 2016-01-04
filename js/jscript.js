$(function(){
    

 
// Маска номера телефона   

$("#phone").inputmask("+38(999)9999999");
    
//Датапикер
$( "#date_w" ).datepicker({});  


	$.datepicker.regional['ru'] = {
		closeText: 'Закрыть',
		prevText: '&#x3C;Пред',
		nextText: 'След&#x3E;',
		currentText: 'Сегодня',
		monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
		'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
		monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
		'Июл','Авг','Сен','Окт','Ноя','Дек'],
		dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
		dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
		dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
		weekHeader: 'Нед',
		dateFormat: 'dd.mm.yy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	$.datepicker.setDefaults($.datepicker.regional['ru']);  

    
    
// Форма заказа      
var name,fname,lname,city,strit,number_h,date_w,phone,mail,information,button ;
    
$("#button").click(function(e){
    
    if(($("#name").val()) != "" && ($("#phone").val()) != ""){
    
    
    var newEventObfect = e.preventDefault();
    
    name = $("#name").val();
    fname = $("#fname").val();
    lname = $("#lname").val();
    city = $("#city").val();
    number_h = $("#number_h").val();
    date_w = $("#date_w").val();
    phone = $("#phone").val();
    mail = $("#mail").val();
    information = $("#information").val();
    strit = $("#strit").val();
       
    var data = {"name":name,"fname":fname,"lname":lname,"city":city,"number_h":number_h,"date_w":date_w,"number_phone":phone,"mail":mail,"information":information,"strit":strit}
    $.ajax( "../page/handler.php", {
    cache: false,
    type: "POST",
    data: data,
    success: success});
    
    } // проверке заполнености полей
    else {
        if(($("#name").val()) == "") {
       $("#name").addClass("errorEmpty") 
       setTimeout(function(){$("#name").removeClass("errorEmpty");},1000) }
       if(($("#phone").val()) == "") {
       $("#phone").addClass("errorEmpty")
       setTimeout(function(){$("#phone").removeClass("errorEmpty");},1000) }
    }
    
    
    
    
    

        function success (data){
        if (data == 1){$("#wrapper_order").fadeOut(400).each(setTimeout(resultOk,500));}
        else if (data == 0){$("#wrapper_order").fadeOut(400).each(setTimeout(resultErr,500));}         
        } //функции приема данных    
    
    
    
    
}); //конец функции клика по форме отправить   
    
    
  function resultOk(){$("#order_form").trigger('reset');$("#wrapper_order").fadeIn(500).html("<a href='http://skvazhina.pp.ua/order.php'><img src='../files/massage/zakazOk.png' width='670' height='400' /></a>");}  
  function resultErr(){$("#wrapper_order").fadeIn(500).html("<a href='http://skvazhina.pp.ua/order.php'><img src='../files/massage/zakazErr.png' width='670' height='400' /></a>");}    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
});