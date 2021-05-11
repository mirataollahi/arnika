console.log('salam');

const real_checkbox = document.getElementById('real-checkbox');
const legal_checkbox = document.getElementById('legal-checkbox');


const real_user_form = document.getElementById('real-user-form');
const legal_user_form = document.getElementById('legal-user-form');











real_checkbox.checked = true ;
legal_user_form.style.display = "none";



function realcheckbox(){
    if(real_checkbox.checked == true)
    {
        activeReal();
    }
    if(real_checkbox.checked == false)
    {
        activeLegal();
    }

}

function legalcheckbox(){
    if(legal_checkbox.checked == true)
    {
       activeLegal();
    }
    if(legal_checkbox.checked == false)
    {
        activeReal();
    }
}



function activeReal()
{
    real_checkbox.checked = true;
    legal_checkbox.checked = false;
    $("#real-user-form").show();
    $("#legal-user-form").hide();
}

function activeLegal()
{
    real_checkbox.checked = false;
    legal_checkbox.checked = true;
    $("#real-user-form").hide();
    $("#legal-user-form").show();
}