const system1 = document.getElementById('system1');
const system2 = document.getElementById('system2');
const system3 = document.getElementById('system3');
const system4 = document.getElementById('system4');
const system5 = document.getElementById('system5');
const system6 = document.getElementById('system6');
const system7 = document.getElementById('system7');
const system8 = document.getElementById('system8');
const system9 = document.getElementById('system9');
const system10 = document.getElementById('system10');
const system11 = document.getElementById('system11');
const system12 = document.getElementById('system12');
const system13 = document.getElementById('system13');
const system14 = document.getElementById('system14');
//-------------------------------
const subsystem1 = document.getElementById('subsystem1');
const subsystem2 = document.getElementById('subsystem2');
const subsystem3 = document.getElementById('subsystem3');
const subsystem4 = document.getElementById('subsystem4');
const subsystem5 = document.getElementById('subsystem5');
const subsystem6 = document.getElementById('subsystem6');
const subsystem7 = document.getElementById('subsystem7');
const subsystem8 = document.getElementById('subsystem8');
const subsystem9 = document.getElementById('subsystem9');
//-------------------
const service1 = document.getElementById('service1');
const service2 = document.getElementById('service2');
const service3 = document.getElementById('service3');

//---------------------
const tools1 = document.getElementById("tools1");
const tools2 = document.getElementById("tools2");
const tools3 = document.getElementById("tools3");
const tools4 = document.getElementById("tools4");
const tools5 = document.getElementById("tools5");










const finalpricelable = document.getElementById('finalpricelable');
const offlable = document.getElementById('off');
const taxationlable = document.getElementById('taxation');
const totalpricelable = document.getElementById('totalprice');
const offcontent = document.getElementById('offcontent');



var checked = 1 ;


offlable.innerHTML = "0";



var finalprice = 23000000 ;
var taxition = 0 ;
var off = 0 ;
var totalprice = 0;

offcontent.style.display = "none";

function commafy( num ) {
    var str = num.toString().split('.');
    if (str[0].length >= 5) {
        str[0] = str[0].replace(/(\d)(?=(\d{3})+$)/g, '$1,');
    }
    if (str[1] && str[1].length >= 5) {
        str[1] = str[1].replace(/(\d{3})/g, '$1 ');
    }
    return str.join('.');
}


function calculatefinal()
{
    if(checked > 1)
    {
        off = (finalprice /100)*10 ;
        offcontent.style.display = "table-row";
    }

    if(checked <= 1)
    {
        off = 0;
        offcontent.style.display = "none";
    }

    taxition = (finalprice /100)*9 ;
    totalprice = (finalprice - off) + taxition ;


    finalpricelable.innerHTML = commafy(finalprice) ;
    offlable.innerHTML = commafy(off) ;
    taxationlable.innerHTML = commafy(taxition) ;
    totalpricelable.innerHTML = commafy(totalprice) ;
}

$("#system1").click(function(e) { 
    var checkbox = $(this);
    if (checkbox.is(":checked")) {
     //check it 
    } else {
     // prevent from being unchecked
      this.checked=!this.checked;
    }
 });









