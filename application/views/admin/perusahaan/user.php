
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

	<button onclick="directLink(_BASE+'user')" class="btn btn-default buttonPanel">
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
		<p class="bodyTitle">Tabel Data User</p>
	</div>
	<div class="card-body" style="font-family: 'Poppins',sans-serif;">
		<table class="table table-striped table-bordered" id="tableData" style="width: 100%; margin-top: 20px;font-family: 'Poppins',sans-serif;font-size: 12px;">
	      <thead>
	        <tr>
	          <th>#</th>
              <th>#</th>
	          <th>Nama Lengkap </th>
	          <th>Nama Panggilan</th>
	          <th>Jenis Kelamin</th>
	          <th>No Polisi</th>
	          <th>Tanggal Lahir</th>
	          <th>No HP</th>
	          <th>Email MOI</th>
              <th>Email</th>
              <th>Type Mobil</th>
              <th>Warna Mobil</th>
              <th>Tahun Keluaran</th>
              <th>Tanggal Registrasi</th>
              <th>Alamat</th>
	          <th>Alasan Bergabung</th>
	          <th>Regional</th>
	          <th>Provinsi</th>
              <th>ID Member</th>
	          <th>Foto</th>
              <th>Keterangan</th>
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
                     <td></td>
					<td><input type='radio' id='chk' class='flat' name='chk[]' value='<?= $val['ID'] ?>'></td>
					<td><?= $val['nama_lengkap'] ?></td>
					<td><?= $val['nama_panggilan'] ?></td>
					<td><?= $val['jenis_kelamin'] ?></td>
					<td><?= $val['no_polisi'] ?></td>
					<td><?= $val['tanggal_lahir'] ?></td>
					<td><?= $val['no_hp'] ?></td>
					<td><?= $val['email_moi'] ?></td>
                    <td><?= $val['email'] ?></td>
                    <td><?= $val['type_mobil'] ?></td>
                    <td><?= $val['warna_mobil'] ?></td>
                    <td><?= $val['tahun_keluaran'] ?></td>
                    <td><?= $val['tanggal_registrasi'] ?></td>
                    <td><?= $val['alamat'] ?></td>
					<td><?= $val['alasan_bergabung'] ?></td>
					<td><?= $val['regional'] ?></td>
					<td><?= $val['provinsi'] ?></td>
                    <td><?= $val['id_member'] ?></td>
                    <td><?= $val['foto'] ?></td>
                    <td><?= $val['keterangan'] ?></td>
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
        <form id="frmUser">
        <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
            </div>

            <div class="form-group">
               <label>Nama Panggilan</label>
                <input type="text" name="nama_panggilan" id="nama_panggilan" class="form-control">
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control">
            </div>

            <div class="form-group">
                <label>No Polisi</label>
                <input type="text" name="no_polisi" id="no_polisi" class="form-control">
            </div>

            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
            </div>

            <div class="form-group">
                <label>No HP</label>
                <input type="text" name="no_hp" id="no_hp" class="form-control">
            </div>

            <div class="form-group">
                <label>Email MOI</label>
                <input type="text" name="email_moi" id="email_moi" class="form-control">
            </div>

            <div class="form-group">
                <label>Email </label>
                <input type="text" name="email" id="email" class="form-control">
            </div>

            <div class="form-group">
                <label>Type Mobil</label>
                <input type="text" name="type_mobil" id="type_mobil" class="form-control">
            </div>


            <div class="form-group">
                <label>Warna Mobil</label>
                <input type="text" name="warna_mobil" id="warna_mobil" class="form-control">
            </div>

            <div class="form-group">
                <label>Tahun Keluaran</label>
                <input type="text" name="tahun_keluaran" id="tahun_keluaran" class="form-control">
            </div>

            <div class="form-group">
                <label>tanggal_registrasi </label>
                <input type="date" name="tanggal_registrasi" id="tanggal_registrasi" class="form-control">
            </div>

            <div class="form-group">
                <label>alamat </label>
                <input type="text" name="alamat" id="alamat" class="form-control">
            </div>

            <div class="form-group">
                <label>Alasan Bergabung </label>
                <input type="text" name="alasan_bergabung" id="alasan_bergabung" class="form-control">
            </div>

            <div class="form-group">
                <label>Regional </label>
                <input type="text" name="regional" id="regional" class="form-control">
            </div>

            <div class="form-group">
                <label>Provinsi </label>
                <input type="text" name="provinsi" id="provinsi" class="form-control">
            </div>

            <div class="form-group">
                <label>ID Member </label>
                <input type="text" name="id_member" id="id_member" class="form-control">
            </div>

            <div class="form-group">
                <label>Foto </label>
                <input type="text" name="foto" id="foto" class="form-control">
            </div>

            <div class="form-group">
                <label>Keterangan </label>
                <input type="text" name="keterangan" id="keterangan" class="form-control">
            </div>

        	<div class="modal-footer">
        		<button type="submit" class="btn btn-primary" >Simpan</button>
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
        url = _BASE+'User/save';
    });


	$("#frmUser").on('submit',(function(e){
        
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
                        directLink(_BASE+'User');
                       
                   },1000);
                },
                error: function() 
                {
                }
        });
        $('#frmUser')[0].reset();
    }));



	$('#btnEdit').click(function() {
		var btnCheked = $("input[name='chk[]']:checked").val(); // chek radio button
		//alert(btnCheked);
		if (btnCheked == undefined) {
			alert('Anda Belum Memilih Data');
		} else {
			url = _BASE + 'User/update/' + btnCheked;

			$.get(_BASE + 'User/edit/' + btnCheked, function(resp) {
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
			deleteData(_BASE + 'User/delete/' + btnCheked, _BASE + 'User');
		}
	});
</script>