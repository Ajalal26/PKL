<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <title>Triartha Causa Prima</title>

    <style>
      .loader {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 150px;
        height: 150px;
        -webkit-animation: spin 2s linear infinite; /* Safari */
        animation: spin 2s linear infinite;
      }

      /* Safari */
      @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
      }

      @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
      }

      @keyframes fadeout {
        from {opacity: 1;}
        to{opacity: 0;}
      }
    </style>

</head>

<body style="background: #fbfbf5; min-height: 100vh;">
	<div class="container" style="padding-top: 0%; text-align: center; display: flex;justify-content: center;align-items: center;min-height: 100vh;">
		<img src="<?=base_url('asset_admin/image/animasi/buble.gif')?>">
	</div>
<script type="text/javascript">
  (function(){
    var preload = document.getElementById("preload");
    var loading = 0;
    var id = setInterval(frame,25);

  function frame(){
    if(loading == 150){
      clearInterval(id);
      window.open("<?=base_url('Login/login_page')?>","_self");
    }else{
      loading = loading + 1;
      if(loading == 90){
        preload.style.animation = "fadeout 1s ease"
      }
    }
  }
  })();
  </script>
</body>

 
 
</html>