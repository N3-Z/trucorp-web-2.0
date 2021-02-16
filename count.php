<?php
//connect ke database dengan user dan password admin, ip database dan datanase Trucorp
$con = mysqli_connect('172.17.0.2', 'admin', 'admin', 'Trucorp');
//pengecekan jika terdapat error pada koneksi ke database
if (!$con) {
    echo "Error\n"; die('Could not connect: ' . mysql_error());
}
//jika berhasil maka akan menampilkan semua data yang ada pada database berupa 
echo "Connected successfully\n";
$query = "select count(*) as total from users";
$stmt = $con->prepare($query);
$stmt->execute();

$row = $stmt->get_result()->fetch_row();
echo $row[0];
//tutup koneksi
mysqli_close($con);
?>
