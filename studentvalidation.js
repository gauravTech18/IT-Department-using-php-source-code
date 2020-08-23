
function validate()
{
    var id = document.getElementById('id');
    var name = document.getElementById('name');
    var email = document.getElementById('email');
    var mobile = document.getElementById('mobile');
    var password = document.getElementById('password');
    var cpassword = document.getElementById('cpassword');

    if(name.value.trim() == "")
    {
        alert("Name Cannot Be Empty");
        return false;
    }
    else if(email.value.trim() == "")
    {
        alert("Email Cannot Be Empty");
        return false;
    }
    else if(mobile.value.trim() == "")
    {
        alert("contact number Cannot Be Empty");
        return false;
    }
    else if(password.value.trim() == "")
    {
        alert("Password  Cannot Be Empty");
        return false;
    }
    else if(cpassword.value.trim() == "" )
    {
       alert(" confirm Password Cannot Be Empty");
        return false;
    }
    else
    {
        return true;
    }
}
