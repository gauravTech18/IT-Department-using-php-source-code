<?php
  
    $con =   mysqli_connect("localhost","root","") or die("unable to connect");

    $db =     mysqli_select_db($con,'college');


    if(isset($_POST['register']))
    {
      $id = $_POST['id'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $number = $_POST['mobile'];
      $password = $_POST['password'];
      $cpassword = $_POST['cpassword'];
     
 
      $sql = "insert into student_register values('$id','$name','$email','$number','$password','$cpassword')";
  
      $query =mysqli_query($con,$sql);
 
        if($query)
        {
            //echo '<script type ="text/javascript"> alert("Student  has  Registered Successfully") </script>'; 
        }
        else
        {
          echo '<script type ="text/javascript"> alert("Student  Cannot Registered Successfully") </script>';

        }
      
    }
    
?>

<html>
<head>
<title>Demo</title>

            
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
            <link rel="stylesheet" href="./loginc.css">
            <link rel="stylesheet" href="./style.css">

            <link href="https://fonts.googleapis.com/css?family=Elsie+Swash+Caps&display=swap" rel="stylesheet">

           
           
            </head>
            
<body>

<div class="container-fluid top">    
                        <i class="fas fa-mobile-alt"></i> Contact Us at +919766216852
                    </div>    
                
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                              <a class="nav-link" href="index.php"> <i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
                            </li>
                          
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Year
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">First Year</a>
                                <a class="dropdown-item" href="#">Second Year</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Third Year</a>
                              </div>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link " href="StudentLogin.php" tabindex="-1" aria-disabled="false"><i class="fas fa-user-lock"></i> Student Login</a>
                              </li>
                
                              <li class="nav-item">
                                <a class="nav-link " href="TeacherLogin.php" tabindex="-1" aria-disabled="false"><i class="fas fa-user-lock"></i> Teacher Login</a>
                              </li>
                
                              <li class="nav-item">
                                <a class="nav-link " href="AdminLogin.php" tabindex="-1" aria-disabled="false"> <i class="fas fa-lock"></i> Admin Login</a>
                              </li>

                              <li class="nav-item">
                                    <a class="nav-link" href="About.php">About Us</a>
                                  </li>

                             
                                <li class="nav-item  insta">
                                        <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                    
                                <li class="nav-item fb ">
                                            <a class="nav-link" href="#"><i class="fab fa-facebook"></i></a>
                                </li>
                                
                
                          </ul>
                      </nav>

                      <div class="container-fluid">

                            <h1 class="text-center  text-info" style=" margin-top: 40px;">Student Registeration Form</h1>

                       </div>

                    <div class=" d-flex justify-content-center text-center">

                    <form method="post" class="abc" onsubmit="return validate();  return mvalidate();">

                    <input type="text" name="id" id="id" placeholder="ID" readonly  class="form-control  text  text-center" style="margin:.9em 0em;    width: 280px;" autocomplete="off">
                    <input type="text" name="name" id="name"placeholder="Enter your Name" class="form-control  text  text-center" style="margin:.9em 0em;    width: 280px;" autocomplete="off">
                    <input type="text" name="email" id="email" placeholder="Enter your Email" class="form-control  text  text-center" style="margin:.9em 0em;    width: 280px;" autocomplete="off">
                    <input type="text" name="mobile" id="mobile"placeholder="Enter your Mobile Number" class="form-control  text  text-center" style="margin:.9em 0em;    width: 280px;" autocomplete="off">
                    <input type="password" name="password" id="password"placeholder="Enter your password" class="form-control  text  text-center" style="margin:.9em 0em;    width: 280px;" autocomplete="off">
                    <input type="password" name="cpassword" id="cpassword" placeholder="Enter your confirm password" class="form-control  text text-center " style="margin:.9em 0em;    width: 280px;" autocomplete="off">
                    <input type="submit" class="btn btn-success" name="register" value="Register" onclick="validate(); mvalidate()">

                    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/376a7cdf60.js"></script>

            <script src="studentvalidation.js"></script>
            <script src="mobilevalidation.js"></script>

    
</body>
</html>