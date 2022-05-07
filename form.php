<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php crud</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<div class="container">
    <form action="#" method="POST">
<div class="title">Registration Form</div>
<div class="form" >
    <div class="input_field">
        <label>FirstName</label>
        <input type="text"class="input" name="fname">
    </div>
    
    <div class="input_field">
        <label>LastName</label>
        <input type="text"class="input" id="last" name="lname">
    </div>
    <div class="input_field">
        <label>Password</label>
        <input type="password"class="input" name="pass">
    </div>
    <div class="input_field">
        <label>Confirm Password</label>
        <input type="password"class="input" name="cpass">
    </div>
    <div class="input_field">
        <label>Gender</label>
        <div class="custom_select">
       <select name="gender">
           <option>Select</option>
           <option>Male</option>
           <option>Female</option>
       </select>
        </div>
    </div>
    <div class="input_field">
        <label>Email Address</label>
        <input type="email"class="input" name="email">
    </div>
    <div class="input_field">
        <label>Phone Number</label>
        <input type="text"class="input" name="phone">
    </div>
    <div class="input_field" >
        <label style="margin-right: 150px;">Caste</label>
        <input type="radio" name="r1" value="General" required><label style="margin-left: 5px;">General</label>
        <input type="radio" name="r1" value="OBC" required><label style="margin-left: 5px;">OBC</label>
        <input type="radio" name="r1" value="SC" required><label style="margin-left: 5px;">SC</label>
        <input type="radio" name="r1" value="ST" required><label style="margin-left: 5px;">ST</label>
    </div>
    <div class="input_field" >
        <label style="margin-right: 150px;">Languages</label>
        <input type="checkbox" name="language[]" value="Hindi" ><label style="margin-left: 5px;">Hindi</label>
        <input type="checkbox" name="language[]" value="English" ><label style="margin-left: 5px;">English</label>
        <input type="checkbox" name="language[]" value="Pubjabi" ><label style="margin-left: 5px;">Punjabi</label>
        
    </div>
    <div class="input_field">
        <label>Address</label>
        <textarea class="textarea" name="address"></textarea>
    </div>
    <div class="input_field_terms">
        <label class="check">
        <input type="checkbox" name="accept">
        <span class="checkmark"></span>
        </label>
        <p class="para">Agree to terms and condition</p>
    
    </div>
    <div class="input_field">
        <input type="submit" value="Register" class="btn" name="button">
    </div>
</div>
    </form>
</div>


</body>
</html>


<?php
if($_POST['button']){
   $first =  $_POST['fname'];
   $second = $_POST['lname'];
   $pwd =    $_POST['pass'];
   $cpwd =   $_POST['cpass'];
   $gender = $_POST['gender'];
   $emai =   $_POST['email'];
   $phn =    $_POST['phone'];
   $caste=  $_POST['r1'];
   $langu=  $_POST['language'];
$lang1=implode(", ",$langu);
   $addr =   $_POST['address'];


   if($first !="" && $second !="" && $pwd !="" && $cpwd !="" && $gender !="" && $emai !="" && $phn !="" && $lang1!="" && $caste!="" && $addr !=""){
   
  $query=  "INSERT INTO forms(fname,lname,pasword,cpswd,gender,email,phone,caste,language,address) values('$first','$second','$pwd','$cpwd','$gender','$emai','$phn','$caste','$lang1','$addr')";
  $data=mysqli_query($conn,$query);
  if($data){
      echo"data insrted";
      }
      else{
          echo"failed".mysqli_connect_error();
      }}
      else{
          echo "Please Insert empty fields";
      }
}


?>