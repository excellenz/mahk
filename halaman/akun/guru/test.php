<?php
// include "function.php";
// include "database.php";

// $data = new database();

// $level_siswa = $_POST['level'];
// $mapel_kode = $_POST['mapel'];
// $judul = $_POST['judul_materi'];
// $deskripsi = $_POST['deskripsi'];
// $video = $_POST['video'];
// $namaFile = $_FILES['file']['name'];
// $namaSementara = $_FILES['file']['tmp_name'];

// // tentukan lokasi file akan dipindahkan
// $dirUpload = "asset/main/files/";
// $hasil = $dirUpload.$namaFile;

// // pindahkan file
// $terupload = move_uploaded_file($namaSementara, "../".$dirUpload.$namaFile);

// if ($terupload) {
//     $query = "INSERT INTO materi (mapel_kode, level_siswa, judul, deskripsi, video, file) VALUES ('$mapel_kode', '$level_siswa', '$judul', '$deskripsi', '$video', '$hasil')";
//     $query_run = $data->getDb()->query($query);

//     if ($query_run) {
//     	header("location: ".MAIN_URL."index.php");
//     }
// } else {
//     echo "Upload Gagal!";
// }
// $title = "Kasus- kasus Pelanggaran Hak Dan Pengingkaran Kewajiban Warga Negara dalam kehidupan Berbangsa dan bernegara";
$judul = "Kasus- kasus Pelanggaran Hak Dan Pengingkaran Kewajiban Warga Negara dalam kehidupan Berbangsa dan bernegara";
$jmlchar = substr_count($judul, " ");

echo $jmlchar."<br>";

function tampilJudul($title)
{
	# code...
	$arr = explode(" ", $title);
    $limit = 3;
    $new = [];

    if (count($arr) > $limit) {
        for($i = 0; $i < $limit; $i++) {
            array_push($new, $arr[$i]);
        }
    }

    if($new) {
        $new = implode(" ", $new);
        echo $new."..."; // Output : Rasang Beam Steal
    }
    else {
        echo $title;
    }
}

tampilJudul($judul);