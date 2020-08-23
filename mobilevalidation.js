
function mvalidate()
{

    var mobile = document.getElementById('mobile').value;

    var regx =  /^[7-9]\d{9}$/;

    if(regx.test(mobile))
    {
       alert("Valid Mobile Number");
       return true;
    }
    else
    {
        alert("Invalid Mobile Number");
        return false;
    }
}
