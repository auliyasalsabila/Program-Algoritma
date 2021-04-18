<title>Menentukan Bilangan Ganjil Atau Genap</title>
<style type="text/css">
	input{
		text-align: center;
		width: 100%;
	}
</style>
<h1>Menentukan Bilangan Ganjil Atau Genap</h1>
<form method="post" action="">
	<table>
		<tr>
			<td><input type="number" name="angka" placeholder="Bilangan"></td>
			<td><?php
					if (isset($_POST['cek'])) {
						$angka = $_POST['angka'];
						if ($angka % 2 == 0) {
							echo "$angka adalah bilangan Genap";
						}else{
							echo "$angka adalah bilangan Ganjil";
						}
					}
				?>			
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="cek" value="Cek"></td>
		</tr>
		<tr>
			<td><a href="algo.php" style="text-decoration-line: none; border: 1px solid black; color: black; padding: 2px; background-color: #dcdcdc;">Kembali</a></td>
		</tr>
	</table>
</form>