<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan Oracle </title>
</head>
<body>
<center>
	<h2>CRUD DATA KARYAWAN</h2>
	<center><table border = "1">
		<tr>
			<th>ID KARYAWAN</th>
			<th>NAMA KARYAWAN</th>
			<th>NO HP</th>
			
				
		</tr>
		<?php 
					include 'koneksi.php';
					$stid = oci_parse($koneksi, 'SELECT * from karyawan');

					oci_execute($stid);

					while (($d = oci_fetch_array ($stid, OCI_BOTH)) != false) {
						?>
                      <tr>
                        <td>
						 <?php echo $d['ID_KARYAWAN']; ?>
						</td>
                          <td>
						 <?php echo $d['NAMA_KARYAWAN']; ?>
						</td>
						  <td>
						 <?php echo $d['NO_HP']; ?>
						</td>
                        <td > EDIT|DELETE
                         </td>	                       
                      </tr>                                         
                    </tbody>
					 <?php 
						}
					?>
</table>
</center>
</body>
</html>		