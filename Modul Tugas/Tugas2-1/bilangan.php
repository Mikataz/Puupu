<?php
include 'operation.php';
$hasil = operation();
echo '<form action= " "method="GET">
        <p>bilangan 1: 
        <input type="text" name="num1" value="0">
        </p>

        <p>
        <select name="taskOption">
          <option value="plus">+</option>
          <option value="minus">-</option>
          <option value="divide">/</option>
          <option value="times">*</option> 
        </select>
        </p>
        
        <p>bilangan 2: 
        <input type="text" name="num2" value="0"></br>
        </p>
        <input type = "submit" name="submit">
      </form>
      <p> Answer : </p>' . $hasil;

?>