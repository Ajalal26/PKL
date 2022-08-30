<script type="text/javascript">
    $('#harga_beli').autoNumeric('init');
    $('#harga_jual_toko').autoNumeric('init');
    $('#harga_jual_partai').autoNumeric('init');
    $('#harga_jual_cabang').autoNumeric('init');
    
</script>

<div style="width: 100%; display: flex; justify-content:center; align-items: center;">
	<h4>Judul Aplikasi</h4>
</div>

<div style="width: 100%; padding:10px; display:flex;">
	<button class="btn btn-primary" data-toggle="modal" data-target="#myModal" id="btnCreate">
		Create
	</button>

	<button class="btn btn-success" style="margin-left:3px;" id="btnEdit">
		Edit
	</button>

	<button class="btn btn-danger" style="margin-left:3px;"  id="btnDelete">
		Delete
	</button>

	<button class="btn btn-warning" style="margin-left:3px;" onclick="directLink(_BASE+'Barang')">
		Refresh
	</button>
</div>

<div style="width:100%; padding: 10px;">
	<table class="table table-striped table-bordered" id="tableData">
		<thead>
			<tr>
				<th>#</th>
				<th>Barcode</th>
				<th>Nama Barang</th>
				<th>Harga Beli</th>
				<th>Harga Jual Toko</th>
				<th>Harga Jual Partai</th>
				<th>Harga Jual Cabang</th>
				<th>Supplier</th>
                <th>Kategori Barang</th>
                <th>Foto Barang</th>
                <th>Keterangan</th>
                <th>Expired Date</th>
                <th>Production Date</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$num = 0;
				foreach($data as $key => $val){
					$num++;
			?>

				<tr>
					<td><input type='radio' id='chk' class='flat' name='chk[]' value='<?=$val['ID']?>'></td>
					<td><?=$val['barcode']?></td>
          			<td><?=$val['nama_barang']?></td>
					<td><?=rupiah($val['harga_beli'])?></td>
					<td><?=rupiah($val['harga_jual_toko'])?></td>
					<td><?=rupiah($val['harga_jual_partai'])?></td>
					<td><?=rupiah($val['harga_jual_cabang'])?></td>
					<td><?=$val['supplier']?></td>
                    <td><?=$val['kategori']?></td>
          			<td><?=$val['foto_barang']?></td>
					<td><?=$val['keterangan']?></td>
                    <td><?=$val['expired_date']?></td>
          			<td><?=$val['production_date']?></td>
                    
				</tr>

			<?php
				}
			?>
		</tbody>
	</table>
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
        <form id="frmBarang" method="POST" enctype="multipart/form-data">
        	<div class="form-group">
        		<label>Barcode</label>
        		<input type="text" name="barcode" id="barcode" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Nama Barang</label>
        		<input type="text" name="nama_barang" id="nama_barang" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Harga Beli</label>
        		<input type="text" name="harga_beli" id="harga_beli" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Harga Jual Toko</label>
        		<input type="text" name="harga_jual_toko" id="harga_jual_toko" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Harga Jual Partai</label>
        		<input type="text" name="harga_jual_partai" id="harga_jual_partai" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Harga Jual Cabang</label>
        		<input type="text" name="harga_jual_cabang" id="harga_jual_cabang" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Supplier</label>
        		<input type="text" name="supplier" id="supplier" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Kategori Barang</label>
        		<select class="form-control" name="kategori_barang" id="kategori_barang">
									<?php
									$data = $this->db->get('tb_kategori')->result_array();

									foreach ($data as $key => $val) {
										echo "<option value=" . $val['ID'] . ">" . $val['nama_kategori'] . "</option>";
									}
									?>
				</select>
				<input type="text"  name="kategori_barang" id="kategori_barang" class="form-control"> 
        	</div>

            <div class="form-group">
        		<label>Foto Barang</label>
        		<!-- <input type="file" name="foto_barang" id="foto_barang" class="form-control" size="20"> -->
        		<input type="text" name="foto_barang" id="foto_barang" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Keterangan</label>
        		<input type="text" name="keterangan" id="keterangan" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Expired Date</label>
        		<input type="date" name="expired_date" id="expired_date" class="form-control">
        	</div>

            <div class="form-group">
        		<label>Production Date</label>
        		<input type="date" name="production_date" id="production_date" class="form-control">
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
        url = _BASE+'Barang/save';
    });


	$("#frmBarang").on('submit',(function(e){
        $('#harga_beli').val($('#harga_beli').autoNumeric('get'));
        $('#harga_jual_toko').val($('#harga_jual_toko').autoNumeric('get'));
        $('#harga_jual_cabang').val($('#harga_jual_cabang').autoNumeric('get'));
        $('#harga_jual_partai').val($('#harga_jual_partai').autoNumeric('get'));
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
                        directLink(_BASE+'Barang');
                       
                   },1000);
                },
                error: function() 
                {
                }
        });
        $('#frmBarang')[0].reset();
    }));


    $('#btnEdit').click(function(){
    var btnCheked = $("input[name='chk[]']:checked").val(); // chek radio button
    //alert(btnCheked);
      if(btnCheked==undefined){
        alert('Anda Belum Memilih Data');
      }else{
        url = _BASE+'Barang/update/'+btnCheked;

        $.get(_BASE+'Barang/edit/'+btnCheked,function(resp){
            resp = JSON.parse(resp);
            // console.log(resp);
            $.each(resp,function(k,v){
                $('#'+k).val(v);
                //$("input[name='"+k+"'][value='"+v+"']").prop('checked',true);
            });

            $('#myModal').modal('toggle');
        })

        
      }
  	});

  	$('#btnDelete').click(function(){
        var btnCheked = $("input[name='chk[]']:checked").val();
    //alert(btnCheked);
      if(btnCheked==undefined){
        alert('Anda Belum Memilih Data');
      }else{
        deleteData(_BASE+'Barang/delete/'+btnCheked,_BASE+'Barang');
      }
    });
</script>