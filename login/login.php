<?php
// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){
// cek username dan password
if($_POST["username"]== "admin" && $_POST["passw"] ==
   "123"){
// jika benar, redirect ke halaman admin
header("Location: admin.php");
exit;
   }else{
// jika salah, tampilkan pesan kesalahan
$error = true;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>
    <?php if(isset($error)): ?>
    <p style="color: red; font-style: italic;">Username dan Password salah!</p>
    <?php endif; ?>
    <ul>
    <form action="" method="post">
    <li>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
    </li>
    <li>
        <label for="passw">Password  :</label>
        <input type="password" name="passw" id="passw">
    </li>
    <li>
        <button type="submit" name="submit">login</button>
    </li>
    </form>
    </ul>
</body>
</html>