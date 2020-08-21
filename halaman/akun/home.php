<?php

$data = new database();
$data_siswa = $data->getDb()->query("SELECT * FROM siswa WHERE user_name = '$username'");
$siswa = $data_siswa->fetchAll();
// print_r($siswa);
foreach ($siswa as $s) {
    # code...
    $user_name = $s['user_name'];
    $nama_lengkap = htmlentities($s['nama_lengkap'], ENT_QUOTES);
    $level = $s['level'];
    $kelas = $s['kelas'];
}
$data_mapel = $data->getDb()->query("SELECT * FROM mapel WHERE level = '$level'");
$mapel = $data_mapel->fetchAll();
?>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">E-Learning - <?= $nama_lengkap; ?></h2>
                <p>Pembelajaran Daring Melalui Video Pembelajaran, Rangkuman Materi Dan Tes Pehahaman Materi.</p>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
    	<div class="container content">		
            <!-- Service Blcoks -->
        <section class="course"> 

            <div class="row service-v1 margin-bottom-40">
                <?php
                    foreach ($mapel as $m) :
                    $kode = $m['kode'];
                    $materi = $data->tampilMateribyMapel($kode);      
                ?>
                <div class="col-md-3 md-margin-bottom-40">
                    <img class="img-responsive" src="<?= $m['gambar']; ?>" alt="">   
                    <center>
                        <h3><?= $m['nama']; ?></h3>
                        <form role="form" method="post" action="tampil-materi.php" enctype="multipart/form-data">
                        <p>
                            <select name="id_materi" id="cars">
                                <option value="-">Pilih Materi</option>
                                <?php                        
                                    foreach ($materi as $mat) {
                                        echo "<option value=".$mat['id'].">";
                                        echo $mat['judul'];
                                        echo "</option>";
                                    }
                                ?>
                            </select>
                        </p>
                        <p>
                            <input type="hidden" name="nama_santri" value="<?= $nama_lengkap; ?>">
                            <input type="hidden" name="level" value="<?= $level; ?>">
                            <label for="cars"><button type="submit" class="btn btn-medium"> Pilih Materi</button></label>
                        </p>
                        </form>
                    </center>
                </div>
                <?php
                    endforeach;
                ?>
                <!--<div class="col-md-3">
                    <img class="img-responsive" src="asset/main/img/kelas/aqidah.png" alt="">            
                    <center><h3>Akidah</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3 md-margin-bottom-40">
                  <img class="img-responsive" src="asset/main/img/kelas/fiqih.png" alt="">  
                    <center><h3>Fikih</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3 md-margin-bottom-40">
                  <img class="img-responsive" src="asset/main/img/kelas/bahasa-indonesia.png" alt="">  
                    <center><h3>Bahasa Indonesia</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>-->
            </div>  
            <!--<div class="row service-v1 margin-bottom-40">
                <div class="col-md-3 md-margin-bottom-40">
                    <img class="img-responsive" src="asset/main/img/kelas/bahasa-arab.png" alt="">   
                    <center><h3>Bahasa Arab</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <img class="img-responsive" src="asset/main/img/kelas/matematika.png" alt="">            
                    <center><h3>Matematika</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3 md-margin-bottom-40">
                  <img class="img-responsive" src="asset/main/img/kelas/sejarah-indonesia.png" alt="">  
                    <center><h3>Sejarah Indonesia</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3 md-margin-bottom-40">
                  <img class="img-responsive" src="asset/main/img/kelas/bahasa-inggris.png" alt="">  
                    <center><h3>Bahasa Inggris</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
            </div>  
            <div class="row service-v1 margin-bottom-40">
                <div class="col-md-3 md-margin-bottom-40">
                    <img class="img-responsive" src="asset/main/img/kelas/matematika.png" alt="">   
                    <center><h3>Matematika IPA</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <img class="img-responsive" src="asset/main/img/kelas/biologi.png" alt="">            
                    <center><h3>Biologi</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3 md-margin-bottom-40">
                  <img class="img-responsive" src="asset/main/img/kelas/fisika.png" alt="">  
                    <center><h3>Fisika</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3 md-margin-bottom-40">
                  <img class="img-responsive" src="asset/main/img/kelas/kimia.png" alt="">  
                    <center><h3>Kimia</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
            </div>  
            <div class="row service-v1 margin-bottom-40">
                <div class="col-md-3 md-margin-bottom-40">
                    <img class="img-responsive" src="asset/main/img/kelas/geografi.png" alt="">   
                    <center><h3>Geografi</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <img class="img-responsive" src="asset/main/img/kelas/sejarah.png" alt="">            
                    <center><h3>Sejarah Peminatan</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3 md-margin-bottom-40">
                  <img class="img-responsive" src="asset/main/img/kelas/sosiologi.png" alt="">  
                    <center><h3>Sosiologi</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3 md-margin-bottom-40">
                  <img class="img-responsive" src="asset/main/img/kelas/ekonomi.png" alt="">  
                    <center><h3>Ekonomi</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
            </div>  
            <div class="row service-v1 margin-bottom-40">
                <div class="col-md-3 md-margin-bottom-40">
                    <img class="img-responsive" src="asset/main/img/kelas/tafsir.png" alt="">   
                    <center><h3>Ilmu Tafsir</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <img class="img-responsive" src="asset/main/img/kelas/hadits.png" alt="">            
                    <center><h3>Ilmu Hadits</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3 md-margin-bottom-40">
                  <img class="img-responsive" src="asset/main/img/kelas/fiqih.png" alt="">  
                    <center><h3>Ushul Fikih</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3 md-margin-bottom-40">
                  <img class="img-responsive" src="asset/main/img/kelas/ilmu-kalam.png" alt="">  
                    <center><h3>Ilmu Kalam</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
            </div>  
            <div class="row service-v1 margin-bottom-40">
                <div class="col-md-3 md-margin-bottom-40">
                    <img class="img-responsive" src="asset/main/img/kelas/akhlak.png" alt="">   
                    <center><h3>Akhlak</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <img class="img-responsive" src="asset/main/img/kelas/balaghoh.png" alt=""> 
                    <center><h3>Balaghoh</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3 md-margin-bottom-40">
                  <img class="img-responsive" src="asset/main/img/kelas/biologi.png" alt="">  
                    <center><h3>Biologi Lintas Minat</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3 md-margin-bottom-40">
                  <img class="img-responsive" src="asset/main/img/kelas/geografi.png" alt="">  
                    <center><h3>Geografi Lintas Minat</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
            </div>  
            <div class="row service-v1 margin-bottom-40">
                <div class="col-md-3 md-margin-bottom-40">
                    <img class="img-responsive" src="asset/main/img/kelas/ekonomi.png" alt="">   
                    <center><h3>Ekonomi Lintas Minat</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <img class="img-responsive" src="asset/main/img/kelas/sosiologi.png" alt="">       
                    <center><h3>Sosiologi Lintas Minat</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3 md-margin-bottom-40">
                  <img class="img-responsive" src="asset/main/img/kelas/tafsir.png" alt="">  
                    <center><h3>Ilmu Tafsir Lintas Minat</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3 md-margin-bottom-40">
                  <img class="img-responsive" src="asset/main/img/kelas/hadits.png" alt="">  
                    <center><h3>Ilmu Hadits Lintas Minat</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
            </div>  
            <div class="row service-v1 margin-bottom-40">
                <div class="col-md-3 md-margin-bottom-40">
                    <img class="img-responsive" src="asset/main/img/kelas/tik.png" alt="">   
                    <center><h3>Informatika Lintas Minat</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <img class="img-responsive" src="asset/main/img/kelas/2.png" alt="">            
                    <center><h3>Tahfidz Al-Quran</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3 md-margin-bottom-40">
                  <img class="img-responsive" src="asset/main/img/kelas/shorof.png" alt="">  
                    <center><h3>Nahwu</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3 md-margin-bottom-40">
                  <img class="img-responsive" src="asset/main/img/kelas/hadits.png" alt="">  
                    <center><h3>Hadits</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
            </div>  
            <div class="row service-v1 margin-bottom-40">
                <div class="col-md-3 md-margin-bottom-40">
                    <img class="img-responsive" src="asset/main/img/kelas/ekonomi.png" alt="">   
                    <center><h3>Faroidh</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <img class="img-responsive" src="asset/main/img/kelas/fiqih.png" alt="">            
                    <center><h3>Fikih Dakwah</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3 md-margin-bottom-40">
                  <img class="img-responsive" src="asset/main/img/kelas/qowaid.png" alt="">  
                    <center><h3>Qowaid Fiqhiyah</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3 md-margin-bottom-40">
                  <img class="img-responsive" src="asset/main/img/kelas/fiqih.png" alt="">  
                    <center><h3>Tsaqofah</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
            </div>  
            <div class="row service-v1 margin-bottom-40">
                <div class="col-md-3 md-margin-bottom-40">
                    <img class="img-responsive" src="asset/main/img/kelas/khot-imla.png" alt="">   
                    <center><h3>Imla - Khot</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <img class="img-responsive" src="asset/main/img/kelas/shorof.png" alt="">            
                    <center><h3>Shorof</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3 md-margin-bottom-40">
                  <img class="img-responsive" src="asset/main/img/kelas/2.png" alt="">  
                    <center><h3>Talaqi Al-Quran</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
                <div class="col-md-3 md-margin-bottom-40">
                  <img class="img-responsive" src="asset/main/img/kelas/ski.png" alt="">  
                    <center><h3>SKI</h3></center>
                    <label for="cars"><button  class="btn btn-medium"> Pilih Materi</button></label>
                    <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    </select>
                </div>
            </div>
        </div>-->
        </section>
    </section>
