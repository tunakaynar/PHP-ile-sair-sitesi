<?php
    session_start();
    include("ayar.php");

    if ($_SESSION["giris"] != sha1(md5("var")) || $_COOKIE["kullanici"] != "msb") {
        //header("Location: cikis.php");
    }

    if ($_POST) {
        $aciklama = $_POST["aciklama"];
        $sorgu = $baglan->query("delete from sairekle");
        $sorgu = $baglan->query("insert into sairekle (aciklama) values ('$aciklama')");
        echo "<script> window.location.href='hizmetlerimiz.php'; </script>";
    }

    $sorgu = $baglan->query("select * from sairekle");
    $satir = $sorgu->fetch_object();

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

    

     <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
         <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">admin</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="anasayfa.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Anasayfa</a>
                   
                 <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Şair düzenle</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="sairekle.php" class="dropdown-item">Şair ekle/sil</a>
                            
                            <a href="sairguncelle.php" class="dropdown-item">Şair Güncelle</a>
                            
                            
                        </div>
                    </div>   

                                        <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Kullanıcı düzenle</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="kullanicilar.php" class="dropdown-item">Kullanıcı ekle</a>
                            <a href="kullanicilar.php" class="dropdown-item">Kullanıcı sil</a>
                            <a href="signup.html" class="dropdown-item">Blog Güncelle</a>
                            
                            
                        </div>
                    </div>      
                    

                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Admin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="index.php" class="dropdown-item">Çıkış yap</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Form Start -->
            <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Şair Güncelle</h6>
                            <form>
                                <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
			<?php
			include("ayar.php");
			$sonuc= $baglan->query("select * from sairekle");
			if ($sonuc->num_rows > 0) 
			{
			  while($cek = $sonuc->fetch_assoc()) 
			  {
			    $id=$cek["id"];
			    $ad=$cek["isim"];
			    echo " <option value='$id'>$ad</option>";
			   }
			} 
			?>
                                </select>
                                <label for="floatingSelect">Şair ismi</label>
                            </div>

                                <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
			<?php
			include("ayar.php");
	 		$b="";
			$sonuc= $baglan->query("select * from sairekle where id='$id'");
			if ($sonuc->num_rows > 0) 
			{
			  while($cek = $sonuc->fetch_assoc()) 
			  {
			    $tur=$cek["tur"];
			    $turk="turk";
			    $yabanc�="yabanci";
			    $a= " <option value='$tur'>$tur</option>";
			    echo $a;
			    if($tur=="turk"){$b= " <option value='$yabanc�'>yabanci</option>";}
			    elseif($tur=="yabanci"){$b= " <option value='$turk'>turk</option>";}
			    echo $b;   
			}
			} 
			?>

                                </select>
                                <label for="floatingSelect">Şair Değiştirilecek Türünü seçiniz</label>
                            </div>
                                <div class="form-floating">
                               
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Şair Hakkında bilgi</label>
                       
                                </div>
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" style="height: 150px;"><?php echo $satir->aciklama; ?></textarea>
                                
                            </div>
				&nbsp
				<div class="form-floating">
                               
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Ozet</label>
                       
                                </div>
                                <textarea class="form-control" name="ozet" placeholder="Leave a comment here"
                                    id="floatingTextarea" style="height: 150px;"><?php echo $satir->ozet; ?></textarea>
                                
                            </div>

                        <div class="form-floating">
                            
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Şair resmi</label>
                                <input class="form-control" type="file" id="formFile">
                        </div>
                           
                            </div>
                                <button type="submit" value="Kaydet" class="btn btn-primary">Güncelle</button>
                            </form>

                        </div>
                    </div>       
            <!-- Form End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</body>
</html>