
<script type="text/javascript">
    $('#hutang').autoNumeric('init');
    $(function(){
        $('#tanggal').datepicker({
            dateFormat:'dd/mm/yy'
        })
    })
</script>
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

	<button onclick="directLink(_BASE+'supplier')" class="btn btn-default buttonPanel">
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
		<p class="bodyTitle">Tabel Data Supplier</p>
	</div>
	<div class="card-body" style="font-family: 'Poppins',sans-serif;">
		<table class="table table-striped table-bordered" id="tableData" style="width: 100%; margin-top: 20px;font-family: 'Poppins',sans-serif;font-size: 12px;">
	      <thead>
			<tr>
				<th>#</th>
				<th>Kode supplier</th>
				<th>Nama supplier</th>
				<th>Hutang</th>
				<th>Nomor Handphone</th>
				<th>Alamat</th>

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
					
                    <td><?=$val['kode_supplier']?></td>
                    <td><?=$val['nama_supplier']?></td>
                    <td>Rp.<?=rupiah($val['hutang'])?></td>
                    <td><?=$val['no_hp']?></td>
                    <td><?=$val['alamat']?></td>
                    
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
        <form id="frmSupplier">
        	<div class="form-group">
        		<label>Kode supplier</label>
        		<input type="text" name="kode_supplier" id="kode_supplier" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Nama supplier</label>
        		<input type="text" name="nama_supplier" id="nama_supplier" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Hutang</label>
        		<input type="text" name="hutang" id="hutang" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>No Handphone</label>
        		<input type="text" name="no_hp" id="no_hp" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Alamat</label>
        		<input type="text" name="alamat" id="alamat" class="form-control">
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
        url = _BASE+'Supplier/save';
    });


	$("#frmSupplier").on('submit',(function(e){
        $('#hutang').val($('#hutang').autoNumeric('get'));
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
                        directLink(_BASE+'Supplier');
                       
                   },1000);
                },
                error: function() 
                {
                }
        });
        $('#frmSupplier')[0].reset();
    }));


    $('#btnEdit').click(function(){
    var btnCheked = $("input[name='chk[]']:checked").val(); // chek radio button
    //alert(btnCheked);
      if(btnCheked==undefined){
        alert('Anda Belum Memilih Data');
      }else{
        url = _BASE+'Supplier/update/'+btnCheked;

        $.get(_BASE+'Supplier/edit/'+btnCheked,function(resp){
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
        deleteData(_BASE+'Supplier/delete/'+btnCheked,_BASE+'Supplier');
      }
    });
</script>