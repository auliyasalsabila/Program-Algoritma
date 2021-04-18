<title>Menentukan Kelulusan Mahasiswa</title>
<h1>Menentukan Kelulusan Mahasiswa</h1>
<form method="post" action="">
	<table>
		<tr>
			<td>Nama : </td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Nilai : </td>
			<td><input type="number" name="nilai"></td>
		</tr>
		<tr>
			<td colspan="2"><?php 
			if (isset($_POST['submit'])) {
				$nama = $_POST['nama'];
				$nilai = $_POST['nilai'];
				if ($nilai > 70) {
					echo "Kepada $nama dengan Nilai $nilai Dinyatakan Lulus";
				}else{
					echo "Kepada $nama dengan Nilai $nilai Dinyatakan Tidak Lulus";
				}
			}
			?>
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="Cek" style="width: 100%;"></td>
		</tr>
		<tr>
			<td><a href="algo.php" style="text-decoration-line: none; border: 1px solid black; color: black; padding: 2px; background-color: #dcdcdc;">Kembali</a></td>
		</tr>
	</table>
</form>