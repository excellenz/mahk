<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>MA Husnul Khotimah Kuningan</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/embed-responsive.css" rel="stylesheet" />
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" />

<link rel="shortcut icon" href="img/favicon.ico"> 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/logo.jpg" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="<?php if(!isset($_GET['page'])) {echo "active";}?>"><a href="index.php">Home</a></li> 
						<li class="<?php if($_GET['page'] === "profil") {echo "active";}?>"><a href="index.php?page=profil">Profil</a></li>
						<li class="<?php if($_GET['page'] === "login") {echo "active";}?>"><a href="halaman/akun">Login</a></li>
						<li class="<?php if($_GET['page'] === "kontak") {echo "active";}?>"><a href="index.php?page=kontak">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->


	<?php 
    if(!isset($_GET['page'])) {
        include "halaman/home.php";
    } else {
		$page = $_GET['page'];

		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
            case 'pat-online-idad':
                include "halaman/pat-online-idad.php";
                break;
            case 'pat-online-x-ipa':
                include "halaman/pat-online-x-ipa.php";
                break;
            case 'pat-online-x-ips':
                include "halaman/pat-online-x-ips.php";
                break;
            case 'pat-online-x-pk':
                include "halaman/pat-online-x-pk.php";
                break;
            case 'pat-online-xi-ipa':
                include "halaman/pat-online-xi-ipa.php";
                break;
            case 'pat-online-xi-ips':
                include "halaman/pat-online-xi-ips.php";
                break;
            case 'pat-online-xi-pk':
                include "halaman/pat-online-xi-pk.php";
                break;
            case 'e-learning':
                include "halaman/e-learning.php";
                break;
            case 'rapor-siswa':
                include "halaman/rapor-siswa.php";
                break;
            case 'galeri':
                include "halaman/galeri.php";
                break;
            case 'jadwal-pat':
                include "halaman/jadwal-pat.php";
                break;
            case 'contact':
                include "halaman/contact.php";
                break;
            case 'kegiatan-harian':
                include "halaman/kegiatan-harian.php";
                break;
            case 'study-club':
                include "halaman/study-club.php";
                break;
            case 'profil-mahk':
                include "halaman/profil-mahk.php";
                break;
            case 'pat-tutorial':
                include "halaman/pat-tutorial.php";
                break;
            case 'materi':
                include "halaman/materi.php";
                break;
  			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}

	 ?>



	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; MA Husnul Khotimah All right reserved.</span><br/>
							Design by <a href="http://excellenz.id" target="_blank">Excellenz.ID</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script> 
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>