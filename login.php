<html> 
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="mystyle.css">  
        <title> Home Page </title>
    </head>
    <body> 

      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Admin Log-In</button>

      <div id="id01" class="modal">
        
        <form class="modal-content animate"  method="post" action = "responses.html">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          </div>
      
          <div class="container">
            <label for="username"><b>Username</b></label>
            <input type="text" id = "username" placeholder="Enter Username" name="username" required>
      
            <label for="password"><b>Password</b></label>
            <input type="password" id = "password" placeholder="Enter Password" name="password" required>
              
            <button type="submit" id = "SubmitBtn">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>
      
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"> Cancel </button>
          </div>
        </form>
      </div>
      
      <script>
      
      
      let data = {username: username.value, password: password.value }
      
      
      
      e.preventDefault();
      
      const username = loginForm.username.value;
      const password = loginForm.password.value;
      
      
      
      if (username === "admin" && password === "admin") {
          
              errorLabel.style.color = "pink";
              errorLabel.textContent = msg;
              window.location.replace = ("responses.html");
      } 
      else {
          msg.toLowerCase() == "Logging in has failed"; {
              errorLabel.style.color = "white";
              errorLabel.textContent = msg;
      }
      
      
      
      
      // Get the modal
      var modal = document.getElementById('id01');
      
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
      </script>
</body>
</html>