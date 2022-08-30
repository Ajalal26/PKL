
<div class="panelButton">
	<button class="btn btn-default buttonPanel" data-toggle="modal" data-target="#myModal" id="btnCreate">
		<i class="fa fa-plus ic"></i>
		<p class="title">
			Create
		</p>
	</button>

	<button class="btn btn-default buttonPanel">
		<i class="fas fa-edit ic"></i>
		<p class="title">
			Edit
		</p>
	</button>

	<button onclick="directLink(_BASE+'Kategori')" class="btn btn-default buttonPanel">
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
		<p class="bodyTitle">Tabel Data Kategori</p>
	</div>
	<div class="card-body table-responsive" style="font-family: 'Poppins',sans-serif; overflow-x:initial;">
	<table class="table table-striped table-bordered" width="100%" id="tableData">
		<thead>
			<tr>
				<th>#</th>
				<th>Kode Kategori</th>
				<th>Nama Kategori</th>
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
					
                    <td><?=$val['kode_kategori']?></td>
                    <td><?=$val['nama_kategori']?></td>
                    
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
        <form id="frmKategori">
        	<div class="form-group">
        		<label>Kode Kategori</label>
        		<input type="text" name="kode_kategori" id="kode_kategori" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Nama Kategori</label>
        		<input type="text" name="nama_kategori" id="nama_kategori" class="form-control">
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
        url = _BASE+'Kategori/save';
    });


	$("#frmKategori").on('submit',(function(e){
        
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
                        directLink(_BASE+'Kategori');
                       
                   },1000);
                },
                error: function() 
                {
                }
        });
        $('#frmKategori')[0].reset();
    }));


    $('#btnEdit').click(function(){
    var btnCheked = $("input[name='chk[]']:checked").val(); // chek radio button
    //alert(btnCheked);
      if(btnCheked==undefined){
        alert('Anda Belum Memilih Data');
      }else{
        url = _BASE+'Kategori/update/'+btnCheked;

        $.get(_BASE+'Kategori/edit/'+btnCheked,function(resp){
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
        deleteData(_BASE+'Kategori/delete/'+btnCheked,_BASE+'Kategori');
      }
    });
</script>