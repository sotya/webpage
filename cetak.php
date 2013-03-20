<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
		<title>Sotya</title>
	</head>
	<body>
		<table width="90%" align="center">
			<tr>
				<td id="Header" colspan="3">My Freestyle Page</td>
			</tr>
			<tr>
				<td id="Menu">menu</td>
				<td id="Konten">
				<b>
					<?php
					$nama=$_POST['nama'];
					$tgl_lahir=$_POST['tgl_lahir'];
					$tempat_lahir=$_POST['tempat_lahir'];
					$sex=$_POST['sex'];
					$kerja=$_POST['kerja'];
					$email=$_POST['email'];
					$telp=$_POST['telp'];
					$sd=$_POST['sd'];
					$lulus_sd=$_POST['lulus_sd'];
					$smp=$_POST['smp'];
					$lulus_smp=$_POST['lulus_smp'];
					$sma=$_POST['sma'];
					$lulus_sma=$_POST['lulus_sma'];
					$pt=$_POST['univ'];
					$jurusan=$_POST['jurusan'];
					$lulus_kuliah=$_POST['lulus_kuliah'];
					$organisasi1=$_POST['organisasi1'];
					$organisasi2=$_POST['organisasi2'];
					$jenis1=$_POST['jenis1'];
					$jenis2=$_POST['jenis2'];
					
					echo "Name : $nama<br>";
					echo "Birthplace : $tempat_lahir<br/>";
					echo "Birthdate : $tgl_lahir<br>";
					echo "Gender : $sex<br>";
					echo "Occupation : $kerja<br>";
					echo "Email : $email<br>";
					echo "Phone: $telp<br>";
					
					echo "<br>";
					echo "Educational Background<br>";
					echo "Elementary School: $sd<br>";
					echo "Middle School: $smp<br>";
					echo "High School: $sma<br>";
					echo "College: $pt<br>";
					echo "Major: $jurusan<br>";
					echo "Graduate Year: $lulus_kuliah<br>";
					
					echo "<br>";
					echo "Organizational Background<br>";
					echo "Organization: $organisasi1<br>";
					echo "Organization: $organisasi2<br>";
					?>
				</b>
				</td>
				<td id="iklan">ads</td>
			</tr>
			<tr>
				<td id="footer" colspan="3">footer</td>
			</tr>
		</table>
	</body>
</html>