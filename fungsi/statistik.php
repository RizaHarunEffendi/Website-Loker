<?php

include 'koneksi.php';

function klik($ip,$tgl,$id_lowongan)
{
	global $koneksi;
	$sql = "SELECT * FROM tb_backup WHERE ip='$ip' AND tanggal='$tgl' AND id_lowongan='$id_lowongan'";
	if (mysqli_query($koneksi,$sql)->num_rows == 0) {
		$sql = "INSERT INTO tb_backup VALUES('','$id_lowongan','$ip','$tgl',1)";
		echo mysqli_query($koneksi,$sql);
	}
	// else{
	// 	echo "sudah";
	// }
}