//systemsClick---------------------
function handleClick2(cb)
{
    if(system2.checked == true)
    {
        $(".sy2").addClass("syselect");
        finalprice += 37000000 ;
        checked += 1 ;
        calculatefinal();
    }
    if(system2.checked == false)
    {
        $(".sy2").removeClass("syselect");
        finalprice -= 37000000 ;
        checked -= 1 ;
        calculatefinal();
    }    
}
function handleClick3(cb)
{
    if(system3.checked == true)
    {
        $(".sy3").addClass("syselect");
        finalprice += 35000000 ;
        checked += 1 ;
        calculatefinal();
    }
    if(system3.checked == false)
    {
        $(".sy3").removeClass("syselect");
        if( system8.checked == true)
        {
            system8.checked = false ;
            handleClick8();
        }
        if( system14.checked == true)
        {
            system14.checked = false ;
            handleClick14();
        }
        if(system6.checked == true)
        {
            system6.checked = false ;
            handleClick6();
        }
        if( system12.checked == true)
        {
            system12.checked = false ;
            handleClick12();
        }
        finalprice -= 35000000 ;
        checked -= 1 ;
        calculatefinal();
    }   
}
function handleClick4(cb)
{
    if(system4.checked == true)
    {
        $(".sy4").addClass("syselect");
        finalprice += 47000000 ;
        checked += 1 ;
        calculatefinal();
    }
    if(system4.checked == false)
    {
        $(".sy4").removeClass("syselect");

        if(system15.checked == true)
        {
            system15.checked = false ;
            handleClick15();
        }
        if(system14.checked == true)
        {
            system14.checked = false ;
            handleClick14();
        }
        if(system12.checked == true)
        {
            system12.checked = false ;
            handleClick12();
        }
        if(system6.checked == true)
        {
            system6.checked = false ;
            handleClick6();
        }
        if(system10.checked == true)
        {
            system10.checked = false ;
            handleClick10();
        }

        if(subsystem7.checked == true)
        {
            subsystem7.checked = false ;
            handleClicksub7();
        }
        
        if(subsystem6.checked == true)
        {
            subsystem6.checked = false ;
            handleClicksub6();
        }
        if(subsystem3.checked == true)
        {
            subsystem3.checked = false ;
            handleClicksub3();
        }


        finalprice -= 47000000 ;
        checked -= 1 ;
        calculatefinal();
    }
}
function handleClick5(cb)
{
    if(system5.checked == true)
    {
        $(".sy5").addClass("syselect");
        finalprice += 46000000 ;
        checked += 1 ;
        calculatefinal();
    }
    if(system5.checked == false)
    {
        $(".sy5").removeClass("syselect");

        if(system11.checked == true)
        {
            system11.checked = false ;
            handleClick11();
        }
        finalprice -= 46000000 ;
        checked -= 1 ;
        calculatefinal();
    }    
}
function handleClick6(cb)
{

    if(system6.checked == true)
    {
        if(system3.checked == true && (system4.checked == true || system7.checked == true))
        {
            $(".sy6").addClass("syselect");
            finalprice += 47000000 ;
            checked += 1 ;
            calculatefinal();
        }
        else{

            system14.checked = false ;
            system12.checked = false ;
            system6.checked = false ;
            var message = "پیش نیاز های این ایتم : ";
            message += "<br> سیستم دریافت پرداخت" ;
            message += "<br>سیستم تامین کنندگان و انبار تولیدی یا سیستم تامین کنندگان و انبار بازرگانی";
            alert(message);
            return 0 ;
        }
        
    }

    if(system6.checked == false)
    {
        $(".sy6").removeClass("syselect");
        finalprice -= 47000000 ;
        checked -= 1 ;
        calculatefinal();
    }    
}
function handleClick7(cb)
{
    if(system7.checked == true)
    {
        $(".sy7").addClass("syselect");
        finalprice += 42000000 ;
        checked += 1 ;
        calculatefinal();
    }
    if(system7.checked == false)
    {
        $(".sy7").removeClass("syselect");

        if(system14.checked == true)
        {
            system14.checked = false ;
            handleClick14();
        }

        if(system15.checked == true)
        {
            system15.checked = false ;
            handleClick15();
        }
        if(system10.checked == true)
        {
            system10.checked = false ;
            handleClick10();
        }
        if(system12.checked == true)
        {
            system12.checked = false ;
            handleClick12();
        }
        if(system6.checked == true)
        {
            system6.checked = false ;
            handleClick6();
        }

        if(subsystem8 .checked == true)
        {
            subsystem8.checked = false ;
            handleClicksub8();
        }
        if(subsystem7.checked == true)
        {
            subsystem7.checked = false ;
            handleClicksub7();
        }
        if(subsystem6.checked == true)
        {
            subsystem6.checked = false ;
            handleClicksub6();
        }

        if(subsystem3.checked == true)
        {
            subsystem3.checked = false ;
            handleClicksub3();
        }


        finalprice -= 42000000 ;
        checked -= 1 ;
        calculatefinal();
    }
    
}
function handleClick8(cb)
{
   
    if(system8.checked == true)
    {
        if(system3.checked == true)
        {
            $(".sy8").addClass("syselect");
            finalprice += 44000000 ;
            checked += 1 ;
            calculatefinal();
        }else{
            system8.checked = false ;
            var message = "پیش نیاز های این ایتم : ";
            message += "<br> سیستم دریافت پرداخت" ;
            alert(message);
            return 0 ;
        }
    }
    if(system8.checked == false)
    {
        $(".sy8").removeClass("syselect");

        if(subsystem2.checked == true)
        {
            subsystem2.checked = false ;
            handleClicksub2();
        }
        finalprice -= 44000000 ;
        checked -= 1 ;
        calculatefinal();
    }
    
}
function handleClick9(cb)
{
    if(system9.checked == true)
    {
        $(".sy9").addClass("syselect");
        finalprice += 45000000 ;
        checked += 1 ;
        calculatefinal();
    }
    if(system9.checked == false)
    {
        $(".sy9").removeClass("syselect");
        finalprice -= 45000000 ;
        checked -= 1 ;
        calculatefinal();
    }    
}
function handleClick10(cb)
{
    if(system10.checked == true)
    {
        if(system4.checked == true ||  system7.checked == true)
        {
            $(".sy10").addClass("syselect");
            finalprice += 45000000 ;
            checked += 1 ;
            calculatefinal();
        }else{
            system10.checked = false ;
            var message = "پیش نیاز های این ایتم : ";
            message += "<br> سیستم تامین کنندگان و انبار تولیدی یا سیستم تامین کنندگان و انبار بازرگانی" ;
            alert(message);
            return 0 ;
        }
        
    }
    if(system10.checked == false)
    {
        $(".sy10").removeClass("syselect");
        finalprice -= 45000000 ;
        checked -= 1 ;
        calculatefinal();
    }    
}
function handleClick11(cb)
{
    if(system11.checked == true)
    {
        if(system5.checked == true)
        {
            $(".sy11").addClass("syselect");
            finalprice += 110000000 ;
            checked += 1 ;
            calculatefinal();

            tools4.disabled = false;
            tools4.value = 1 ;
            toolprice4.innerHTML = 11000000 ;
            finalprice += 11000000 ;
            calculatefinal();




        }else{
            system11.checked = false ;
            var message = "پیش نیاز های این ایتم : ";
            message += "<br> سیستم حقوق و دستمزد" ;
            alert(message);

            return 0 ;

        }
        
    }
    if(system11.checked == false)
    {
        if(system4.checked == true)
        {
            system4.checked = false ;
            handleClick4();
        }
        $(".sy11").removeClass("syselect");
        finalprice -= 110000000 ;
        checked -= 1 ;
        calculatefinal();

        if(tools4.disabled == false)
        {
            tools4.disabled=true;
            var tex4 = tools4.options[tools4.selectedIndex].text;
            tools4.value = 0 ;
            toolprice4.innerHTML = 0 ;
            finalprice -= (tex4 * 11000000) ;
            calculatefinal();
        }
        
    }    
}
function handleClick12(cb)
{
    if(system12.checked == true)
    {
        if(system3.checked == true  && (system4.checked == true || system7.checked == true) && system6.checked == true && subsystem2.checked == true)
        {
            $(".sy12").addClass("syselect");
            finalprice += 66000000 ;
            checked += 1 ;
            calculatefinal();
        }else{
            system12.checked = false ;

            var message = "پیش نیاز های این ایتم : ";
            message += "<br> سیستم دریافت و پرداخت" ;
            message += "<br> سیستم تامین کنندگان و انبار تولیدی یا سیستم تامین کنندگان و انبار بازرگانی" ;
            message += "<br> سیستم مشتریان و فروش" ;
            message += "<br> فروش پیشرفته" ;

            alert(message);
            return 0 ;

        }
        
    }
    if(system12.checked == false)
    {
        $(".sy12").removeClass("syselect");

        if(system13.checked == true)
        {
            system13.checked = false ;
            handleClick13();
        }

        if(subsystem9.checked == true)
        {
            subsystem9.checked = false ;
            handleClicksub9();
        }
        finalprice -= 66000000 ;
        checked -= 1 ;
        calculatefinal();
    }    
}
function handleClick13(cb)
{
    if(system13.checked == true)
    {
        if(system12.checked == true)
        {
             $(".sy13").addClass("syselect");
            finalprice += 105000000 ;
            checked += 1 ;
            calculatefinal();
        }else{
            system13.checked = false ;
            var message = "پیش نیاز های این ایتم : ";
            message += "<br> سیستم سفارش گیری" ;
            alert(message);
        }
        
    }
    if(system13.checked == false)
    {
        $(".sy13").removeClass("syselect");
        finalprice -= 105000000 ;
        checked -= 1 ;
        calculatefinal();
    }
    
}
function handleClick14(cb)
{
    if(system14.checked == true)
    {
        if(system3.checked == true && (system4.checked == true || system7.checked == true)  && system6.checked == true && subsystem2.checked == true)
        {
            $(".sy14").addClass("syselect");
            finalprice += 105000000 ;
            checked += 1 ;
            calculatefinal();
        }else{
            system14.checked = false ;
            var message = "پیش نیاز های این ایتم : ";
            message += "<br> سیستم حسابداری" ;
            message += "<br>سیستم دریافت و پرداخت";
            message += "<br>سیستم تامین کنندگان و انبار تولیدی یا سیستم تامین کنندگان و انبار بازرگانی";
            message += "<br>سیستم مشتریان و فروش";
            message += "<br>زیر سیستم فروش پیشرفته";
            alert(message);
            return 0 ;

        }
        
    }
    if(system14.checked == false)
    {
        $(".sy14").removeClass("syselect");
        finalprice -= 105000000 ;
        checked -= 1 ;
        calculatefinal();
    }
    
}

