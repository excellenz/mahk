<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>MA Husnul Khotimah Kuningan</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="asset/main/css/bootstrap.min.css" rel="stylesheet" />
<link href="asset/main/css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="asset/main/css/jcarousel.css" rel="stylesheet" />
<link href="asset/main/css/flexslider.css" rel="stylesheet" />
<link href="asset/main/css/embed-responsive.css" rel="stylesheet" />
<link href="asset/main/js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="asset/main/css/style.css" rel="stylesheet" />

<link rel="shortcut icon" href="asset/main/img/favicon.ico"> 
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
                    <a class="navbar-brand" href="index.php"><img src="asset/main/img/logo.jpg" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="<?php if(!isset($_GET['page'])) {echo "active";}?>"><a href="index.php">Home</a></li> 
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <?php require ($content); ?>
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
<script src="asset/main/js/jquery.js"></script>
<script src="asset/main/js/jquery.easing.1.3.js"></script>
<script src="asset/main/js/bootstrap.min.js"></script>
<script src="asset/main/js/jquery.fancybox.pack.js"></script>
<script src="asset/main/js/jquery.fancybox-media.js"></script> 
<script src="asset/main/js/portfolio/jquery.quicksand.js"></script>
<script src="asset/main/js/portfolio/setting.js"></script>
<script src="asset/main/js/jquery.flexslider.js"></script>
<script src="asset/main/js/animate.js"></script>
<script src="asset/main/js/custom.js"></script>
<script src="asset/main/js/owl-carousel/owl.carousel.js"></script>
</body>
</html>