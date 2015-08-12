<?php

/* 
 * Copyright (C) 2015 milstrike
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
include "my-conf.php";

$error='';

if (isset($_POST['submit'])) {
if (empty($_POST['namalengkap']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['telepon']) || empty($_POST['jabatan'])) {
$error = "<font color='red'>kolom isian harus diisi semua!</font>";
}
else
{

list($data1, $data2) = explode("-", $_POST['jabatan'], 2);

// Define $username and $password
$namalengkap=$_POST['namalengkap'];
$username=$_POST['username'];
$password=$_POST['password'];
$telepon=$_POST['telepon'];
$level = $data1;
$jabatan= $data2;

//Convert to md5
$username2 = md5($username);
$password2 = md5($password);


// To protect MySQL injection for Security purpose
$username2 = stripslashes($username2);
$password2 = stripslashes($password2);
$username2 = mysql_real_escape_string($username2);
$password2 = mysql_real_escape_string($password2);

$query = mysql("a3821629_rs", "select * from user where password='$password2' AND username='$username2'");
$rows = mysql_num_rows($query);
if ($rows == 1) {
$error = "<font color='red'>Terjadi duplikasi username, gunakan username yang lain!</font>";
} 
else if($rows == 0) {

    
$sqlx = "INSERT INTO a3821629_rs.user (id, username, password, user_umask, pass_umask, level, change_date) VALUES (NULL, '$username2', '$password2', '$username', '$password', '$level', CURRENT_TIMESTAMP)";
$queryx = mysql("a3821629_rs", $sqlx);    


$sqln = "INSERT INTO a3821629_rs.user_detail (id, nama, jabatan, telepon, change_date) VALUES (NULL, '$namalengkap', '$jabatan', '$telepon', CURRENT_TIMESTAMP)";
        $queryn = mysql("a3821629_rs", $sqln); 
    

    header("Location:../../apps/manajemen_user/");

}
}
}

