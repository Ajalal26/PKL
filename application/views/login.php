<!DOCTYPE html>
<html>
<head>
	<title>LOGIN ANGGOTA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</head>
<body>
	<div class="warper-moi" style="width: 100%; min-height: 100vh;margin: 0px;">
		<div style="width: 100%; background-image:url('<?=base_url()?>asset/image/mobil.jpg'); background-repeat: no-repeat; background-size: 100% 100%; object-fit: contain; min-height: 100vh; display: flex; justify-content: center;align-items: center;">
			<form method="POST" action="<?=base_url()?>Login/aksi_login">
			<div style=" background: #f7f7f7; padding: 20px; display: flex; flex-direction: column;align-items: center; border-radius: 20px;">
				<div style="width: 250px;">
					<img src="<?=base_url()?>asset/icon/ic_moi.png" style="width: 100%;">	
				</div>

				<div style="width: 100%; margin-top: 20px;">
					<p style="font-family: 'Poppins',sans-serif;">ID ANGGOTA</p>
					<input type="text" name="username" id="username" class="form-control">

					<p style="font-family: 'Poppins',sans-serif; margin-top: 20px;">PASSWORD</p>
					<input type="password" name="password" id="password" class="form-control">


				</div>

				<div style="width: 100%; margin-top: 20px; display: flex; justify-content: center;">
					<button id="btnLogin" class="btn btn-primary" type="submit" style="width: 150px; border-radius: 30px; margin-top: 20px; text-align: center;"> LOGIN</button>	
					<a href="<?=base_url()?>" class="btn btn-primary" style="border-radius: 30px; margin-top: 20px; text-align: center; margin-left: 10px;"> HALAMAN UTAMA</a>	
				</div>
			</div>
			</form>
		</div>	
		<?php
			$this->load->view('web/inc_footer');
		?>

	</div>
	<script type="text/javascript">
		// $('#btnLogin').click(function(){
		// 	alert('Database belum tersedia');
		// })
	</script>
</body>
</html>