<?php

                 $servername = "sql9.freemysqlhosting.net";
                 $username = " SQL9543487";
                 $password = "5IPwZAikr9";
                 $dbname = "sql9543487";
                 
                 // Create connection
                 $conn =  mysqli_connect($servername, $username, $password, $dbname);
                 // Check connection
                 if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
                 }
                
                 ?>