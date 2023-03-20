<?php  
$connect = mysqli_connect('localhost','root','','test');
echo "register from";

  // code...

 // include connection.php;

if (isset($_POST['submit'])){
    //extract($_POST);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $Cpassword = $_POST['Cpassword'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $Address = $_POST['Address'];
    $state = $_POST['state'];
    $pin = $_POST['pin'];
    $City= $_POST['City'];
    $Country = $_POST['Country'];

  echo "data taken";
  echo ($name);
  echo ($email);
  echo ($password);
  echo ($Cpassword);
  echo ($phone);
  echo ($gender);
  echo ($Address);
  echo ($state);
  echo ($pin);
  echo ($City);
  echo ($Country);
  
     $sql ="INSERT INTO `REGISTER`(`name`,`email`,`password`,`Cpassword`,`phone`,`gender`,`Address`,`state`,`pin`,`City`,`Country`) 
       VALUES ('$name','$email','$password','$Cpassword','$phone','$gender','$Address','$state','$pin','$City','$Country')";
                 
  
  // if (mysqli_query($conn, $sql)){
  //   echo "successfully";

  // }else{

  //   echo "data not submitted";
    // mysqli_error($connect);
       
       if (mysqli_query($connect, $sql)) {
    echo "successfully";
  }
  else{
    mysqli_error($connect);
  }

}


 //  if(($emp_name =="") || ($emp_name <=2)){
 //    $error_email=  "<span class='error'>Please enter your name</span>";
 //  }
 //  else if(!preg_match("/^[a-zA-Z-' ]*$/",$emp_name){
 //    $error_name= "<span class='error'>Invalid name</span>";
 //  } 
 //  //*************//

 // if(($emp_email =="") || ($emp_email <=2)){
 //    $error_email=  "<span class='error'>Please enter your name</span>";
 //  }
 //  else if(!preg_match("/^[a-zA-Z-' ]*$/",$emp_email){
 //    $error_email= "<span class='error'>Invalid name</span>";
 //  }
 
 // /////*****************

 //   if(($emp_password =="") || ($emp_password <=2)){
 //    $error_password=  "<span class='error'>Please enter your name</span>";
 //  }
 //  else if(!preg_match("/^[a-zA-Z-' ]*$/",$emp_password){
 //    $error_password= "<span class='error'>Invalid name</span>";
 //  }
 //  //*******************

 //   if(($emp_Cpassword =="") || ($emp_Cpassword <=2)){
 //    $error_email=  "<span class='error'>Please enter your name</span>";
 //  }
 //  else if(!preg_match("/^[a-zA-Z-' ]*$/",$Cpassword){
 //    $error_Cpassword= "<span class='error'>Invalid name</span>";
 //  }
 //  //////////***************

 //   if(($emp_phone =="") || ($emp_phone <=2)){
 //    $error_email=  "<span class='error'>Please enter your name</span>";
 //  }
 //  else if(!preg_match("/^[a-zA-Z-' ]*$/",$emp_phone){
 //    $error_phone= "<span class='error'>Invalid name</span>";
 //  }

 //  //***********************

 //   if(($emp_gender =="") || ($emp_gender <=1)){
 //    $error_email=  "<span class='error'>Please enter your name</span>";
 //  }
 //  else if(!preg_match("/^[a-zA-Z-' ]*$/",$emp_gender){
 //    $error_gender= "<span class='error'>Invalid name</span>";
 //  }

?>