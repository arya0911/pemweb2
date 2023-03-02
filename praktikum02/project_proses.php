<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "123"){
    echo "Selamat,Anda berhasil login !";
} else {
    echo "Maaf,Anda kurang beruntung";
}