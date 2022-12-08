
<div class="container mt-3">
	<div class="row">
		<div class="col-lg-6">
		  <h3 >Daftar Karyawan</h3>
			<ul class="list-group">
				<li class="list-group-item">
					<p class="card-title"> NIK 					: <?= $data['kry']['nik']; ?></p>
					<p class="card-text"> Nama 					: <?= $data ['kry']['nama']; ?></p>
					<p class="card-text"> Tempat Tanggal Lahir 	: <?= $data['kry']['tempat_tgl_lahir']; ?></p>
					<p class="card-text"> Jenis Kelamin 		: <?= $data['kry']['jenis_kelamin']; ?></p>
					<p class="card-text"> Alamat 				: <?= $data['kry']['alamat']; ?></p>
					<p class="card-text"> No HP/TLP 			: <?= $data['kry']['no_tlp']; ?></p>
					<p class="card-text"> Tanggal Masuk 		: <?= $data['kry']['tgl_masuk']; ?></p>
					<p class="card-text"> Divisi 				: <?= $data['kry']['divisi']; ?></p>

					<a href="<?= BASEURL; ?>/karyawan" class="card-link badge badge-primary float-right ml-2">Kembali</a>
   
				</li>  
			</ul>	
		</div>
	</div>
</div>