function handleClick15(cb)
{
    if(system15.checked == true)
    {
        if(system4.checked == true || system7.checked == true)
        {
            $(".sy15").addClass("syselect");
            finalprice += 55000000 ;
            checked += 1 ;
            calculatefinal();
        }else{
            system15.checked = false ;
            var message = "پیش نیاز های این ایتم : ";
            message += "<br> سیستم تامین کنندگان و انبار تولیدی یا سیستم تامین کنندگان و انبار بازرگانی" ;
            alert(message);
            return 0 ;

        }
        
    }
    if(system15.checked == false)
    {
        $(".sy15").removeClass("syselect");
        finalprice -= 55000000 ;
        checked -= 1 ;
        calculatefinal();
    }
    
}

//sub system click--------------------
function handleClicksub1(cb)
{
    if(subsystem1.checked == true)
    {
        $(".su1").addClass("syselect");
        finalprice += 20000000 ;
        checked += 1 ;
        calculatefinal();
    }
    if(subsystem1.checked == false)
    {
        $(".su1").removeClass("syselect");
        finalprice -= 20000000 ;
        checked -= 1 ;
        calculatefinal();
    }    
}
function handleClicksub2(cb)
{
    if(subsystem2.checked == true)
    {
        if(system6.checked == true || system8.checked == true)
        {
            $(".su2").addClass("syselect");
            finalprice += 30000000 ;
            checked += 1 ;
            calculatefinal();
        }else{
            subsystem2.checked = false ;
            var message = "پیش نیاز های این ایتم : ";
            message += "<br>سیستم مشتریان و فروش یا سیستم فروش خدماتی" ;
            alert(message);
            return 0 ;
        }
    }
    if(subsystem2.checked == false)
    {

        if(system14.checked == true)
        {
            system14.checked = false ;
            handleClick14();
        }
        if(system12.checked == true)
        {
            system12.checked = false ;
            handleClick12();
        }
        $(".su2").removeClass("syselect");
        finalprice -= 30000000 ;
        checked -= 1 ;
        calculatefinal();
    }    
}
function handleClicksub3(cb)
{
    if(subsystem3.checked == true)
    {
        if(system4.checked == true || system7.checked == true)
        {
            $(".su3").addClass("syselect");
            finalprice += 13000000 ;
            checked += 1 ;
            calculatefinal();
        }
        else{
            subsystem3.checked = false;
            var message = "پیش نیاز های این ایتم : ";
            message += "<br>سیستم تامین کنندگان و انبار تولیدی یا سیستم تامین کنندگان و انبار بازرگانی" ;
            alert(message);
            return 0 ;
        }
        
    }
    if(subsystem3.checked == false)
    {
        $(".su3").removeClass("syselect");
        finalprice -= 13000000 ;
        checked -= 1 ;
        calculatefinal();
    }    
}
function handleClicksub4(cb)
{
    if(subsystem4.checked == true)
    {
        $(".su4").addClass("syselect");
        finalprice += 27000000 ;
        checked += 1 ;
        calculatefinal();
    }
    if(subsystem4.checked == false)
    {
        $(".su4").removeClass("syselect");
        finalprice -= 27000000 ;
        checked -= 1 ;
        calculatefinal();
    }    
}
function handleClicksub5(cb)
{
    if(subsystem5.checked == true)
    {
        $(".su5").addClass("syselect");
        finalprice += 7000000 ;
        checked += 1 ;
        calculatefinal();
    }
    if(subsystem5.checked == false)
    {
        $(".su5").removeClass("syselect");
        finalprice -= 7000000 ;
        checked -= 1 ;
        calculatefinal();
    }    
}
function handleClicksub6(cb)
{
    if(subsystem6.checked == true)
    {
        if(system4.checked == true || system7.checked == true)
        {
            $(".su6").addClass("syselect");
            finalprice += 15000000 ;
            checked += 1 ;
            calculatefinal();
        }else{
            subsystem6.checked = false ;
            var message = "پیش نیاز های این ایتم : ";
            message += "<br>سیستم تامین کنندگان و انبار تولیدی یا سیستم تامین کنندگان و انبار بازرگانی" ;
            alert(message);
            return 0 ;

        }
        
    }
    if(subsystem6.checked == false)
    {
        $(".su6").removeClass("syselect");
        finalprice -= 15000000 ;
        checked -= 1 ;
        calculatefinal();
    }    
}
function handleClicksub7(cb)
{
    if(subsystem7.checked == true)
    {
        if(system4.checked == true || system7.checked == true){
            $(".su7").addClass("syselect");
            finalprice += 15000000 ;
            checked += 1 ;
            calculatefinal();
        }else{
            subsystem7.checked = false ;
            var message = "پیش نیاز های این ایتم : ";
            message += "<br>سیستم تامین کنندگان و انبار تولیدی یا سیستم تامین کنندگان و انبار بازرگانی" ;
            alert(message);
            return 0 ;
        }
        
    }
    if(subsystem7.checked == false)
    {
        $(".su7").removeClass("syselect");
        finalprice -= 15000000 ;
        checked -= 1 ;
        calculatefinal();
    }    
}
function handleClicksub8(cb)
{
    if(subsystem8.checked == true)
    {
        if(system7.checked == true)
        {
            $(".su8").addClass("syselect");
            finalprice += 12000000 ;
            checked += 1 ;
            calculatefinal();
        }else{
            subsystem8.checked = false;
            var message = "پیش نیاز های این ایتم : ";
            message += "<br>سیستم تامین کنندگان و انبار بازرگانی" ;
            alert(message);
            return 0 ;
        }
        
    }
    if(subsystem8.checked == false)
    {
        $(".su8").removeClass("syselect");
        finalprice -= 12000000 ;
        checked -= 1 ;
        calculatefinal();
    }    
}
function handleClicksub9(cb)
{
    if(subsystem9.checked == true)
    {
        if(system12.checked == true)
        {
            $(".su9").addClass("syselect");
            finalprice += 33000000 ;
            checked += 1 ;
            calculatefinal();

            tools5.disabled = false;
            tools5.value = 0 ;


        }else{
            subsystem9.checked = false ;
            var message = "پیش نیاز های این ایتم : ";
            message += "<br>سیستم سفارش گیری" ;
            alert(message);
            return 0 ;
        }
        
    }
    if(subsystem9.checked == false)
    {
        $(".su9").removeClass("syselect");
        finalprice -= 33000000 ;
        checked -= 1 ;
        calculatefinal();
    }    
}

