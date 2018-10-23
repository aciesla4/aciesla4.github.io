<?php>
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php>
            $username = $_POST["username"];
            $password = $_POST["password"];

            $servername = "classdb.it.mtu.edu";
            $dbUsername = "wads_rw";
            $dbPassword = "wadsworth";
            $dbName = "wads";

            // Create connection
            $conn = new mysqli ($servername, $dbUsername, $dbPassword, $dbName);

            // Check connection
            if ($conn->connect_eror) {
                die("Connection failed: " . $conn->connect_error);
            } else {
                echo "Connection successful";
            }

            // Prepare and bind
            $sql = "SELECT * FROM User WHERE userName = $username, password = $password";
            $result = $conn->query($sql);

            $row = $result->fetch_assoc();
            if($result->num_rows == 1) {

                // Session variables are saved so that in the profile.php page, the corrent user profile can be loaded
                $_SESSION["theUserName"] = $row["userName"];
                $_SESSION["thePassword"] = $row["password"];

                // Go to that user's profile page
                header("Location: profile.php");
                
                echo "Welcome, $row[name].";
                
            } else if($result->num_rows > 1) {
                echo "There is more than one user with this information, what should we do?";
            }
            else if($result->num_rows == 0) {
                // There are no users with those credentials
                echo "There are no accounts matching that information; please create an account";
            }
        ?>
    </body>
</html>