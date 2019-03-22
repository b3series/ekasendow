<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php 
	include "../../config/koneksi.php";
	
		if(isset($_POST['tambah_makanan']) && $_POST['tambah_makanan']=="Simpan"){
			$id_makanan= $_POST['id_makanan'];
			$nama_makanan = $_POST['nama_makanan'];
			$harga= $_POST['harga'];
		
	
	$sql="insert into makanan1 values ('$id_makanan', '$nama_makanan', '$harga')";
	$hasil=mysqli_query($conn,$sql);
	if($hasil)
	{
		?><script language="javascript">alert('Data Berhasil Ditambah');
	document.location='lihat_makanan.php'</script><?php
	}
	}?>
	<form action="" method="post" enctype="multipart/form-data">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><center><strong>
<h1>Tambah makanan</h1></strong></p>
<table width="432" border="1">
  <tbody>
    <tr>
      <td width="116">ID makanan</td>
      <td width="300"><input name="id_makanan" type="text" id="textfield" size="10"></td>
    </tr>
    <tr>
      <td>Nama makanan</td>
      <td><input name="nama_makanan" type="text" id="textfield2" size="50"></td>
    </tr>
	  <tr>
      <td>harga makanan</td>
      <td><input name="harga" type="text" id="textfield2" size="50"></td>
    </tr>
  </tbody>
</table>
<p>
  <input type="submit" name="tambah_makanan" id="submit" value="Simpan">
  <input type="reset" name="reset" id="reset" value="Reset">
</p>
		</form>
</body>

</html>