<html>
   <body>
   
      <form action = "" method = "GET">
	<table border="1" cellspacing="0">
	   <tr>   
		<th colspan = "3" >Pendaftaran Mahasiswa Berprestasi</th>
	   </tr>
	   <tr> 
		<td >NRP</td>
		<td >:</td>
		<td ><input type="text" name = "NRP" /></td>
	   </tr>
	   <tr> 
		<td >Nama Mahasiswa</td>
		<td >:</td>
		<td ><input type="text" name = "nama" /></td>
	   </tr> 
	   <tr> 
		<td >Kelas</td>
		<td >:</td>
		<td ><input type="text" name = "kelas" /></td>
	   </tr> 
	   <tr> 
		<td >Prodi</td>
		<td >:</td>
		<td ><input type="text" name = "prodi" /></td>
	   </tr> 
	   <tr> 
		<td >Prestasi</td>
		<td >:</td>
		<td ><input type="text" name = "prestasi" /></td>
	   </tr>
	   <tr> 
		<td ></td>
		<td ></td>
		<td ><input type= "submit" /></td>
	   </tr> 
	</table>
      </form>

      <?php
      if(isset ($_GET["NRP"]) || isset($_GET["nama"]) || isset($_GET["kelas"]) || isset($_GET["prodi"]) || isset($_GET["prestasi"]))
      {
		echo'		  
 	<table border= "1" cellspacing = "0">
 	
	<tr>   
		<th colspan = "3" >Pendaftaran Mahasiswa Berprestasi</th>
	   </tr>

		<tr>
		<td >NRP</td>
		<td >:</td>
		<td >' . $_GET["NRP"] .'</td>
	   </tr>

	   <tr> 
		<td >Nama Mahasiswa</td>
		<td >:</td>
		<td >' . $_GET["nama"] . '</td>
	   </tr>

	   <tr> 
		<td >Kelas</td>
		<td >:</td>
		<td >' . $_GET["kelas"] . '</td>
	   </tr>

	   <tr> 
		<td >Prodi</td>
		<td >:</td>
		<td >' .$_GET["prodi"] . '</td>
	   </tr>
		
	   <tr> 
		<td >Prestasi</td>
		<td >:</td>
		<td > ' . $_GET["prestasi"] .  '</td>
	   </tr>
	</table>';
	
      }
      ?>
   </body>
</html>