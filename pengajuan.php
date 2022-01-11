<!DOCTYPE html>


<?php include'header.php' ?>

<body id="page-top">
  <div id="wrapper">
    <?php include'sidebar.php' ?>
	
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        
		<?php include'topbar.php' ?>
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-left justify-content-between mb-6">
            <h1 class="h3 mb-4 text-gray-800">Form Pengajuan Cuti</h1>
			
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Form Pengajuan cuti</li>
            </ol>		
          </div>
		  
		  <!-- Isi-->
		  <div class="row">
            <div class="col-lg-6">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Pengajuan Cuti</h6>
                </div>
                <div class="card-body">
                  <form method='post' action='aksi_transaksi.php?act=input'>
                    <div class="form-group">
                      <label for="nama">Nama Karyawan</label>
                      <select name='id_karyawan' class='form-control'>
					  <?php
						include 'koneksi.php';
						$stid = oci_parse($koneksi, 'SELECT * from karyawan');
						oci_execute($stid);
						while (($d = oci_fetch_array ($stid, OCI_BOTH)) != false) {
						$id_karyawan = $d["ID_Karyawan"];
						$nama_karyawan = $d["NAMA_karyawan"];
						echo "<option value='$id_Karyawan'>$nama_karyawan</option>";
						}
						?>
						</select>
                      
                    </div>
                    <div class="form-group">
                      <label for="alamat">Jenis cuti</label>
                      <select name='id_beras' class='form-control'>
					  <?php												
						$stid = oci_parse($koneksi, 'SELECT * from cuti');
						oci_execute($stid);
						while (($d = oci_fetch_array ($stid, OCI_BOTH)) != false) {
						$no_registrasi = $d["no_registrasi"];
						$tipe_cuti = $d["tipe_cuti"];
						echo "<option value='$no_registrasi'>$tipe_cuti</option>";
						}
						?>
						</select>	
					  
                    </div>
					<div class="form-group">
                      <label for="berat">Jumlah (Hari)</label>
                      <input type="number" class="form-control" name="" placeholder="">
					  
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
			  </div>
			  </div>

          

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
    
    </div>
  </div>

  

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script> 
<!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>  
</body>

</html>