<?php

if (isset($_POST['id_materi'])) {
    include "function.php";
    include "database.php";
    $data = new database();
    $id = $_POST['id_materi'];
    $nama_santri = $_POST['nama_santri'];
    $level = $_POST['level'];

    if ( substr($level, 0, 3) == "xii" ) {
        # code...
        $kelascbt = "https://excellenz-data-7.com/12";
    } elseif ( substr($level, 0, 2) == "xi" ) {
        # code...
        $kelascbt = "https://excellenz-data-6.com/11";
    } else {
        $kelascbt = "https://excellenz-data-5.com/i10";
    }
    

?>
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

    <?php
        } else {
            $id = $_GET['id'];
        }
    ?>
    <!-- end header -->
    <section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">e-Learning MA Husnul Khotimah</h2>
            </div>
        </div>
    </div>
    </section>
    <section id="content">
    <div class="container">
        <?php
            $materi = $data->tampilMateri($id);
            foreach ($materi as $key) :
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="about-logo">
                    <h1>
                        <?php
                            $mapel = $data->tampilMapel($key['mapel_kode']);
                            foreach ($mapel as $m) {
                            echo $m['nama'];
                            }
                        ?>
                    </h1>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <?= $key['video']; ?>
                    </div>
                    <h2>
                        <?= $key['judul']; ?>
                    </h2>
                    <p>
                        <?= $key['deskripsi']; ?>
                    </p>
                    </br>
                    <center>
                        <a href="<?php echo MAIN_URL.$key['file']; ?>" target="_blank" class="btn btn-medium">
                            <i class="icon-bolt"></i>Download Materi
                        </a>&nbsp
                        <a href="<?= $kelascbt; ?>/" target="_blank" class="btn btn-medium">
                            <i class="icon-bolt"></i>Tes Pemahaman
                        </a>
                    </center>
                </div>
            </div>
        </div>
        <!--<div class="row">
                <div id="disqus_thread"></div>
                    <script>
                        /**
                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
                         */
                        /*
                        var disqus_config = function () {
                            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        */
                        (function() {  // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            
                            s.src = 'https://hendrasaleh.disqus.com/embed.js';
                            
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
            </div>-->
        <?php
            endforeach;
        ?>
    </div>
    </section>
    <?php
    if (isset($_POST['id_materi'])) {
        # code...
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
<?php
}
?>