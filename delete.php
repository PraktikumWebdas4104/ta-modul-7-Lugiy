<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "dbmahasiswa";

$conn = new mysqli($host, $username, $password, $db);

$nim = $_GET['nim'];
$qry = "DELETE FROM datamahasiswa WHERE nim ='$nim'";
$has = mysqli_query($conn, $qry);

if ($has) {
	echo "Data telah berhasil dihapus";
	echo "<a href='home.php'>Kembali</a>";
	
}else{
	echo "Data gagal dihapus";
}
?>