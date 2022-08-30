<script type="text/javascript">
	$('#tanggal_lahir').datepicker({
		dateFormat:'yy-mm-dd',
		changeYear:true
	})

	$('#tanggal_registrasi').datepicker({
		dateFormat:'yy-mm-dd',
		changeYear:true
	})
</script>

<style type="text/css">
	.ui-datepicker-year{
		background: #4c4c4c;
	    color: white;
	    border: none;
	    font-weight: bold;
	}
</style>

<div style="width: 100%;">
	<div class="container">
		<div class="row panel-navigasi">
			<div class="col-md-8 col-lg-8">
				<div class="wraper">
					<!-- <a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#modalProfileUser">
						<div class="box-item-nav">
							<div class="box_ic theme-bg-pay">
								<i class=" fa fa-plus  theme-text-pay" class="fa fa-plus" style="font-size: 35px;"></i>
							</div>
							<p class="title theme-text-pay-rev">Tambah Data</p>
						</div>
					</a> -->

					<a href="#" id="btnEdit" id="btnEdit" style="text-decoration: none;">
						<div class="box-item-nav">
							<div class="box_ic theme-bg-pay">
								<i class=" fa fa-edit  theme-text-pay" class="fa fa-plus" style="font-size: 35px;"></i>
							</div>
							<p class="title theme-text-pay-rev">Edit Data</p>
						</div>
					</a>


					<!-- <a href="#" id="btnDelete" style="text-decoration: none;">
						<div class="box-item-nav">
							<div class="box_ic theme-bg-pay">
								<i class=" fa fa-trash  theme-text-pay" class="fa fa-plus" style="font-size: 35px;"></i>
							</div>
							<p class="title theme-text-pay-rev">Hapus Data</p>
						</div>
					</a> -->


					<a href="#" onclick="directLink(_BASE+'Profile')" style="text-decoration: none;">
						<div class="box-item-nav">
							<div class="box_ic theme-bg-pay">
								<i class=" fa fa-sync-alt  theme-text-pay" class="fa fa-plus" style="font-size: 35px;"></i>
							</div>
							<p class="title theme-text-pay-rev">Refresh</p>
						</div>
					</a>

					<a href="<?=base_url()?>Admin" style="text-decoration: none;">
						<div class="box-item-nav">
							<div class="box_ic theme-bg-pay">
								<i class=" fa fa-reply  theme-text-pay" class="fa fa-plus" style="font-size: 35px;"></i>
							</div>
							<p class="title theme-text-pay-rev">Kembali</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-md-4 col-lg-4">
				<div class="box-title-nav">
					<p class="title">Profile User</p>	
				</div>
				
			</div>

			
		</div>

		<div style="width: 100%; padding: 20px; display: flex; justify-content: center; align-items: center;">
				<?php
					if($data['foto']!==''){
				?>

					<img src="<?=base_url()?>temp/foto/<?=$data['foto']?>" style="width: 100px; height: 100px; border-radius: 100px;">

				<?php
					}else{
				?>
					<img src="<?=base_url()?>asset/image/defaultpp.png" style="width: 100px; height: 100px; border-radius: 100px;">

				<?php
					}
				?>

		</div>

		<table class="table table-striped table-bordered" id="tableData" style="width: 100%; margin-top: 20px;font-family: 'Poppins',sans-serif;font-size: 14px;">
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><?=$data['nama_lengkap']?></td>
			</tr>

			<tr>
				<td>Panggilan</td>
				<td>:</td>
				<td><?=$data['nama_panggilan']?></td>
			</tr>

			<tr>
				<td>JK</td>
				<td>:</td>
				<td><?=$data['jenis_kelamin']?></td>
			</tr>

			<tr>
				<td>No Polisi</td>
				<td>:</td>
				<td><?=$data['no_polisi']?></td>
			</tr>

			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><?=$data['tanggal_lahir']?></td>
			</tr>

			<tr>
				<td>No HP</td>
				<td>:</td>
				<td><?=$data['no_hp']?></td>
			</tr>

			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?=$data['email']?></td>
			</tr>

			<tr>
				<td>Email MOI</td>
				<td>:</td>
				<td><?=$data['email_moi']?></td>
			</tr>

			<tr>
				<td>Type Mobil</td>
				<td>:</td>
				<td><?=$data['type_mobil']?></td>
			</tr>

			<tr>
				<td>Warna Mobil</td>
				<td>:</td>
				<td><?=$data['warna_mobil']?></td>
			</tr>

			<tr>
				<td>Tahun Keluaran</td>
				<td>:</td>
				<td><?=$data['tahun_keluaran']?></td>
			</tr>


			<tr>
				<td>Tanggal Registrasi</td>
				<td>:</td>
				<td><?=$data['tanggal_registrasi']?></td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><?=$data['alamat']?></td>
			</tr>

			<tr>
				<td>Alasan Bergabung</td>
				<td>:</td>
				<td><?=$data['alasan_bergabung']?></td>
			</tr>

			<tr>
				<td>Provinsi</td>
				<td>:</td>
				<td><?=$data['provinsi']?></td>
			</tr>

			<tr>
				<td>Regional / Chapter</td>
				<td>:</td>
				<td><?=$data['regional']?></td>
			</tr>

			<tr>
				<td>ID Member</td>
				<td>:</td>
				<td><?=$data['id_member']?></td>
			</tr>
		</table>
	</div>
</div>

