<?php 

// INTEGRASI FUNGSI KONEKSI
require_once('connection.php');

// MENGAMBILL DATA "pengguna" DARI DATABASE

$sql= "SELECT * FROM Pengguna";
$result = $connection->query($sql);


?>



<!DOCTYPE html>
<html>
<head>
	<title>Native PHP CRUD</title>

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>

	<div class="container">

		<div class="row my-5">

			<!-- SIDEBAR -->
			<div class="col-lg-4">

				<div class="list-group">
					<a href="index.php" class="list-group-item list-group-item-action">Dasbor</a>
					<a href="pengguna.php" class="list-group-item list-group-item-action">Pengguna</a>
					<a href="pengaturan.php" class="list-group-item list-group-item-action">Pengaturan</a>
				</div>

			</div>
			<!-- END SIDEBAR -->

			<!-- CONTENT -->
			<div class="col-lg-8 bg-light rounded border shadow">
				<div class="d-flex justify-content-between">
					
					<div>
							<h1>Pengguna</h1>
					</div>
					<div class="mt-3">
						<a href="pengguna-tambah.php" class="btn btn-sm btn-primary">Tambah</a>
					</div>

				</div>

			

				<!-- table -->
				<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>


<?php 

$no = 1;
if($result->num_rows > 0){

while ($row = $result->fetch_assoc()){


	echo "<tr>";
	echo"<td>".$no."</td>";
	echo"<td>"
	.$row['nama_depan']
	." "
	.$row['nama_tengah']
	." "
	.$row['nama_belakang']
	 ."</td>";

	 echo"<td>"
	.$row['tempat_lahir']
	.","
	." "
	.$row['tanggal_lahir']
	." "
	.$row['bulan_lahir']
	." "
	.$row['tahun_lahir']


	 ."</td>";

	

  echo'
    <td>

      	<a href="pengguna-detail.php" class="btn btn-sm btn-success">Detail</a>
      	<a href="pengguna-ubah.php" class="btn btn-sm btn-primary">Ubah</a>
      	<a href="pengguna-hapus.php" class="btn btn-sm btn-danger">Hapus</a>
      	
      </td>';

	echo"<tr>";

	$no++;

}


}else{
	echo "tidak ada data";

}
 ?>
<!--  
    <tr>

      <th scope="row">1</th>
      <td>Marthen Tenouye</td>
      <td>Jaypura, 16 maret 2002</td>
      <td>

      	<a href="pengguna-detail.php" class="btn btn-sm btn-success">Detail</a>
      	<a href="pengguna-ubah.php" class="btn btn-sm btn-primary">Ubah</a>
      	<a href="pengguna-hapus.php" class="btn btn-sm btn-danger">Hapus</a>
      	
      </td>
    </tr>
   -->
  
  </tbody>
</table>
				<!-- endable -->

			</div>
			<!-- END CONTENT -->
			
		</div>
		
	</div>

</body>
</html>