//----------------------

function srvice1handle(cb)
{
    if(service1.checked == true)
    {
        $(".sr1").addClass("syselect");
        finalprice += 60000000 ;
        checked += 1 ;
        calculatefinal();
    }
    if(service1.checked == false)
    {
        $(".sr1").removeClass("syselect");
        finalprice -= 60000000 ;
        checked -= 1 ;
        calculatefinal();
    }  
}


function srvice2handle(cb)
{
    if(service2.checked == true)
    {
        $(".sr2").addClass("syselect");
        finalprice += 40000000 ;
        checked += 1 ;
        calculatefinal();
    }
    if(service2.checked == false)
    {
        $(".sr2").removeClass("syselect");
        finalprice -= 40000000 ;
        checked -= 1 ;
        calculatefinal();
    }  
}


function srvice3handle(cb)
{
    if(service3.checked == true)
    {
        $(".sr3").addClass("syselect");
        finalprice += 4000000 ;
        checked += 1 ;
        calculatefinal();
    }
    if(service3.checked == false)
    {
        $(".sr3").removeClass("syselect");
        finalprice -= 4000000 ;
        checked -= 1 ;
        calculatefinal();
    }  
}


//select option tool 1

function selecttools1()
{
    var oldprice = toolprice1.innerHTML;
    finalprice -= oldprice ;



     var tex1 = tools1.options[tools1.selectedIndex].text;
     tex1 *= 15000000 ;
     toolprice1.innerHTML = tex1;


     finalprice += tex1 ;
     calculatefinal();
}

