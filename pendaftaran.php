<form method="POST">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number" name="nim"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jenis_kelamin" value="lakilaki">Laki - laki
				<input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
			</td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><select name="prodi">
				<option value="Sistem Informatika">Sistem Informasi</option>
				<option value="Teknik Informatika">Teknik Informatika</option>
				<option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
				<option value="Desain Komunikasi Visual">Teknik Komunikasi Visual</option>
				<option value="MBTI">MBTI</option>
				<option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
			</select></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="FIT">Fakultas Ilmu Terapan</option>
				<option value="FIK">Fakultas Ilmu Kreatif</option>
				<option value="FEB">Fakultas Ekonomi Bisnis</option>
				<option value="F">Fakultas </option>
				<option value="FKB">Fakultas Komunikasi Bisnis</option>
			</select></td>
		</tr>
		<tr>
			<td>Asal</td>
			<td>:</td>
			<td><input type="" name="asal"></td>
		</tr>
		<tr>
			<td>Moto Hidup</td>
			<td>:</td>
			<td><input type="" name="moto_hidup"></td>
		</tr>
		<tr>
			<td><input type="submit" name="kirim" value="kirim"></td>
		</tr>
	</table>
</form>

<?php 
if (isset($_POST['kirim'])) {
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "dbmahasiswa";
	$conn = mysqli_connect($host, $username, $password, $db);
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$jenis = $_POST['jenis_kelamin'];
	$prodi = $_POST['prodi'];
	$fakultas = $_POST['fakultas'];
	$asal = $_POST['asal'];
	$moto = $_POST['moto_hidup'];
	$sql = "INSERT INTO `datamahasiswa`(`nama`, `nim`, `jenis_kelamin`, `prodi`, `fakultas`, `asal`, `moto_hidup`)VALUES('$nama','$nim','$jenis','$prodi','$fakultas','$asal','$moto')";
	$hasil  = mysqli_query($conn, $sql);
	echo "Pendaftaran Berhail, Silahkan <a href='home.php'>Masuk</a> untuk melanjutkan";
}
 ?>