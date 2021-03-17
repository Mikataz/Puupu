<!DOCTYPE html>


<html>
   <body>
   
      <form action = "" method = "GET">
         Number: <input type="text" name = "NRP" />
         <input type= "submit" />
      </form>

      <?php
      $_GET = "";
         if($_GET["NRP"] == "2110141037")
         {
            $num = rand(1,3);
            switch($num)
            {
            case 1:
               $image_file = "car-1.jpg";
               echo "<img src=$image_file>";
               break;
            case 2:
               $image_file = "car-2.jpg";
               echo "<img src=$image_file>";
               break;
            case 3:
               $image_file = "car-3.jpg";
               echo "<img src=$image_file>";
               break;
               
            }
         }elseif($_GET["NRP"] == "2110141038")
         {
            $num = rand(1,3);
            switch($num)
            {  case 1:
               $image_file = "smartphone-1.jpg";
               echo "<img src=$image_file>";
               break;
            case 2:
               $image_file = "smartphone-2.jpg";
               echo "<img src=$image_file>";
               break;
            case 3:
               $image_file = "smartphone-3.jpg";
               echo "<img src=$image_file>";
               break;
               
            }
         }elseif($_GET["NRP"] == "2110141039")
         {
            $num = rand(1,3);
            switch($num)
            {
            case 1:
               $image_file = "motorcycle-1.jpg";
               echo "<img src=$image_file>";
               break;
            case 2:
               $image_file = "motorcycle-2.jpg";
               echo "<img src=$image_file>";
               break;
            case 3:
               $image_file = "motorcycle-3.jpg";
               echo "<img src=$image_file>";
               break;
            }
         }else{
            echo"wrong NRP";
         }
         ?>
   </body>
</html>