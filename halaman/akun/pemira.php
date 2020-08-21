<?php

$data = new database();
$data_siswa = $data->getDb()->query("SELECT * FROM siswa WHERE user_name = '$nama'");
$siswa = $data_siswa->fetchAll();
// print_r($siswa);
foreach ($siswa as $s) {
    # code...
    $user_name = $s['user_name'];
    $nama_lengkap = $s['nama_lengkap'];
    $level = $s['level'];
    $kelas = $s['kelas'];
}
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
		<div class="row col-md-12">
			<div class="card col-md-3">
			  <img src="asset/main/img/oshk/zhafif.jpg" class="card-img-top">
			  <div class="card-body">
			    <h3 class="card-title">Muhammad Zhafif Naufal Azhar</h3>
			    <p class="text-muted">Kelas	: XI IPS 1</p>
			    <p class="text-muted">Asal	: Depok</p>
			    <p class="text-muted">TTL	: Jakarta, 5 November 2004</p>
			    <p class="text-muted">Hobi	: Memotret, Menyendja</p>
			    <p class="text-muted">Motto Hidup	: <i>Intinya berarti, ga ribet, ga susah, cukup peduli</i></p>
			    <a href="#" class="btn btn-primary">Pilih</a>
			  </div>
			</div>
		</div>
	</div>
</section>