function selecttools2()
{

    var oldprice = toolprice2.innerHTML;
    finalprice-= oldprice ;


     var tex2 = tools2.options[tools2.selectedIndex].text;
     tex2 *= 15000000 ;
     toolprice2.innerHTML = tex2;

     finalprice += tex2 ;
     calculatefinal();
}


function selecttools3()
{
    var oldprice = toolprice3.innerHTML;
    finalprice-= oldprice ;

     var tex3 = tools3.options[tools3.selectedIndex].text;
     tex3 *= 15000000 ;
     toolprice3.innerHTML = tex3;

    
     finalprice += tex3 ;
     calculatefinal();
}

function selecttools4()
{
    var oldprice = toolprice4.innerHTML;

    finalprice -= oldprice ;

     var tex4 = tools4.options[tools4.selectedIndex].text;
     tex4 *= 11000000 ;
     toolprice4.innerHTML = tex4;



     finalprice += tex4 ;
    calculatefinal();
}

function selecttools5()
{

    var oldprice = toolprice5.innerHTML;
    finalprice -= oldprice ;

     var tex5 = tools5.options[tools5.selectedIndex].text;
     tex5 *= 7000000 ;
     toolprice5.innerHTML = tex5;


    finalprice += tex5 ;
    calculatefinal();
}







