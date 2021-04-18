<?php 
if (isset($_POST['ubah'])) {
	$reamur = $_POST['reamur'];
	$celcius = $_POST['celcius'];
	$fahrenheit = $_POST['fahrenheit'];
	$hasil1 = 4 / 5 * $celcius;
	$hasil2 = (9 / 5 * $celcius) + 32;
}

?>

<title>Konverensi Suhu</title>
<form method="post" action="">
	<table>
		<tr>
			<td colspan="3" style="text-align: center;"><h2>KONVERENSI SUHU</h2></td>
		</tr>
		<tr>
			<td rowspan="2"><input style="text-align: center;" type="number" name="celcius" placeholder="Celcius"></td>
			<td><input style="text-align: center;" type="number" name="reamur" placeholder="Reamur" value="<?php if (isset($_POST['ubah'])){ echo $hasil1;} else{

			}?>" value = "Reamur">
		</tr>
		<tr>
			<td><input style="text-align: center;" type="number" name="fahrenheit" placeholder="Fahrenheit" value="<?php if (isset($_POST['ubah'])){ echo $hasil2;} else{

			}?>" value = "Fahrenheit"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="ubah" value="Konverensikan"  style="text-align: center; width:100%;"></td>
		</tr>
		<tr>
			<td><a href="algo.php" style="text-decoration-line: none; border: 1px solid black; color: black; padding: 2px; background-color: #dcdcdc;">Kembali</a></td>
		</tr>
		
	</table>
</form>