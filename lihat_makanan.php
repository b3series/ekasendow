<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	include "../../config/koneksi.php";
	include "menu.php";
	$sql="select * from makanan1";
	$hasil=mysqli_query($conn,$sql);
	$data=mysqli_fetch_assoc($hasil); ?>
	<p>&nbsp;</p>
	<p><center><strong>
	<h1>Daftar makanan</h1></strong></p>
	<p>&nbsp;</p>
<table width="359" border="1">
  <tbody>
    <tr>
      <td width="24">No.</td>
      <td width="79">ID makanan</td>
      <td width="99">Nama makanan</td>
		<td width="99">Harga</td>
      <td width="129">&nbsp;</td>
    </tr>
	  <?php $num=0; do {$num++;?>
	  
    <tr>
		
      <td><?=$num?></td>
      <td><?=$data['id_makanan']?></td>
      <td><?=$data['nama_makanan']?></td>
		 <td><?=$data['harga']?></td>
	  <td>
		  <a href="edit_makanan.php?id=<?=$data['id_makanan'];?>"> 
			  <input type="button" name="button" id="button" value="edit"></a>
		  
	       <a href ="hapus_makanan.php?id=<?=$data['id_makanan'];?>"
		onClick="return confirm('Data ini akan dihapus dari daftar makanan')">
        <input type="button" name="button2" id="button2" value="reset"></a>
    </tr>
	  <?php } while ($data= mysqli_fetch_assoc($hasil));?>
  </tbody>
</table>
	</center>
<p>&nbsp;</p>
</body>
</html>