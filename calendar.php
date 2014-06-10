<?php

$nama = $_POST["nama"];
$date = $_POST["date"];
$jantina = $_POST["radio-choice-v-1"];
$Membaca = $_POST["checkbox-v-1a"];
$Memasak = $_POST["checkbox-v-1b"];
$Mengira = $_POST["checkbox-v-1c"];
$job = $_POST["select-custom-21"];
$komen = $_POST["textarea-1"];

echo "Nama : $nama <br/>
		Tarikh Lahir : $date	 <br/>	
		Jantina : $jantina	 <br/>
		Membaca : $Membaca	 <br/>
		Memasak : $Memasak	 <br/>
		Mengira : $Mengira	 <br/>
		Pekerjaan : $job	 <br/>
		Komen : $komen	";

?>