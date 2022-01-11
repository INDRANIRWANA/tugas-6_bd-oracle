<?php
include("koneksi.php");

$act=$_GET['act'];

if ($act=='delete'){
	$id_admin=$_GET['id_admin'];
	$sql="DELETE FROM admin_ga WHERE id_admin = '$id_admin'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);
	header('location:admin.php');
}

elseif ($act=='input'){
	$id_admin=$_POST["id_admin"];
	$nama_admin = $_POST["nama_admin"];
 	$NO_HP = $_POST["no_hp"];

   $sql="insert into admin_ga values ('$id_admin','','$nama_admin','$NO_HP') ";
   $prepare = ociparse($koneksi, $sql);
   ociexecute($prepare);
   oci_commit($koneksi);
   

	if($prepare)
	{
		    
	header('location:admin.php');
	
	}
	
	else {echo "gagal";}

}


elseif ($act=='update'){
	$id_karyawan = $_POST["id_karyawan"];
	$nama_karyawan = $_POST["nama_karyawan"];
 	$no_hp = $_POST["no_hp`"];

	$sql = "UPDATE karyawan SET NAMA_KARYAWAN='$nama_karyawan', no_hp ='$no_hp' WHERE ID_KARYAWAN='$id_karyawan'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);

	if($prepare)
	{
	header('location:karyawan.php');
	}
	else {echo "gagal";}

}
?>
