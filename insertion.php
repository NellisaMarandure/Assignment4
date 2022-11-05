<?php
include "database.php";

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $enquiry = $_POST['enquiry'];

    $check_duplicate_enquiry ="SELECT email || enquiry FROM enquiries 
    WHERE email = '$email' || enquiry = '$enquiry' ";

$result = mysqli_query($conn,$check_duplicate_enquiry);
$count = mysqli_num_rows($result);

if ($count>0) {
echo "Enquiry already made";
}
else
    if($name =='' || $email =='' || $number =='' || $enquiry =='' ) {
    echo "Fields cannot be empty!";
    return false;
  }
else{
    $sql = "INSERT INTO enquiries(`name`, `email`, `number`, `enquiry`) VALUES ('$name','$email','$number','$enquiry')";
    $result = mysqli_query($conn,$sql);
    echo"Your enquiry has been recieved";
}
}
?>
