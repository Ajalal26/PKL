<script type="text/javascript">
	$('#tanggal_kegiatan,#tanggal_akhir_kegiatan').datepicker({
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


					<a href="#" onclick="directLink(_BASE+'Kegiatan')" style="text-decoration: none;">
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
					<p class="title">Data Kegiatan</p>	
				</div>
				
			</div>

			
		</div>

		<table class="table table-striped table-bordered" id="tableData" style="width: 100%; margin-top: 20px;font-family: 'Poppins',sans-serif;font-size: 14px;">
			<thead>
				<tr>
					<th>#</th>
					<th>#</th>
					<th>No</th>
					<th>Nama Kegiatan</th>
					<th>Tanggal Kegiatan</th>
					<th>Tanggal Akhir</th>
					<th>Deskripsi</th>
					<th>Status</th>
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
						<td style="vertical-align:middle;"><?=$val['nama_kegiatan']?></td>
						<td style="vertical-align:middle;"><?=$val['tanggal_kegiatan']?></td>
						<td style="vertical-align:middle;"><?=$val['tanggal_akhir_kegiatan']?></td>
						<td style="vertical-align:middle;"><?=$val['deskripsi']?></td>
						<td style="vertical-align:middle;"><?=$val['status_kegiatan']?></td>
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
      <form id="frmKegiatan">
      <div class="modal-body">

  	  	 	<div class="form-group">
	            <label for="nama_kegiatan" class="col-form-label">Nama Kegiatan</label>
	            <input name="nama_kegiatan" id="nama_kegiatan" type="text" class="form-control" required="">
          	</div>
          	

	        <div class="form-group">
	            <label for="tanggal_kegiatan" class="col-form-label">Tanggal Kegiatan</label>
	            <input type="text" name="tanggal_kegiatan" id="tanggal_kegiatan" class="form-control" autocomplete="off">
	        </div>

	        <div class="form-group">
	            <label for="tanggal_akhir_kegiatan" class="col-form-label">Tanggal Akhir Kegiatan</label>
	            <input type="text" name="tanggal_akhir_kegiatan" id="tanggal_akhir_kegiatan" class="form-control" autocomplete="off">
	        </div>

	        <div class="form-group">
	         	<label for="deskripsi" class="col-form-label">Deskripsi</label>
	         	<textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
	        </div>

	        <div class="form-group">
	        	<label for="status_kegiatan" class="col-form-label">Status Kegiatan</label>
	        	<select class="form-control" id="status_kegiatan" name="status_kegiatan">
	        		<option value="Aktif">Aktif</option>
	        		<option value="Tidak Aktif">Tidak Aktif</option>
	        	</select>
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

	var url = _BASE+'Kegiatan/save';

	$('#frmKegiatan').on('submit',function(e){
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
               directLink(_BASE+'Kegiatan');
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
			url = _BASE+'Kegiatan/update/'+btnChecked;

			$.get(_BASE+'Kegiatan/edit/'+btnChecked,function(resp){
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
			deleteData(_BASE+'Kegiatan/delete/'+btnChecked,_BASE+'Kegiatan');
		}
	})

</script>