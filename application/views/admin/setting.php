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
					<!-- <a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#modalFrm">
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


					<a href="#" onclick="directLink(_BASE+'Setting')" style="text-decoration: none;">
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
					<p class="title">Setting</p>	
				</div>
				
			</div>

			
		</div>

		<table class="table table-striped table-bordered" id="tableData" style="width: 100%; margin-top: 20px;font-family: 'Poppins',sans-serif;font-size: 14px;">
			<tr>
				<td>Facebook</td>
				<td>:</td>
				<td><?=$data['facebook']?></td>
			</tr>

			<tr>
				<td>Instagram</td>
				<td>:</td>
				<td><?=$data['instagram']?></td>
			</tr>

			<tr>
				<td>Youtube</td>
				<td>:</td>
				<td><?=$data['youtube']?></td>
			</tr>

			<tr>
				<td>Kotak Email</td>
				<td>:</td>
				<td><?=$data['kontak_email']?></td>
			</tr>

			<tr>
				<td>Kotak Phone</td>
				<td>:</td>
				<td><?=$data['kontak_telpon']?></td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><?=$data['kontak_alamat']?></td>
			</tr>
		</table>
	</div>
</div>

<div class="modal fade" id="modalFrm" tabindex="-1" aria-labelledby="modalFrm" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title" id="modalFrm" style="font-size: 18px;font-weight: bold;font-family: 'Poppins',sans-serif;">Form Setting</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="frmSetting">
      <div class="modal-body">
		  	<div class="form-group">
	            <label for="facebook" class="col-form-label">Facebook</label>
	            <input name="facebook" id="facebook" type="text" class="form-control">
	      	</div>

	      	<div class="form-group">
	            <label for="instagram" class="col-form-label">Instagram</label>
	            <input name="instagram" id="instagram" type="text" class="form-control">
	      	</div>

	      	<div class="form-group">
	            <label for="youtube" class="col-form-label">Youtube</label>
	            <input name="youtube" id="youtube" type="text" class="form-control">
	      	</div>

	      	<div class="form-group">
	            <label for="kontak_email" class="col-form-label">Kontak Email</label>
	            <input name="kontak_email" id="kontak_email" type="text" class="form-control">
	      	</div>

	      	<div class="form-group">
	            <label for="kontak_telpon" class="col-form-label">Kontak Telpon</label>
	            <input name="kontak_telpon" id="kontak_telpon" type="text" class="form-control">
	      	</div>

	      	<div class="form-group">
	            <label for="kontak_alamat" class="col-form-label">Kontak Alamat</label>
	            <input name="kontak_alamat" id="kontak_alamat" type="text" class="form-control">
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

	var url = _BASE+'Setting/save';

	$('#frmSetting').on('submit',function(e){
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
               directLink(_BASE+'Setting');
            },
            error: function() 
            {
            }
		})
	});

	$('#btnEdit').click(function(){
		var btnChecked = 1;

		if(btnChecked==undefined){
			alert('Anda belum memilih data');
		}else{
			url = _BASE+'Setting/update/'+btnChecked;

			$.get(_BASE+'Setting/edit/'+btnChecked,function(resp){
				resp = JSON.parse(resp);

				$.each(resp,function(k,v){
					$('#'+k).val(v);
				});
			});

			$('#modalFrm').modal('toggle');
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