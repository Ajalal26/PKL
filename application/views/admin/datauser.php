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
					<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#modalFrm">
						<div class="box-item-nav">
							<div class="box_ic theme-bg-pay">
								<i class=" fa fa-plus  theme-text-pay" class="fa fa-plus" style="font-size: 35px;"></i>
							</div>
							<p class="title theme-text-pay-rev">Tambah Data</p>
						</div>
					</a>

					<a href="#" id="btnEdit" id="btnEdit" style="text-decoration: none;">
						<div class="box-item-nav">
							<div class="box_ic theme-bg-pay">
								<i class=" fa fa-edit  theme-text-pay" class="fa fa-plus" style="font-size: 35px;"></i>
							</div>
							<p class="title theme-text-pay-rev">Edit Data</p>
						</div>
					</a>


					<a href="#" id="btnDelete" style="text-decoration: none;">
						<div class="box-item-nav">
							<div class="box_ic theme-bg-pay">
								<i class=" fa fa-trash  theme-text-pay" class="fa fa-plus" style="font-size: 35px;"></i>
							</div>
							<p class="title theme-text-pay-rev">Hapus Data</p>
						</div>
					</a>


					<a href="#" onclick="directLink(_BASE+'Datauser')" style="text-decoration: none;">
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
					<p class="title">Data User</p>	
				</div>
				
			</div>

			
		</div>

		<table class="table table-striped table-bordered" id="tableData" style="width: 100%; margin-top: 20px;font-family: 'Poppins',sans-serif;font-size: 14px;">
			<thead>
				<tr>
					<th>#</th>
					<th>#</th>
					<th>No</th>
					<th>ID Member</th>
					<th>Nama Lengkap</th>
					<th>Panggilan</th>
					<th>No Polisi</th>
					<th>HP/WA</th>
					<th>Email</th>
					<th>Email MOI</th>
					<th>Alamat</th>
					<th>QR</th>
					<th>PP</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$num = 0;
					foreach ($data as $key => $val) {
					$num++;
				?>	
					<tr>
						<td style="vertical-align:middle;"></td>
						<td style="vertical-align:middle;"><input type="radio" name="chk[]" value="<?=$val['ID']?>" class="form-control" style="width: 20px;"></td>
						<td style="vertical-align:middle;"><?=$num?></td>
						<td style="vertical-align:middle;"><?=$val['id_member']?></td>
						<td style="vertical-align:middle;"><?=$val['nama_lengkap']?></td>
						<td style="vertical-align:middle;"><?=$val['nama_panggilan']?></td>
						<td style="vertical-align:middle;"><?=$val['no_polisi']?></td>
						<td style="vertical-align:middle;"><?=$val['no_hp']?></td>
						<td style="vertical-align:middle;"><?=$val['email']?></td>
						<td style="vertical-align:middle;"><?=$val['email_moi']?></td>
						<td style="vertical-align:middle;"><?=$val['alamat']?></td>
						<td style="vertical-align:middle;">
							<a href="<?=base_url()?>temp/qrcode/user/<?=$val['token']?>.png" target="_BLANK">
								<img src="<?=base_url()?>temp/qrcode/user/<?=$val['token']?>.png" style="width:65px; height: 65px;">
							</a>
						</td>

						<td style="vertical-align:middle;">
							<?php
								if($val['foto'] == ''){
							?>
								<a href="<?=base_url()?>asset/image/defaultpp.png" target="_BLANK">
									<img src="<?=base_url()?>asset/image/defaultpp.png" style="width:65px; height: 65px;">
								</a>


							<?php
								}else{
							?>
								<a href="<?=base_url()?>temp/foto/<?=$val['foto']?>" target="_BLANK">
									<img src="<?=base_url()?>temp/foto/<?=$val['foto']?>" style="width:65px; height: 65px;">
								</a>

							<?php
								}
							?>

							
						</td>
					</tr>

				<?php
					}
				?>
				
			</tbody>
		</table>
	</div>
</div>

<div class="modal fade" id="modalFrm" tabindex="-1" aria-labelledby="modalFrm" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title" id="modalFrm" style="font-size: 18px;font-weight: bold;font-family: 'Poppins',sans-serif;">Form Data User</p>
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
		         	<label for="alamat" class="col-form-label">Alamat</label>
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

		         <div class="form-group">
		         	<label for="hak_akses" class="col-form-label">Hak Akses</label>
		         	<select class="form-control" id="hak_akses" name="hak_akses">
		         		<?php
		         			if($this->session->userdata('hak_akses')=="Super Admin"){
		         		?>
		         			<option value="Admin">Admin</option>
		         		<?php
		         			}
		         		?>
		         		<option value="User">User</option>
		         	</select>
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

		         <?php
		         	if($this->session->userdata('hak_akses')=="Super Admin" || $this->session->userdata('hak_akses')=="Admin"){
		         ?>

		         <div class="form-group">
		            <label for="password" class="col-form-label">Password</label>
		            <input type="password" name="password" id="password" class="form-control" >
		         </div>

		         <?php
		         	}
		         ?>

		         

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
	
	$('#tableData').DataTable({
		'responsive':true
	});

	var url = _BASE+'Datauser/save';

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
               $('#modalFrm').modal('toggle');
               alert(data);
               directLink(_BASE+'Datauser');
            },
            error: function() 
            {
            }
		})
	});

	$('#btnEdit').click(function(){
		var btnChecked = $(`input[name='chk[]']:checked`).val();

		if(btnChecked==undefined){
			alert('Anda belum memilih data');
		}else{
			url = _BASE+'Datauser/update/'+btnChecked;

			$.get(_BASE+'Datauser/edit/'+btnChecked,function(resp){
				resp = JSON.parse(resp);

				$.each(resp,function(k,v){
					if(k!=='foto'){
						$('#'+k).val(v);
					}
				});
			});

			$('#modalFrm').modal('toggle');
		}


	});


	$('#btnDelete').click(function(){
		var btnChecked = $(`input[name='chk[]']:checked`).val();

		if(btnChecked==undefined){
			alert('Anda belum memilih data');
		}else{
			deleteData(_BASE+'Datauser/delete/'+btnChecked,_BASE+'Datauser');
		}
	})

</script>