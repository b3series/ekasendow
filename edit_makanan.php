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
	$id=$_GET['id'];
	
		if(isset($_POST['edit_makanan']) && $_POST['edit_makanan']=="Simpan"){
			$id_makanan= $_POST['id_makanan'];
			$nama_makanan = $_POST['nama_makanan'];
			$harga= $_POST['harga'];
		
	
	$sql="update  makanan1 set id_makanan='$id_makanan',nama_makanan = '$nama_makanan',harga= '$harga' where id_makanan='$id'";
	$hasil=mysqli_query($conn,$sql);
	if($hasil)
	{
		?><script language="javascript">alert('Data Berhasil diubah');
	document.location='lihat_makanan.php'</script><?php
	}
	}
	$sql="select * from makanan1 where id_makanan='$id'";
	$hasil=mysqli_query($conn,$sql);
	$data=mysqli_fetch_assoc($hasil);?>
	<form action="" method="post" enctype="multipart/form-data">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><center><strong>
<h1>edit makanan</h1></strong></p>
<table width="432" border="1">
  <tbody>
    <tr>
      <td width="116">ID makanan</td>
      <td width="300"><input name="id_makanan" type="text" id="textfield" size="10" value="<?=$data['id_makanan'];?>"
    </tr>
    <tr>
      <td>Nama makanan</td>
      <td><input name="nama_makanan" type="text" id="textfield2" size="50" value="<?=$data['nama_makanan'];?>">
    </tr>
		  </tr>
    <tr>
      <td>harga</td>
      <td><input name="harga" type="text" id="textfield2" size="50" value="<?=$data['harga'];?>">
    </tr>
  </tbody>
</table>
<p>
  <input type="submit" name="edit_makanan" id="submit" value="Simpan">
 
</p>
		</form>
</body>

</html>