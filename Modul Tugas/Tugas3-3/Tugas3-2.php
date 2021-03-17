<?php
    session_start(); 
?>

<DOCTYPE html>
<html>

    <body>
    <?php
    $_SESSION["username"] = array("2110141012","2110141013","2110141014");
    $_SESSION["password"] = array("12","13","14");
    
    function process()
    {   
        $d=strtotime("today");
        for($int = 0; $int <= count($_SESSION["username"]); $int++)
        {

        if($int >= 3)
        {
            echo "error";
            break;
            
        }elseif($_GET["username"] == $_SESSION["username"][$int] && $_GET["password"] == $_SESSION["password"][$int] && $int < 4)
        {   
            echo ' <form> 
            <input type="submit" name="submit value="Logout"> 
            </form>';
            break;

        }

        }

    }

    function login()
    {
    echo '
    <form action="" method="GET">
    <p style="text-align: center;">Login</p> 
    <p>Username:  <input type="text" name="username"> </p> <br>
    <p>Password:  <input type="text" name="password"> </p> <br>
    <input type="submit" name="submit">
    </form>';
    }
    if(isset($_GET["submit"]))
    {
        process();

    }

    ?>
    <?php
        login();
    ?>
    </body>

</html>