<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body style=""bgcolor="#d9d1ba">
    <?php

          $nim="19200597";
          $nama="Afifah Nurul Faizah";
          $kelas="19.2B.05";
          ?>
 <center>
    <tr>
        <br><td>Nim</td>
        <td>:</td>
        <td><?php echo "$nim";?></td>
    </tr>
    <tr>
        <br><td>Nama</td>
        <td>:</td>
        <td><?php echo "$nama"; ?></td>
    </tr>
    <tr>
        <br><td>Kelas</td>
        <td>:</td>
        <td><?php echo "$kelas"; ?></td>
    </tr>
  </table>
</center>

  <center>
    <?php
    $teks1 = "<h1>Belajar Menghitung ";
    $teks2 = "Volume Bola <br></h1>";
    $teks3 = $teks1.$teks2;
    echo "$teks3<br>";

    $phi = 3.14;
    $jari = 10;
    $hasil = 4/3*$phi*$jari*$jari*$jari;
    echo "Jari-Jari = $jari<br>";
    echo "Volume Bola = $hasil";
    ?>
  </center>
  </body>
</html>
