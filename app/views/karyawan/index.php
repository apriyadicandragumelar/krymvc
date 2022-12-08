<div class="container mt-3">
	<div class="row">
		<div class="col-lg-6">
			<?php  Flasher::flash(); ?>
		</div>
	</div>
<!-- ====================================== AKHIR FLASHER ===========================================-->


	<div class="row mb-3">
		<div class="col-lg-6">
			<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">Tambah Data Karyawan</button>
		</div>
	</div>

<!-- ====================================== AKHIR BUTTON ========================================-->
	<div class="row mb-3">
		<div class="col-lg-12">
			<form action=" <?= BASEURL; ?>/karyawan/cari" method="post">
				<div class="input-group">
				  	<input type="text" class="form-control" placeholder="Cari karyawan.." name="keyword" id="keyword" autocomplete="off">
					<div class="input-group-append">
					    <button class="btn btn-secondary" type="submit" id="tombolCari">Cari</button>
					</div>
				</div>
			</form>
		</div>
	</div>

<!-- ====================================== ROW TABLE ===========================================-->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3 class="mt-2">Daftar karyawan</h3>
				 <table class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Divisi</th>
							<th>Action</th>
						</tr>				
					</thead>
				<tbody>
					<?php $i =1;
					foreach ( $data['kry'] as $kry ) : ?>
				 		<tr>
					  		<th><?= $i++; ?></th>
					  		<td><?= $kry ['nama']; ?></td>
					  		<td><?= $kry ['divisi']; ?></td>
					  		<td>
								<a href="<?= BASEURL; ?>/karyawan/hapus/<?= $kry ['id']; ?>" class="badge badge-danger float-right ml-2" onclick = "return confirm('yakin?');">Hapus</a> 

								<a href="<?= BASEURL; ?>/karyawan/ubah/<?= $kry ['id']; ?>" class="badge badge-success float-right ml-2 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $kry['id']; ?>">Ubah</a>

								<a href="<?= BASEURL; ?>/karyawan/detail/<?= $kry ['id']; ?>" class="badge badge-primary float-right ml-2"> Detail </a>
					   		</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!--======================================= MODAL ===========================================-->
	<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="formModalLabel">Tambah Data karyawan</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
		    <div class="modal-body">
		        <form action="<?= BASEURL; ?>/karyawan/tambah" method="post">
		        	<input type="hidden" name="id" id="id">


		        	<div class="form-group">
				      	<label for="nik">Nama</label>
				      	<input type="nik" class="form-control" id="nik" name="nik" autocomplete="off">
				  	</div>  

		        	<div class="form-group">
				      	<label for="nama">Nik</label>
				      	<input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
				  	</div> 
 
		  
		        	<div class="form-group">
				      	<label for="tempat_tgl_lahir">Tempat, Tanggal Lahir</label>
				      	<input type="tempat_tgl_lahir" class="form-control" id="tempat_tgl_lahir" name="tempat_tgl_lahir" placeholder="Tangerang, dd-mm-yyyy">
				   	</div> 

					<div class="form-group">
					    <label for="jenis_kelamin">Jenis Kelamin</label>
					    	<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
					      	<option value="Laki -Laki">Laki -Laki</option>
					      	<option value="Perempuan">Perempuan</option>
					    </select>
					</div> 

				    <div class="form-group">
				      	<label for="alamat">Alamat</label>
				      	<input type="alamat" class="form-control" id="alamat" name="alamat" placeholder="KP. Samprok">
				  	</div> 

				  	<div class="form-group">
				      	<label for="tgl_masuk">Tanggal Masuk</label>
				      	<input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk">
				  	</div> 

				  	<div class="form-group">
				      	<label for="no_tlp">No Tlp/HP</label>
				      	<input type="no_tlp" class="form-control" id="no_tlp" name="no_tlp" placeholder="08111**** ">
				  	</div> 

				  	<div class="form-group">
				      	<label for="divisi">Divisi</label>
				      	<input type="divisi" class="form-control" id="divisi" name="divisi">
					</div> 
		</div>

<!-- ====================================== AKHIR DATA TAMBAH ===============================-->
			    <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Save Data</button>
			   	</form>

<!-- ====================================== AKHIR FORM ======================================-->
      </div>
    </div>
  </div>
</div>
