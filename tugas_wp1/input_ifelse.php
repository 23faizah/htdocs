<html>
<head>
	<title> WP 1 PERT.7 </title>
</head>
<body>
	 <body style="background-color:white">
	<center>
	<h1>Rumus-Rumus</h1>
	<form action="hasil_ifelse.php" method="post">
	<table border="1">
	</tr>
	<tr>
		<td>Nim</td>
		<td><input type="text" name="nim"></td>
	</tr>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td><input type="text" name="kelas"></td>
	</tr> 
	<tr>
		<td>Nilai 1</td>
		<td><input type="text" name="nilai1"></td>
	</tr>
	<tr>
		<td>Nilai 2</td>
		<td><input type="text" name="nilai2"></td>
	</tr>
	<tr align="center">
		<td colspan="2">
		<input type="radio" name="rumus" value="ll">Layang-layang<br>
		<input type="radio" name="rumus" value="jg">Jajar Genjang
		</td>
	</tr>
	</table>
	<br><input type="submit" value="Hitung"><input type="reset" value="batal">
	</form>
	</center>
</body>
</html>