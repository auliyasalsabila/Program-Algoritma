<?php
	if (isset($_POST['hitung'])) {
		$luas = $_POST['luas'];
		$s = $luas / 2;
		$hasil = $s * 4;
	}
?>

<title>Menghitung Keliling Persegi Dengan Luas</title>
<style type="text/css">
	input{
		text-align: center;
		width: 100%;
	}
</style>
<h1>Menghitung Keliling Persegi Dengan Luas</h1>
<form method="post" action="">
	<table>
		<tr>
			<td><input type="number" name="luas" placeholder="Luas"></td>
		</tr>
		<tr>
			<td><input type="number" name="keliling" placeholder="Keliling" value="<?php if (isset($_POST['hitung'])){ echo $hasil;} else{

				}?>" value = "Keliling"></td>
		</tr>
		<tr>
			<td><input type="submit" name="hitung"></td>
		</tr>
		<tr>
			<td><a href="algo.php" style="text-decoration-line: none; border: 1px solid black; color: black; padding: 2px; background-color: #dcdcdc;">Kembali</a></td>
		</tr>
	</table>
</form>