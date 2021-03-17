<?php
    session_start(); 
?>

<DOCTYPE html>
<html>

    <body>
    <?php
    $_SESSION["username"] = array("BUDI","ANDI","AISYAH","FINA");
    $_SESSION["password"] = array("BUDI","ANDI","AISYAH","FINA");
    
    function login()
    {   
        $d=strtotime("today");
        for($int = 0; $int <= count($_SESSION["username"]); $int++)
        {

        if($int >= 4)
        {
            echo "error";
            break;
            
        }elseif($_GET["username"] == $_SESSION["username"][$int] && $_GET["password"] == $_SESSION["password"][$int] && $int < 4)
        {   
            echo "<p> welcome " . $_SESSION["username"][$int]. " </p> <br>" . "<p>" . $_SESSION["username"][$int] . " berhasil login pada ". date("Y-m-d h:i:sa", $d)  . "</p>";  
            break;

        }

        }

    }
    if(isset($_GET["submit"]))
    {
        login();
    }
    ?>
    
    <form action="" method="GET">
    <p style="text-align: center;">Login</p> 
    <p>Username:  <input type="text" name="username"> </p> <br>
    <p>Password:  <input type="text" name="password"> </p> <br>
    <input type="submit" name="submit">
    </form>

    </body>

</html>