<DOCTYPE html>
<html>

    <body>
    <?php
    function appendFile()
    {
        $filename = "datauser.txt";
        $file = fopen( $filename, "a" );
        if($_GET["username"] == $_GET["password"])
        {
        $date = $_GET["lahir"];
        $date = strtotime($date);
        $date = date('d-m-Y', $date);

        fwrite($file, $_GET["nrp"] . "; " . $_GET["nama"] . "; " . $_GET["prodi"] . "; " . $date . "; " . $_GET["kelamin"] . "; " . $_GET["username"] . "; " . $_GET["password"] .  "; " . "\n" );
        fclose($file);
        
        echo "berhasi";

        }else{

            echo "error";

        }
    }

   
    if(isset($_GET["submit"]))
    {
        appendFile();
    }
    ?>
    
    <form action="" method="GET">

    <p style="text-align: center;">Login</p> 
    <p>NRP:  <input type="text" name="nrp"> </p> <br>
    <p>Nama Mahasiswa:  <input type="text" name="nama" maxlength="30"> </p> <br>
    <p>Alamat:  <input type="text" name="alamat"> </p> <br>
    <p>Program Studi:  <input type="text" name="prodi"> </p> <br>
    <p>Tanggal Lahir:  <input type="date" data-date-format="DD MMMM YYYY" name="lahir"> </p> <br>
    <p>Jenis Kelamin: </p>  <label>Laki-laki: </label> <input type="radio" name="kelamin" value="Laki-Laki">  <br>
    <label>Perempuan: </label> <input type="radio" name="kelamin" value="Perempuan"> </p> <br>
    <p>Username:  <input type="text" name="username"> </p> <br>
    <p>Password:  <input type="text" name="password"> </p> <br>
    <input type="submit" name="submit">

    </form>

    </body>

</html>