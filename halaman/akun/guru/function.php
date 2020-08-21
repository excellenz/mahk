<?php

error_reporting(1);

$url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$url .= "://".$_SERVER['HTTP_HOST'];
$url .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

define('MAIN_URL', $url);

function tanggal_indo($tanggal)
{
	$bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
	$split = explode('-', $tanggal);
	return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
}

function awal_smt()
{
	if (date('m') > 6) {
		# code...
		$smt = 1;
	} else {
		# code...
		$smt = 2;
	}
	
	if ($smt == 1) {
		# code...
		$tahun = date('Y');
		$bulan = 07;
		return date('Y-m-d', strtotime('first day of '.$tahun.'-'.$bulan));
	} else {
		# code...
		$tahun = date('Y');
		$bulan = 01;
		return date('Y-m-d', strtotime('first day of '.$tahun.'-'.$bulan));
	}
	
}

function smt()
{
	$awal = awal_smt();
	$split = explode("-", $awal);
	if ($split[1] < 7) {
		return "Genap";
	}
	else {
		return "Ganjil";
	}
}

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
