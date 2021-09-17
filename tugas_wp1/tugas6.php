<!DOCTYPE html>
<html>
<head>
	<title> PENDAFTARAN SEMINAR GRATIS </title>
</head>
<body>
	<?php
	echo "<body style='background-color:#d4ffb8'>";
$nim_author = "19200597";
$nama_author = "Afifah Nurul Faizah";
$kelas_author = "19.2B.05";

echo "<br> NIM: $nim_author <br>";
echo "Nama: $nama_author <br>";
echo "Kelas: $kelas_author <br>";
?>
<br> <h1> FORM PENDAFTARAN SEMINAR MOTIVASI TERBUKA 2021 </h1>
<br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<pre>
Nama Peserta		: <input type="text" name="nama"/> <br>
Alamat			: <textarea name="alamat" rows="5" cols="40"></textarea> <br>
Nomor Telp.		: <input type="text" name="telp"/></td> <br>
Jenis Kelamin		: <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
<br>Pekerjaan		: <select name="pekerjaan" value="Pekerjaan">
	<option>- Pilih Disini -</option>
	<option>Pelajar</option>
	<option>Mahasiswa</option>
	<option>Karyawan Swasta</option>
	<option>Pegawai Negeri</option>
	<option>Guru</option>
	<option>Lainnya</option></select>
	<br>
				<input type="submit" value="Selesai"> <input type="reset" value="Batal">
</pre>
</form>

<?php
echo "<b> DATA ANDA </b>";
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$pekerjaan=$_POST['pekerjaan'];
if(!empty($nama)){
echo "Nama : $nama <br>";}
if(!empty($alamat)){
echo "Alamat : $alamat <br>";}
if(!empty($telp)){
echo "Nomor Telp. : $telp <br>";}
if(!empty($telp)){
echo "Jenis Kelamin : $jenis_kelamin <br>";}
if(!empty($pekerjaan)){
echo "Pekerjaan : $pekerjaan <br>";}

?>
</body>
</html>