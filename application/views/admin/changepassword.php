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
		<div class="card">
			<div class="card-header">
				<p style="font-family: 'Poppins',sans-serif; font-weight: bold;">Change Password</p>
			</div>

			<div class="card-body">
				<form id="frmChangePassword">
					<div class="form-group">
						<label for="passwordLama">Password Lama</label>
						<input type="password" name="passwordLama" id="passwordLama" class="form-control" required="">
					</div>


					<div class="form-group">
						<label for="passwordBaru">Password Baru</label>
						<input type="password" name="passwordBaru" id="passwordBaru" class="form-control" required="">
					</div>

					<div class="form-group">
						<label for="kofirmPasswd">Konfirmasi Password Baru</label>
						<input type="password" name="kofirmPasswd" id="kofirmPasswd" class="form-control" required="">
					</div>

					<div class="form-group">
						<button id="btnSubmit" type="submit" class="btn btn-default" style="background: #323232;color: white;"> Kirim</button>
						<button onclick="directLink(_BASE+'Changepassword')" class="btn btn-default" style="background: #323232;color: white;"> Refresh</button>
					</div>
				</form>				
			</div>

			<div class="card-footer">
				
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	
	$('#tableData').DataTable({
		'responsive':true
	});

	var url = _BASE+'Changepassword/save';

	$('#frmChangePassword').on('submit',function(e){
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
               alert(data);
               directLink(_BASE+'Changepassword');
            },
            error: function() 
            {
            }
		})
	});

</script>