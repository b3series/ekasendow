<?php
include "../../config/koneksi.php";

$id=$_GET['id'];
$sql="delete from kasir1 where id_kasir = '$id'";
$hasil=mysqli_query($conn,$sql);
		
		if($hasil)
		{
		?><script language="JavaScript">alert('data telah dihapus');
			document.location='lihat_kasir.php'</script><?php
		}
?>