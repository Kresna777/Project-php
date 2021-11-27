<?php
$system_operation = [

	[
	"nama_os" => "Xubuntu",
	"lisensi" => "Open Source",
	"requirements" => [
		"1.5GHz Dual Core CPU",
		"2GB RAM",
		"20GB free space HDD"],
	"gambar" => "img/xubuntu.png",
	"alt" => "Xubuntu OS Image"
	],

	[
	"nama_os" => "Debian",
	"lisensi" => "Open Source",
	"requirements" => [
		"1GHz Pentium CPU",
		"512MB RAM",
		"10GB Minimum HDD"],
	"gambar" => "img/debian.jpg",
	"alt" => "Debian OS Image"
	],


	[
	"nama_os" => "Ubuntu Server 20.04",
	"lisensi" => "Open Source",
	"requirements" => [
		"1GHz or Beter CPU",
		"1GB or more RAM",
		"2.5GB HDD"],
	"gambar" => "img/ubuntu.png",
	"alt" => "Ubuntu Server 20.04 OS Image"
	],

	[
	"nama_os" => "Windows 10",
	"lisensi" => "Close Source",
	"requirements" => [
		"1GHz or better CPU",
		"1GB RAM (32bit) & 2GB RAM (64bit)",
		"16GB HDD (32bit) & 20GB HDD (64bit)"],
	"gambar" => "img/windows-10.jpg",
	"alt" => "Windows 10 OS Image"
	],

	[
	"nama_os" => "Windows 7",
	"lisensi" => "Close Source",
	"requirements" => [
		"1GHz or faster CPU",
		"1GB RAM",
		"16GB HDD (32bit) & 20GB HDD (64bit)"],
	"gambar" => "img/windows-7.jpg",
	"alt" => "Windows 7 OS Image"
	]
];

?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar OS</title>
  <style>

	table,th,td {
	border : 2px solid black;
	border-collapse: collapse;
	padding: 15px;
	width: 800px;
	}

	table {margin: 20px auto;}

	thead {
	height: 60px;
	background-color: lightblue; 
	color: royalblue;
	}

	body {
	font-family: arial; font-size: 20px;
	background-image: url("img/email-pattern.png");
	}

	.img{text-align: center;}

	.h:hover {background-color: aqua;}
  </style>
</head>
<body>

  <table>
    <thead>
      <tr>
	<th colspan="3">Daftar OS & Requirements</th>
      </tr>
    </thead>
    <tbody>

  <?php foreach( $system_operation as $os ) : ?>
      <tr>
	<td rowspan="4" class="img">
	  <img src="<?= $os["gambar"]; ?>" alt="<?= $os["alt"]; ?>">
	</td>
      </tr>
      <tr class="h">
	<td>Nama OS</td>
	<td><?= $os["nama_os"]; ?></td>
      </tr>
      <tr class="h">
	<td>Lisensi</td>
	<td><?= $os["lisensi"]; ?></td>
      </tr>
      <tr class="h">
	<td>Requirements</td>
	<td>
	<ul>
	<?php foreach( $os["requirements"] as $r ) : ?> 
	  <li><?= $r; ?></li> 
	<? endforeach; ?>
	</ul>
	</td>
      </tr>
  <?php endforeach; ?>
    </tbody>
  </table>

</body>
</html>
