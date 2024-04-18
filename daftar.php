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
     <form action="cek_daftar.php" method="post">
     	<h2>DAFTAR</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Nama Lengkap</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Nama Lengkap"><br>
          <?php }?>
          

          <label>Nama Pengguna</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Nama Pengguna"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Nama Pengguna"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Konfirmasi Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Konfirmasi Password"><br>

     	<button type="submit">Daftar</button>
          <a href="masuk.php" class="ca">Sudah memiliki akun?</a>
     </form>
</body>
</html>