<?php
error_reporting(0);
include("connection.php");
$id=$_GET['id'];
$query="select * from forms  where Id='$id'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);
?>
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
<div class="title">Update Student Details</div>
<div class="form" >
    <div class="input_field">
        <label>FirstName</label>
        <input type="text"class="input" name="fname" 
        value="<?php
        echo $result['fname'];
        ?>"
        >
    </div>
    
    <div class="input_field">
        <label>LastName</label>
        <input type="text"class="input" id="last" name="lname"
        value="<?php
        echo $result['lname'];
        ?>">
    </div>
    <div class="input_field">
        <label>Password</label>
        <input type="password"class="input" name="pass"
        value="<?php
        echo $result['pasword'];
        ?>">
    </div>
    <div class="input_field">
        <label>Confirm Password</label>
        <input type="password"class="input" name="cpass"
        value="<?php
        echo $result['cpswd'];
        ?>">
    </div>
    <div class="input_field">
        <label>Gender</label>
        <div class="custom_select">

       <select name="gender">
           <option value="">Select</option>

           <option value="male"
           <?php
        if($result['gender']=='Male'){
            echo "selected";
        }
        ?>
           >Male</option>
           <option value="female"
           
           <?php
        if($result['gender']=='Female'){
            echo "selected";
        }
        ?>
           >Female</option>
       </select>
        </div>
    </div>
    <div class="input_field">
        <label>Email Address</label>
        <input type="email"class="input" name="email"
        value="<?php
        echo $result['email'];
        ?>">
    </div>
    <div class="input_field">
        <label>Phone Number</label>
        <input type="text"class="input" name="phone"
        value="<?php
        echo $result['phone'];
        ?>">
    </div>

    
    <div class="input_field">
        <label>Address</label>
        <textarea class="textarea" name="address"
        ><?php
 echo $result['address'];
        ?></textarea>
    </div>
    <div class="input_field_terms">
        <label class="check">
        <input type="checkbox" name="accept">
        <span class="checkmark"></span>
        </label>
        <p class="para">Agree to terms and condition</p>
    
    </div>
    <div class="input_field">
        <input type="submit" value="Update Form" class="btn" name="update">
    </div>
</div>
    </form>
</div>


</body>
</html>


<?php
if($_POST['update']){
   $first =  $_POST['fname'];
   $second = $_POST['lname'];
   $pwd =    $_POST['pass'];
   $cpwd =   $_POST['cpass'];
   $gender = $_POST['gender'];
   $emai =   $_POST['email'];
   $phn =    $_POST['phone'];
 $addr =   $_POST['address'];


   if($first !="" && $second !="" && $pwd !="" && $cpwd !="" && $gender !="" && $emai !="" && $phn !="" && $addr !=""){
   
  $query=  "UPDATE forms set fname='$first',lname='$second',pasword='$pwd',
  cpswd='cpwd',gender='$gender',email='$emai',phone='$phn',address='$addr' WHERE Id='$id'";
  $data=mysqli_query($conn,$query);
  if($data){
      echo"<script>alert('Record Updated')</script>";
    ?>
    <!-- redirect page ko krna -->
<meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php" />
<?php
      }
      else{
          echo"failed".mysqli_connect_error();
      }}
      else{
          echo "Please Insert empty fields";
      }
}