//alert design ----------------

var ALERT_TITLE = "پيش نياز هاي اين ايتم فعال نميباشد  ";
var ALERT_BUTTON_TEXT = "بله";

if(document.getElementById) {
  window.alert = function(txt) {
    createCustomAlert(txt);
  }
}

function createCustomAlert(txt) {
  d = document;

  if(d.getElementById("modalContainer")) return;

  mObj = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
  mObj.id = "modalContainer";
  mObj.style.height = d.documentElement.scrollHeight + "px";
  
  alertObj = mObj.appendChild(d.createElement("div"));
  alertObj.id = "alertBox";
  if(d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";
  alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth)/2 + "px";
  alertObj.style.visiblity="visible";

  h1 = alertObj.appendChild(d.createElement("h5"));
  h1.appendChild(d.createTextNode(ALERT_TITLE));

  msg = alertObj.appendChild(d.createElement("p"));
  //msg.appendChild(d.createTextNode(txt));
  msg.innerHTML = txt;

  btn = alertObj.appendChild(d.createElement("a"));
  btn.id = "closeBtn";
  btn.appendChild(d.createTextNode(ALERT_BUTTON_TEXT));
  btn.href = "#";
  btn.focus();
  btn.onclick = function() { removeCustomAlert();return false; }

  alertObj.style.display = "block";
  
}

function removeCustomAlert() {
  document.getElementsByTagName("body")[0].removeChild(document.getElementById("modalContainer"));
}
function ful(){
alert('Alert this pages');
}



































