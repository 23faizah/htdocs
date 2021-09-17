<html>
<head>
	<title>Latihan IF ELSE</title>
</head>
<body>
<center>
<?php

	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$kelas=$_POST['kelas'];
	$nilai1=$_POST['nilai1'];
	$nilai2=$_POST['nilai2'];
	$r=$_POST['rumus'];
?>

	<h2>HASIL HITUNG RUMUS</h2>
	Nim = <?php echo "$nim"; ?>	<br>
	Nama = <?php echo "$nama"; ?> <br>
	Kelas = <?php echo "$kelas"; ?> <br>
	Nilai a adalah = <?php echo "$nilai1"; ?> <br>
	Nilai b adalah = <?php echo "$nilai2"; ?> <br>
	
<?php
	 if ($nilai1=="0" && $nilai2=="0")
	 {echo "Tidak ada hasil perhitungan !!!";}
	 else
	 {
		 if ($r=="ll")
		 {
				$hasil=(0.5*($nilai1*$nilai2));
				echo "Rumus ysng dipilih adalah = Layang layang<br>
					  Hasil perhitungan rumus =$hasil";
		 }
		 else
		 {
			 $hasil=($nilai1*$nilai2);
			 echo "Rumus yang dipilih adalah = Jajar genjang<br>
				   Hasil perhitungan rumus =$hasil";
	  }	 }
?>
</center>
</body>
</html>		 