<!DOCTYPE html>

<html lang="en">



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

                <a href="anasayfa.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>

                <div class="d-flex align-items-center ms-4 mb-4">

                    <div class="position-relative">

                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">

                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>

                    </div>

                    <div class="ms-3">

                        <h6 class="mb-0">YÖNETİCİ</h6>

                        <span></span>

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
                            
                        </div>
                    </div>  
    
                    </div>   
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
                             <a href="index.php"> Çıkış Yap</a>
                        </a>
                    </div>
                </div>
            </nav>

            <!-- Navbar End -->

            <!-- Table Start -->

   <table class="table table-hover">
 
<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Bootstrap Simple Data Table</title>

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

    body {

        color: #566787;

        background: #f5f5f5;

        font-family: 'Roboto', sans-serif;

    }

    .table-responsive {

        margin: 30px 0;

    }

    .table-wrapper {

        min-width: 1000px;

        background: #fff;

        padding: 20px;        

        box-shadow: 0 1px 1px rgba(0,0,0,.05);

    }

    .table-title {

        padding-bottom: 10px;

        margin: 0 0 10px;

    }

    .table-title h2 {

        margin: 8px 0 0;

        font-size: 22px;

    }

    .search-box {

        position: relative;        

        float: right;

    }

    .search-box input {

        height: 34px;

        border-radius: 20px;

        padding-left: 35px;

        border-color: #ddd;

        box-shadow: none;

    }

    .search-box input:focus {

        border-color: #3FBAE4;

    }

    .search-box i {

        color: #a0a5b1;

        position: absolute;

        font-size: 19px;

        top: 8px;

        left: 10px;

    }

    table.table tr th, table.table tr td {

        border-color: #e9e9e9;

    }

    table.table-striped tbody tr:nth-of-type(odd) {

        background-color: #fcfcfc;

    }

    table.table-striped.table-hover tbody tr:hover {

        background: #f5f5f5;

    }

    table.table th i {

        font-size: 13px;

        margin: 0 5px;

        cursor: pointer;

    }

    table.table td:last-child {

        width: 130px;

    }

    table.table td a {

        color: #a0a5b1;

        display: inline-block;

        margin: 0 5px;

    }

    table.table td a.view {

        color: #03A9F4;

    }

    table.table td a.edit {

        color: #FFC107;

    }

    table.table td a.delete {

        color: #E34724;

    }

    table.table td i {

        font-size: 19px;

    }    

    .pagination {

        float: right;

        margin: 0 0 5px;

    }

    .pagination li a {

        border: none;

        font-size: 95%;

        width: 30px;

        height: 30px;

        color: #999;

        margin: 0 2px;

        line-height: 30px;

        border-radius: 30px !important;

        text-align: center;

        padding: 0;

    }

    .pagination li a:hover {

        color: #666;

    }   

    .pagination li.active a {

        background: #03A9F4;

    }

    .pagination li.active a:hover {        

        background: #0397d6;

    }

    .pagination li.disabled i {

        color: #ccc;

    }

    .pagination li i {

        font-size: 16px;

        padding-top: 6px

    }

    .hint-text {

        float: left;

        margin-top: 6px;

        font-size: 95%;

    }    

</style>

<script>

$(document).ready(function(){

    $('[data-toggle="tooltip"]').tooltip();

});

</script>

</head>

<body>

    <div class="container">

        <div class="table-responsive">

            <div class="table-wrapper">

                <div class="table-title">

                    <div class="row">

                        <div class="col-sm-8"><h2>Poje  <b>Görevlileri</b></h2></div>

                        <div class="col-sm-4">

                            

                        </div>

                    </div>

                </div>

                <table class="table table-striped table-hover table-bordered">

                    <thead>

                        <tr>

                            <th>#</th>

                            <th>Ad Soyad <i class="fa fa-sort"></i></th>

                            <th>Bölüm</th>

                            <th>Numara <i class="fa fa-sort"></i></th>
			    <th>
				<button type="submit" class="btn btn-primary">Ekle</button>
			    </th>


                            

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>1</td>

                            <td>Deniz Yıldız</td>

                            <td>Bilgisayar Programcılığı</td>

                            <td>2113201050</td>

                            

                            <td>

                                <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>

                                <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>

                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>

                            </td>

                        </tr>

                        <tr>

                            <td>2</td>

                            <td>Taha Fere</td>

                            <td>Bilgisayar Programcılığı</td>

                            <td>Berlin</td>

                            

                            <td>

                                <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>

                                <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>

                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>

                            </td>

                        </tr>

                        <tr>

                            <td>3</td>

                            <td>Tuna Kaynar</td>

                            <td>Bilgisayar Programcılığı</td>

                            <td>Madrid</td>

                            

                            <td>

                                <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>

                                <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>

                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>

                            </td>

                        </tr>

                        <tr>

                            <td>4</td>

                            <td>Batuhan Toruk</td>

                            <td>Bilgisayar Programcılığı</td>

                            <td>Paris</td>

                            

                            <td>

                                <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>

                                <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>

                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>

                            </td>

                        </tr>

                        <tr>

                            <td>5</td>

                            <td>Fatmanur Tilaver</td>

                            <td>Bilgisayar Programcılığı</td>

                            <td>Turin</td>

                            

                            <td>

                                <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>

                                <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>

                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>

                            </td>

                        </tr>  

                        

                        

                        <tr>

                            <td>6</td>

                            <td>Sıla Perktaş</td>

                            <td>Bilgisayar Programcılığı</td>

                            <td>Paris</td>

                            

                            <td>

                                <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>

                                <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>

                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>

                            </td>

                        </tr>

                    </tbody>

                </table>

                
            </div>

        </div>        

    </div>     



</table>


                    </div>

                </div>

            </div>

            <!-- Table End -->

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



</html>