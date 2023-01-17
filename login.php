<!DOCTYPE html>
<html lang="en">

<head>
    <title>Layouting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<form action="" method="POST"> 
    <table> 
        <tr>
<td>Username</td> 
<td>:</td>
<td><input type="text" placeholder="username.." name="username" required></td> 
</tr> 
<tr>
<td>Password</td> 
<td>:</td>
<td><input type="password" placeholder="password.." name="password" required></td> 
</tr> 
<tr>
<td><input type="submit" name="submit" value="login"></td> 
</tr> 
</table> 
</form>

<?php 
if (isset($_POST['submit'])) {
// Mengambil nilai yang diinputkan oleh user 
$username = $_POST['username']; 
$password = $_POST['password'];

// Membuat session 
$_SESSION['username'] = "cherli"; 
$_SESSION['password'] = "123456";

// Lakukan pengecekan 
if ($username == $_SESSION['username'] && $password = $_SESSION['password']) {
header('Location: shopp.html'); 
} else {
echo "Username atau password salah !";
}
}
?>