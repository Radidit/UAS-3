<!DOCTYPE html>
<html>
<head>
	<h1><center>Mari Belajar! Menghitung Bangun Datar</center></h1>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default"; style="width: 100%; text-align: center;">
	<div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"; style="float: none; display: inline-block;"><a href="index.php">Persegi Panjang</a></li>
      <li style="float: none; display: inline-block;"><a href="index1.php">Segitiga (Sama Sisi)</a></li>
      <li style="float: none; display: inline-block;"><a href="index2.php">Linkaran</a></li>
	  <li style="float: none; display: inline-block;"><a href="index3.php">Persegi</a></li>
	</ul>
	</div>
	</nav>
	
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'keliling':
				$hasil = 2*$bil1+2*$bil2;
			break;
			case 'luas':
				$hasil = $bil1*$bil2;
			break;			
		}
	}
	?>
	
	<div class="kalkulator">
		<h2 class="judul">MENGHITUNG</h2>
		<h2 class="judul">LUAS / KELILING PERSEGI PANJANG</h2>
		<form method="post" action="index.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Panjang(CM)">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Lebar(CM)">
			<select class="opt" name="operasi">
				<option value="keliling">keliling</option>
				<option value="luas">luas</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil,'CM'; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</body>
</html>