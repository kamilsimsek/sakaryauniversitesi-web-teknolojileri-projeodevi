<!doctype html>
<html lang="en">
  <head>
    <link href="css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Raleway&display=swap" rel="stylesheet">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
      body{
        background:url(download.jpg) no-repeat;
        
      }
    </style>
    <title>Web Teknolojileri Ödev</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top bar">
      <div class="container-fluid ">
        <a class="navbar-brand" href="#" style="color: black">Web Teknolojileri</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item text-center menlist">
              <a class="nav-link active menuitems" aria-current="page" href="giris.html">Giriş</a>
            </li>
            <li class="nav-item text-center menlist">
              <a class="nav-link menuitems" href="index.html">Hakkımda</a>
            </li>
            <li class="nav-item text-center menlist">
              <a class="nav-link menuitems" href="özgecmis.html">Özgeçmiş</a>
            </li>
            <li class="nav-item text-center menlist">
              <a class="nav-link menuitems" href="sehrim.html">Şehrim</a>
            </li>
            <li class="nav-item text-center menlist">
              <a class="nav-link menuitems" href="takim.html">Takımım</a>
            </li>
            <li class="nav-item text-center menlist">
              <a class="nav-link menuitems" href="ilgi.html">İlgi Alanı</a>
            </li>
            <li class="nav-item text-center menlist">
              <a class="nav-link menuitems" href="iletisim.html">İletişim</a>
            </li>
            
            
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br>
    
    <div class="container ml-3">
			
			<?php 

				include("kullanici.php");


				if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
				{
			       $_SESSION["login"] = "true";
			       $_SESSION["user"] = $user;
			       $_SESSION["pass"] = $pass;
			
			       echo("<font color='#fffff'>Girişiniz başarıyla gerçeleştirildi. Hoşgeldin $user !</font>");
			
				}
			
				else 
				{
			            echo "<font color='#ffffc'>Kullancı adı veya şifre yanlış !.</font><br>";
			            echo "<font color='#ffffc'>Yönlendiriliyorsunuz !</font>";
			            header("Refresh: 0; url=giris.html");
			    }
			
			?>
			
		</div>

    
        
       
    <footer class="bg-dark py-5">Tüm Hakları Saklıdır &copy; | 2021 
      Designed by Kamil Şimşek
    </footer>
   
  </body>
  
</html>