<?php 
    include "database.php";
    $query ='SELECT * FROM enquiries';
    $result = mysqli_query($conn, $query);
?>
<html> 
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        <title> Home Page </title>
    </head>
    <body> 
        <section id = "ABC"> <BR> <section id = "ABG"> <p> Get Candied with our wide range of Candy Products ! <br> <BR> Make sure to not miss out on our huge sales </p>
       <BR>  </section>
    </section>
    <div class = "sticky"> 
        <section id = "image"><img src = "candy.png"> </section> 
            <hr> 
            <h1> <section id = "color"> Candied Treats </section> </h1>
            <br>
            <section id = "ABC">
            <div class = "tab">
                <a href = "index.php" action ="index.php"> <button class = "tablinks" onclick> Home Page </button></a>
                 <a href = "Products.php" action = "Products.php"> <button class = "tabllinks" onclick> Our Products </button> </button></a>
                 <a href = "About.php" action = "About.php" > <button class = "tablinks" onclick > About Us </button></a>
                 <a href = "Enquiries.php" action = "Enquiries.php"> <button class = "tablinks" onclick> Enquiries </button></a>      </section>  <br>  <hr>
        </div> <br>
<hr> 
</div>
<table action = "POST">
    <thead>
    <tr>
        <th> Name </th>
        <th>  Number </th>
        <th> Email </th>
        <th> Enquiry </th>
        <th> Response </th>
        <th> Add Response </th>
</tr>
</thead>
<tbody>
    <?php

    while($rows = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td> <?php echo $rows['name']; ?> <br> </td>
                <td> <?php echo $rows['email']; ?> </td>
                <td> <?php echo $rows['number']; ?> </td>
                <td> <?php echo $rows['enquiry']; ?> </td>
                <td> <?php echo $rows['response']; ?> </td>
                <td text-align = "center"> <a href = "edit.php?id=<?php echo $rows["id"]; ?>"> Edit </a> </td>
            </tr>
            <?php }
 ?>
</tbody>
    </table>

    <a href = "edit.php" action = "edit.php" name = 'id'> <button class = "tablinks" onclick> Respond to Enquiries </button></a><?php 
if (isset($POST['update']))
{
    $id = $_POST['id'];
    $query = "UPDATE 'enquiries' SET name='$_POST[name]', email='$_POST[email]', number='$_POST[number]', enquiry='$_POST[enquiry]', response ='$_POST[response]' WHERE id = '$_POST[id]'";
$query_run = mysqli_query($connection, $query);

if($query_run){
    echo'<script type="text/javascript"> alert("Data Updated") </script>';
}
}
?>
</body>
</html>