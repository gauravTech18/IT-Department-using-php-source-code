
function validate()
{
    var username = document.getElementById('username');
    var password = document.getElementById('password');

    if(username.value.trim() == "")
    {
        alert("UserName Cannot Be Empty");
        document.getElementsById("lbuser").style.visibility="visible";

        return false;
    }

    else if(password.value.trim() == "" )
    {
       alert("Password Cannot Be Empty");
        return false;
    }

    else if(password.value.trim().length<5 )
    {
        alert("Password Cannot Be Less Than 5 Characters");
        return false;
    }
    else
    {
        return true;
    }
}
