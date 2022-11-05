<?php 
include ("database.php");

?>
<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        <title> Add Response </title>
      <?php

        $status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$name =$_REQUEST['name'];
$email =$_REQUEST['email'];
$number =$_REQUEST['number'];
$enquiry =$_REQUEST['enquiry'];
$response =$_REQUEST['response'];
$update="update new_record set name='".$name."',
email='".$email."', number='".$number.",
enquiry='".$enquiry.", response='".$response."
 where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='responses.php'> Responses </a>";
echo '<p style="color:black;">'.$status.'</p>';
}else {
    ?>
    <?php 
    echo "Editing failed"; ?>
    <?php 
}?>

    </head>
    </html>