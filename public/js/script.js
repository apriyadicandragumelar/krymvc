// console.log('ok'); cek javascript

$(function(){
	$('.tombolTambahData'). on ('click', function(){
		$('#formModalLabel').html('Tambah Data Karyawan');
        $('.modal-footer button[type=submit]').html('Tambah Data');
       
		});

	$('.tampilModalUbah'). on('click', function(){
		$('#formModalLabel'). html('Ubah Data Karyawan'); 
		$('.modal-footer button[type=submit]'). html ('Ubah Data');
		$('.modal-body form').attr('action', 'http://localhost/krymvc/public/karyawan/ubah');

		const id = $(this).data('id');
		

	$.ajax({

		url: 'http://localhost/krymvc/public/karyawan/getubah', 
		data: {id : id},
		method: 'post',
		dataType: 'json',
		success: function(data){
			$('#nik').val(data.nik);
			$('#nama').val(data.nama);	
			$('#tempat_tgl_lahir').val(data.tempat_tgl_lahir);
			$('#jenis_kelamin').val(data.jenis_kelamin);
			$('#id').val(data.id);
			$('#alamat').val(data.alamat);
			$('#no_tlp').val(data.no_tlp);
			$('#tgl_masuk').val(data.tgl_masuk);
			$('#divisi').val(data.divisi);



		}

	});
	});


});