<!DOCTYPE html>
<html>
   <body>
      <?php
         $username = $_GET['username1'];
         $password = $_GET['password1'];
         foreach($dbh->query("SELECT * FROM User WHERE userName = '$username' AND password = '$password'") as $row) {
            $_SESSION["name"] = $name;
         }
         <p>
            echo 'Welcome '.$name.'!';
         </p>
      ?>
   </body>
</html>
