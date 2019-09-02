<?php 
include "koneksi.php"; 
$username = $_POST['username']; 
$pass     = $_POST['password']; 
$login = mysqli_query($config, "SELECT * FROM userlog WHERE Username = '$username' AND password='$pass'"); 
$row=mysqli_fetch_array($login,MYSQLI_ASSOC); 
if ($row['username'] == $username AND $row['password'] == $pass) 
{ 
  session_start(); 
  $_SESSION['username'] = $row['username']; 
  $_SESSION['password'] = $row['password']; 
  header('location:home.php'); 
} 
else 
{ 
  echo "<center><br><br><br><br><br><br><b>LOGIN GAGAL! </b><br> 
        Username atau Password Anda tidak benar.<br>"; 
  echo "<br>"; 
  echo "<a href='javascript:history.back()'>ULANGI LAGI</a></center>"; 
} 
?> 