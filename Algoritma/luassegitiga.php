<?php 
	if (isset($_POST['hitung'])) {
		$alas = $_POST['alas'];
		$tinggi = $_POST['tinggi'];
		$hasil = $alas * $tinggi / 2;
	}
?>

<title>Menghitung Luas Segitiga</title>
<style type="text/css">
	input{
		text-align: center;
	}
</style>
<h1>Menghitung Luas Segitiga</h1>
<form method="post" action="">
	<table>
		<tr>
			<td><input type="number" name="alas" placeholder="Alas"></td>
			<td><input type="number" name="tinggi" placeholder="Tinggi"></td>
		</tr>
		<tr>
			<td colspan="2"><input style = "width: 100%;" type="number" name="luas" placeholder="Luas" value="<?php if (isset($_POST['hitung'])){ echo $hasil;} else{

				}?>" value = "Luas"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="hitung" value="Menghitung" style="width: 100%;"></td>
		</tr>
		<tr>
			<td><a href="algo.php" style="text-decoration-line: none; border: 1px solid black; color: black; padding: 2px; background-color: #dcdcdc;">Kembali</a></td>
		</tr>
	</table>
</form>