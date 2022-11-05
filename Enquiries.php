<?php
include("insertion.php");
session_start();
                 ?>

<!DOCTYPE html>
<html>
<head> 
  <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <title> Enquiries </title>
</head>
<body>
    <section id = "ABC"> <BR> <section id = "ABG"> <p> Get Candied with our wide range of Candy Products ! <br> <BR> Make sure to not miss out on our huge sales </p>
        <BR>  </section>
     </section>
         <section id = "image"><img src = "candy.png"> </section> 
             <hr> 
             <h1> <section id = "color"> Candied Treats </section> </h1>
             <br>
             <section id = "ABC">
             <div class = "tab">
             <a href = "index.php" action ="index.php"> <button class = "tablinks" onclick> Home Page </button></a>
                 <a href = "Products.php" action = "Products.php"> <button class = "tabllinks" onclick> Our Products </button> </button></a>
                 <a href = "About.php" action = "About.php" > <button class = "tablinks" onclick > About Us </button></a>
                 <a href = "Enquiries.php" action = "Enquiries.php"> <button class = "tablinks" onclick> Enquiries </button></a>
                   <HR>
             </section>  <br>  <hr>
             </div>
             <br> <br>

             <section id = "ABG">
             <h2> For enquiries, please fill in the form below </h2> <br>
            </section>
             <form action="" style=align-items: center; id = "contact" method = "POST">
             <label for = "name">   Name   :  </label> <input id = "name" name = "name" value = " " size = "30" placeholder="Enter your name here " type = "text"> <i>  (Text field only) </i> <br>
               <br>
               <label for = "email">   Email   :  </label> <input id = "email" name = "email" value = " " size = "30" placeholder="Enter your email" type = "email"> <i>  (Email formatted alphanuemeric field) </i> <br>
               <br> 
               <label for = "number">   Number   :  </label>  <input id = "number" name = "number" value = " " size = "10" placeholder="Enter your 10 digit phone number e.g 07********" type = "tel"> <i>  (Nuemeric only field) </i> <br>
               <br>
               <label for = "enquiry">   Enquiry   :  </label> <br>  <textarea id = "enquiry" wrap = "virtual" name = "enquiry" rows = 5 cols = 20 max length = 200 placeholder="Enter your enquiry" type = "text"> </textarea> <i>  (Memo field) </i> <br>
     <br> <br>

                <button name="submit" type="submit" id="contact-submit">Submit</button>
               
              </form>             
  
             <br>
             <section id = "ABG">
             <section id = "ABC"> 
                 <br> <br> <br>
                 <b> <h2> <p> Subscribe for our newsletters  </p> </h2> </b>
                 <form action = "mailto:candiedtreats@gmail.com">
                     <b> <i> Enter your email here: </i></b> <input email = "Email From" value = " " size = "10"> <br>
                    <br>
                     <input type = "Submit" value = "Subscribe">
                 </form>
             </left>
             <br> <br>
         </section>
             </section>
         
         <section id = "ABG">
             <h2> Follow our socials </h2> <br>
             <a href = "https://www.instagram.com/@candiedtreats"> <img src = "instagram.jpg" length = "3%" width = "3%" alt = "Avatar"> </a>
             <a href = "https://www.facebook.com/@candiedtreats"> <img src = "facebook.png" length = "3%" width = "3%" alt = "Avatar"> </a>
             <a href = "https://www.pinterest.com/@candiedtreats"> <img src = "pinterest.png" length = "3%" width = "3%" alt = "Avatar"> </a>
             <a href = "https://www.tiktok.com/@candiedtreats"> <img src = "tiktok.png" length = "3%" width = "3%" alt = "Avatar"> </a>
             <a href = "https://www.whatsapp.com@candiedtreats"> <img src = "whatsapp.jpg" length = "3%" width = "3%" alt = "Avatar"> </a>
         <br> <br>
              </section>
                 <section id = "ABD"> <br>
                   <div class = "last">
                             <h2> Contact Details </h2>
                             
                         <a href = "+263 78 645 7891" alt color = "white"> +263 78 645 7891 </a> <br> <br>
                         <a href = "+263 78 88 345 1083"> +263 78 88 345 1083 </a> <br><br>
                         <a href = "+263 55 254 1195"> +263 55 254 1195 </a>        
                    <h2> Address </h2>
                         <p>23 Musimba Road <br> <br> Beverly Hills, Chicago <br> <br> Kwekwe, Zimbabwe </p>
             </div> <br>
                  
                 </section>
                 <br> 
                 <section id = "size"> <p> Thank you for doing business with us </p> </section>

</body>

</html>