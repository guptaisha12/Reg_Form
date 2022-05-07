<html>
    <head>
        <title>Display</title>
        <style>
            body{
background-color: violet;
            }
            table{
                background-color: white;
            }
            .upate{
                background-color: green;
                color: white;
                outline: none;
                border: 0;
                border-radius: 5px;
                height: 22px;
                width: 50px;
                cursor: pointer;
            }
            .delete{
                background-color: red;
                color: white;
                outline: none;
                border: 0;
                border-radius: 5px;
                height: 22px;
                width: 50px;
                cursor: pointer;
            }
        </style>
    </head>
</html>
<?php
error_reporting(0);
include("connection.php");
$query="SELECT * FROM forms ";
$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);

$result=mysqli_fetch_assoc($data);


echo $total;
if($total !=0){
    ?>

<h2 align="center"><mark>Displaying all records</mark></h2>
<center>
    <table border="2" cellspacing="6" width="90%">
        
    <tr>
    <th width="1%">Id</th>
<th width="8%">FirstName</th>
<th width="8%">LastName</th>
<th width="7%">Gender</th>
<th width="14%">Email</th>
<th width="14%">Phone</th>
<th width="5%">Caste</th>
<th width="30%">Address</th>
<th width="10%">Operations</th>
</tr>
    <?php
    while($result=mysqli_fetch_assoc($data)){
      echo "<tr>
      <td>".$result['Id']."</td>
      <td>".$result['fname']."</td>
        <td>".$result['lname']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['email']."</td>
        <td>".$result['phone']."</td>
        <td>".$result['caste']."</td>
        <td>".$result['address']."</td>
        <td><a href='update_design.php?id=$result[Id] '><input type='submit'value='update' class='upate'
        </a>
        <a href='delete.php?id=$result[Id] '><input type='submit'value='delete' class='delete' onclick='return checkdelete()'</td>
        </tr>
        ";
    }
}



else{
    echo"no record";
}
?>
 </table>

</center>
<script>
function checkdelete(){
return confirm("Are You Sure You Want To This Data");
}
</script>