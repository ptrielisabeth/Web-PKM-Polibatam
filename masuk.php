<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>Web PKM || Polibatam</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/Polibatam.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="css/style2.css" rel="stylesheet">
</head>

<body>
     <form action="cek_masuk.php" method="post">
     	<h2>MASUK</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Nama Pengguna</label>
     	<input type="text" name="uname" placeholder="Nama Pengguna"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

      <center><select name="masuk">
        <option value="Islam">-PILIH-</option>
        <option value="Kristen">Mahasiswa</option>
        <option value="Hindu">Admin</option>
        <option value="Budha">Reviewer</option>
        </select>
      </center> 
      
      <p></p>

     	<button type="submit">Masuk</button>
          <a href="daftar.php" class="ca">Belum memiliki akun?</a>
   
		  
     </form>
</body>
</html>