+function ($) {
    'use strict';
  
    // DROPDOWN CLASS DEFINITION
    // =========================
  
    var backdrop = '.dropdown-backdrop'
    var toggle   = '[data-toggle="dropdown"]'
    var Dropdown = function (element) {
      $(element).on('click.bs.dropdown', this.toggle)
    }
  
    Dropdown.VERSION = '3.4.1'
  
    function getParent($this) {
      var selector = $this.attr('data-target')
  
      if (!selector) {
        selector = $this.attr('href')
        selector = selector && /#[A-Za-z]/.test(selector) && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
      }
  
      var $parent = selector !== '#' ? $(document).find(selector) : null
  
      return $parent && $parent.length ? $parent : $this.parent()
    }
  
    function clearMenus(e) {
      if (e && e.which === 3) return
      $(backdrop).remove()
      $(toggle).each(function () {
        var $this         = $(this)
        var $parent       = getParent($this)
        var relatedTarget = { relatedTarget: this }
  
        if (!$parent.hasClass('open')) return
  
        if (e && e.type == 'click' && /input|textarea/i.test(e.target.tagName) && $.contains($parent[0], e.target)) return
  
        $parent.trigger(e = $.Event('hide.bs.dropdown', relatedTarget))
  
        if (e.isDefaultPrevented()) return
  
        $this.attr('aria-expanded', 'false')
        $parent.removeClass('open').trigger($.Event('hidden.bs.dropdown', relatedTarget))
      })
    }
  
    Dropdown.prototype.toggle = function (e) {
      var $this = $(this)
  
      if ($this.is('.disabled, :disabled')) return
  
      var $parent  = getParent($this)
      var isActive = $parent.hasClass('open')
  
      clearMenus()
  
      if (!isActive) {
        if ('ontouchstart' in document.documentElement && !$parent.closest('.navbar-nav').length) {
          // if mobile we use a backdrop because click events don't delegate
          $(document.createElement('div'))
            .addClass('dropdown-backdrop')
            .insertAfter($(this))
            .on('click', clearMenus)
        }
  
        var relatedTarget = { relatedTarget: this }
        $parent.trigger(e = $.Event('show.bs.dropdown', relatedTarget))
  
        if (e.isDefaultPrevented()) return
  
        $this
          .trigger('focus')
          .attr('aria-expanded', 'true')
  
        $parent
          .toggleClass('open')
          .trigger($.Event('shown.bs.dropdown', relatedTarget))
      }
  
      return false
    }
  
    Dropdown.prototype.keydown = function (e) {
      if (!/(38|40|27|32)/.test(e.which) || /input|textarea/i.test(e.target.tagName)) return
  
      var $this = $(this)
  
      e.preventDefault()
      e.stopPropagation()
  
      if ($this.is('.disabled, :disabled')) return
  
      var $parent  = getParent($this)
      var isActive = $parent.hasClass('open')
  
      if (!isActive && e.which != 27 || isActive && e.which == 27) {
        if (e.which == 27) $parent.find(toggle).trigger('focus')
        return $this.trigger('click')
      }
  
      var desc = ' li:not(.disabled):visible a'
      var $items = $parent.find('.dropdown-menu' + desc)
  
      if (!$items.length) return
  
      var index = $items.index(e.target)
  
      if (e.which == 38 && index > 0)                 index--         // up
      if (e.which == 40 && index < $items.length - 1) index++         // down
      if (!~index)                                    index = 0
  
      $items.eq(index).trigger('focus')
    }
  
  
    // DROPDOWN PLUGIN DEFINITION
    // ==========================
  
    function Plugin(option) {
      return this.each(function () {
        var $this = $(this)
        var data  = $this.data('bs.dropdown')
  
        if (!data) $this.data('bs.dropdown', (data = new Dropdown(this)))
        if (typeof option == 'string') data[option].call($this)
      })
    }
  
    var old = $.fn.dropdown
  
    $.fn.dropdown             = Plugin
    $.fn.dropdown.Constructor = Dropdown
  
  
    // DROPDOWN NO CONFLICT
    // ====================
  
    $.fn.dropdown.noConflict = function () {
      $.fn.dropdown = old
      return this
    }
  
  
    // APPLY TO STANDARD DROPDOWN ELEMENTS
    // ===================================
  
    $(document)
      .on('click.bs.dropdown.data-api', clearMenus)
      .on('click.bs.dropdown.data-api', '.dropdown form', function (e) { e.stopPropagation() })
      .on('click.bs.dropdown.data-api', toggle, Dropdown.prototype.toggle)
      .on('keydown.bs.dropdown.data-api', toggle, Dropdown.prototype.keydown)
      .on('keydown.bs.dropdown.data-api', '.dropdown-menu', Dropdown.prototype.keydown)
  
  }(jQuery);
  
  
  $(function () {
      $('.selectpicker').selectpicker();
  });