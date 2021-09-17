<!DOCTYPE html>
<html>
<head>
	<title> WP I Tugas 5 PHP </title>
<h2>INPUTKAN DATA DIRI ANDA</h2>
</head>
<body>
	 <body style="background-color:#ffb8b8">
	<form action="aksitugas5.php" method="post">
Nim : <input type ="text" name="nim" size="10"><br>
<br>
Nama : <input type ="text" name="nama" size="25"><br>
<br>
Kelas : <input type ="text" name="kelas" size="10"> <br>
<br>
Jenis Kelamin :
<input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan <br>
<br> Alamat : <textarea name="alamat" rows="5" cols="40"></textarea>
<br>
<br> Semester : <select name="Semester" value="Semester">
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option>
	<option>6</option>
	<option>7</option>
	<option>Lainnya</option></select>
<input type="submit" value="Submit"> 
<input type="reset" value="Reset"> 
</form>
</body>
</html>