<?php
	if (isset($_POST['hitung'])) {
		$r = $_POST['r'];
		$phi = 3.14;
		$hasil = 2 * $phi * $r;
	}
?>


<title>Menghitung Keliling Lingkaran</title>
<style type="text/css">
	input{
		text-align: center;
		width: 100%;
	}
</style>
<h1>Menghitung Keliling Lingkaran</h1>
<form method="post" action="">
	<table>
		<tr>
			<td><input type="number" name="r" placeholder="Jari-Jari"></td>
		</tr>
		<tr>
			<td><input type="number" name="keliling" placeholder="Keliling" value="<?php if (isset($_POST['hitung'])){ echo $hasil;} else{

			}?>" value = "Keliling"></td>
		</tr>
		<tr>
			<td><input type="submit" name="hitung" value="Menghitung"></td>
		</tr>
		<tr>
			<td><a href="algo.php" style="text-decoration-line: none; border: 1px solid black; color: black; padding: 2px; background-color: #dcdcdc;">Kembali</a></td>
		</tr>
	</table>
</form>