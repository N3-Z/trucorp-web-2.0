<?php
//connect ke database dengan user dan password admin, ip database dan datanase Trucorp
$con = mysqli_connect('172.17.0.2', 'admin', 'admin', 'Trucorp');
//pengecekan jika terdapat error pada koneksi ke database
if (!$con) {
    echo "Error\n"; die('Could not connect: ' . mysql_error());
}
//jika berhasil maka akan menampilkan semua data yang ada pada database berupa 
echo "Connected successfully\n";
$query = "select [count_id] = count(id) from users";
$stmt = $con->prepare($query);
$stmt->execute();
$res =  $stmt->get_result();
while($row = $res->fetch_assoc()){
	echo $row['count_id'];
}
//tutup koneksi
mysqli_close($con);
?>
