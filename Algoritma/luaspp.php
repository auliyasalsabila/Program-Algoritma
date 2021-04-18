<?php 
	if (isset($_POST['hitung'])) {
		$panjang = $_POST['panjang'];
		$lebar = $_POST['lebar'];
		$hasil = $panjang * $lebar;
	}
?>

<title>Menghitung Luas Persegi Panjang</title>
<style type="text/css">
	input{
		text-align: center;
	}
</style>
<h1>Menghitung Luas Persegi Panjang</h1>
<form method="post" action="">
	<table>
		<tr>
			<td><input type="number" name="panjang" placeholder="Panjang"></td>
			<td><input type="number" name="lebar" placeholder="Lebar"></td>
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