<div class="modal fade" id="modalProfileUser" tabindex="-1" aria-labelledby="modalProfileUser" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title" id="modalProfileUser" style="font-size: 18px;font-weight: bold;font-family: 'Poppins',sans-serif;">Form Data User</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="frmDataUser">
      <div class="modal-body">
      	  <div class="row" style="margin: 0px;">
      	  	 <div class="col-md-6 col-lg-6">
      	  	 	<div class="form-group">
		            <label for="nama_lengkap" class="col-form-label">Nama Lengkap</label>
		            <input name="nama_lengkap" id="nama_lengkap" type="text" class="form-control" required="">
	          	</div>
	          	<div class="form-group">
	          		<label class="col-form-label" for="jenis_kelamin">Jenis Kelamin</label>
	          		<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
	          			<option value="PRIA">PRIA</option>
	          			<option value="WANITA">WANITA</option>
	          		</select>
	          	</div>
	          	<div class="form-group">
		            <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir</label>
		            <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control" autocomplete="off">
		         </div>

		         <div class="form-group">
		            <label for="email_moi" class="col-form-label">Email MOI</label>
		            <input type="email" name="email_moi" id="email_moi" class="form-control">
		         </div>

		         <div class="form-group">
		            <label for="type_mobil" class="col-form-label">Type Mobil</label>
		            <input type="text" name="type_mobil" id="type_mobil" class="form-control">
		         </div>

		         <div class="form-group">
		            <label for="tahun_keluaran" class="col-form-label">Tahun Keluaran</label>
		            <input type="number" name="tahun_keluaran" id="tahun_keluaran" class="form-control">
		         </div>

		         <div class="form-group">
		         	<label for="alamat" class="col-form-label">Alanmat</label>
		         	<textarea class="form-control" id="alamat" name="alamat"></textarea>
		         </div>

		         <div class="form-group">
		            <label for="provinsi" class="col-form-label">Provinsi</label>
		            <input type="text" name="provinsi" id="provinsi" class="form-control" autocomplete="off">
		         </div>

		         <div class="form-group">
		            <label for="id_member" class="col-form-label">ID Member</label>
		            <input type="text" name="id_member" id="id_member" class="form-control" autocomplete="off">
		         </div>
      	  	 </div>
      	  	 <div class="col-md-6 col-lg-6">
      	  	 	 <div class="form-group">
		            <label for="nama_panggilan" class="col-form-label">Nama Panggilan</label>
		            <input type="text" name="nama_panggilan" id="nama_panggilan" class="form-control">
		         </div>

		         <div class="form-group">
		            <label for="no_polisi" class="col-form-label">Nomor Polisi</label>
		            <input type="text" name="no_polisi" id="no_polisi" class="form-control">
		         </div>

		         <div class="form-group">
		            <label for="no_hp" class="col-form-label">Nomor HP</label>
		            <input type="text" name="no_hp" id="no_hp" class="form-control">
		         </div>

		         <div class="form-group">
		            <label for="email" class="col-form-label">Email</label>
		            <input type="email" name="email" id="email" class="form-control">
		         </div>

		         <div class="form-group">
		            <label for="warna_mobil" class="col-form-label">Warna Mobil</label>
		            <input type="text" name="warna_mobil" id="warna_mobil" class="form-control">
		         </div>

		         <div class="form-group">
		            <label for="tanggal_registrasi" class="col-form-label">Tanggal Registrasi</label>
		            <input type="text" name="tanggal_registrasi" id="tanggal_registrasi" class="form-control" autocomplete="off">
		         </div>
		         <div class="form-group">
		         	<label for="alamat" class="col-form-label">Alasan Bergabung</label>
		         	<textarea class="form-control" id="alasan_bergabung" name="alasan_bergabung"></textarea>
		         </div>

		         <div class="form-group">
		            <label for="regional" class="col-form-label">Regional</label>
		            <input type="text" name="regional" id="regional" class="form-control">
		         </div>

		         <div class="form-group">
		            <label for="foto" class="col-form-label">Foto</label>
		            <input type="file" name="foto" id="foto" class="form-control">
		         </div>

		        

		         

      	  	 </div>
      	  </div>         
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>


<script type="text/javascript">
	
	// $('#tableData').DataTable({
	// 	'responsive':true
	// });
	var _BASE = "<?=base_url()?>";

	var url = _BASE+'Profile/save';

	$('#frmDataUser').on('submit',function(e){
		e.preventDefault();
		$.ajax({
			type:'POST',
			url:url,
			data: new FormData(this),
			contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            {
               $('#modalProfileUser').modal('toggle');
               alert(data);
               directLink(_BASE+'Profile');
            },
            error: function() 
            {
            }
		})
	});

	$('#btnEdit').click(function(){
		var btnChecked = <?=$this->session->userdata('ID')?>;

		if(btnChecked==undefined){
			alert('Anda belum memilih data');
		}else{
			url = _BASE+'Profile/update/'+btnChecked;

			$.get(_BASE+'Profile/edit/'+btnChecked,function(resp){
				resp = JSON.parse(resp);

				$.each(resp,function(k,v){
					if(k!=='foto'){
						$('#'+k).val(v);	
					}
				});
			});

			$('#modalProfileUser').modal('toggle');
		}

	});


	// $('#btnDelete').click(function(){
	// 	var btnChecked = $(`input[name='chk[]']:checked`).val();

	// 	if(btnChecked==undefined){
	// 		alert('Anda belum memilih data');
	// 	}else{
	// 		deleteData(_BASE+'Datauser/delete/'+btnChecked,_BASE+'Datauser');
	// 	}
	// })

</script>