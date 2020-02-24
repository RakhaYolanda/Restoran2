<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} 
else { 
   $username = $_SESSION['username']; 
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
</head>
<body>
<style>

body {
    background: url("11.jpg");
    background-color: #cccccc;
    height: 700px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    font-family: Arial, Helvetica, sans-serif;
  }


</style>
</head>

<body>
<center><h1>Menu Makanan & Minuman</h1>

<table border ="1" width = "50%">
</center>
<tr>

    <th bgcolor = #3498db>Nama</th>
    <th bgcolor = #3498db>Harga</th>
    <th bgcolor = #3498db>Status</th>
    <th bgcolor = #3498db>Stok</th>

    </tr>
    <?php

    include "koneksi2.php";

    $query = "SELECT * FROM makanan";

    $sql = mysqli_query ($connect, $query);

    while($data = mysqli_fetch_array($sql)){

        echo "<tr>";
        echo "<td>".$data['Nama']."</td>";
        echo "<td>".$data['Harga']."</td>";
        echo "<td>".$data['Status']."</td>";
        echo "<td>".$data['Stok']."</td>";
 
        echo "</tr>";
    }
    ?>
    </table>
    
    <form action="terimakasih.php" method="get">
      <p>Pilih Menu Makanan
	  <select name='Menu Makanan'>
		<option value='Pecel'>Pecel</option>
		<option value='Rendang Babi'>Rendang Babi</option>
		<option value='Soto Kambing'>Soto Kambing</option>
		<option value='Geprek Babi'>Geprek Babi</option>
		<option value='Mie Babi'>Mie Babi</option>
      </select>
      <p>Pilih Menu Minuman
      <select name='Menu Minuman'>
		<option value='Es Jeruk'>Es Jeruk</option>
		<option value='Es Teh'>Es Teh</option>
		<option value='Air Zamzam'>Air Zamzam</option>
	  </select>
	  </p>
      <input type='submit' name='tombol' value='kirim' />
</form>
<li><a href="Logout.php" class="link">Logout</a></li>
</body>
</html>


