
<div class="panelButton">
	<button class="btn btn-default buttonPanel" data-toggle="modal" data-target="#myModal" id="btnCreate">
		<i class="fa fa-plus ic"></i>
		<p class="title">
			Create
		</p>
	</button>

	<button class="btn btn-default buttonPanel" id="btnEdit">
		<i class="fas fa-edit ic"></i>
		<p class="title">
			Edit
		</p>
	</button>

	<button onclick="directLink(_BASE+'Perusahaan')" class="btn btn-default buttonPanel">
		<i class="fas fa-redo ic"></i>
		<p class="title">
			Refresh
		</p>
	</button>

	<button class="btn btn-default buttonPanel" id="btnDelete">
		<i class="far fa-trash-alt ic"></i>
		<p class="title">
			Delete
		</p>
	</button>
</div>



<div class="card mt-4">
	<div class="card-header">
		<p class="bodyTitle">Tabel Data Perusahaan</p>
	</div>
	<div class="card-body" style="font-family: 'Poppins',sans-serif;">
		<table class="table table-striped table-bordered" id="tableData" style="width: 100%; margin-top: 20px;font-family: 'Poppins',sans-serif;font-size: 12px;">
	      <thead>
	        <tr>
	          <th>#</th>
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
		  </thead>
		<tbody>
			<?php
			$num = 0;
			foreach ($data as $key => $val) {
				$num++;
			?>

				<tr style="text-align: center;">
					<td><input type='radio' id='chk' class='flat' name='chk[]' value='<?= $val['ID'] ?>'></td>
					<td><?= $val['id_member'] ?></td>
					<td><?= $val['nama_lengkap'] ?></td>
					<td><?= $val['nama_panggilan'] ?></td>
					<td><?= $val['no_polisi'] ?></td>
					<td><?= $val['no_hp'] ?></td>
					<td><?= $val['email'] ?></td>
					<td><?= $val['email_moi'] ?></td>
					<td><?= $val['alamat'] ?></td>
					<td><?= $val['qr'] ?></td>
					<td><img src="<?php echo base_url();?>./tmp/foto/<?= $val['pp'] ?>" alt=""></td></td>

				</tr>

			<?php
			}
			?>
		</tbody>
	</table>
	</div>
</div>

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Form Tambah User</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form id="frmPerusahaan">
		<div class="form-group">
					<div class="form-group">
						<label>Nama Lengkap</label>

						<select class="form-control" name="nama_lengkap" id="nama_lengkap">
							<?php
							$data = $this->db->get('tb_user')->result_array();

							foreach ($data as $key => $val) {
								echo "<option value=" . $val['ID'] . ">" . $val['nama_lengkap'] . "</option>";
							}
							?>
						</select>
					</div>

			<div class="form-group">
				<label>QR</label>
				<input type="text" name="qr" id="qr" class="form-control">
			</div>

			<div class="form-group">
				<label>PP</label>
				<input type="file" name="pp" id="pp" class="form-control">
			</div>

			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>


        </form>
      </div>

      <!-- Modal footer -->
      

    </div>
  </div>
</div>

<script type="text/javascript">

	$('#tableData').DataTable({
        responsive: true
    });

	var _BASE = "<?=base_url()?>";

	$('#btnCreate').click(function(){
        url = _BASE+'Perusahaan/save';
    });


	$("#frmPerusahaan").on('submit',(function(e){
        
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
                   $('#myModal').modal('toggle');
                   alert(data);
                   setTimeout(function(){
                        directLink(_BASE+'Perusahaan');
                       
                   },1000);
                },
                error: function() 
                {
                }
        });
        $('#frmPerusahaan')[0].reset();
    }));


	$('#btnEdit').click(function() {
		var btnCheked = $("input[name='chk[]']:checked").val(); // chek radio button
		//alert(btnCheked);
		if (btnCheked == undefined) {
			alert('Anda Belum Memilih Data');
		} else {
			url = _BASE + 'Perusahaan/update/' + btnCheked;

			$.get(_BASE + 'Perusahaan/edit/' + btnCheked, function(resp) {
				resp = JSON.parse(resp);
				// console.log(resp);
				$.each(resp, function(k, v) {
					$('#' + k).val(v);
					//$("input[name='"+k+"'][value='"+v+"']").prop('checked',true);
				});

				$('#myModal').modal('toggle');
			})


		}
	});

	$('#btnDelete').click(function() {
		var btnCheked = $("input[name='chk[]']:checked").val();
		//alert(btnCheked);
		if (btnCheked == undefined) {
			alert('Anda Belum Memilih Data');
		} else {
			deleteData(_BASE + 'Perusahaan/delete/' + btnCheked, _BASE + 'Perusahaan');
		}
	});
</script>