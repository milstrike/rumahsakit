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

if (isset($_POST['submitEdit'])) {
if (empty($_POST['namalengkap']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['telepon']) || empty($_POST['jabatan'])) {
//$error = "<font color='red'>kolom isian harus diisi semua!</font>";
}
else
{
// Define $username and $password
$id=$_POST['id'];
$namalengkap=$_POST['namalengkap'];
$username=$_POST['username'];
$password=$_POST['password'];
$telepon=$_POST['telepon'];
$jabatan=$_POST['jabatan'];

//Convert to md5
$username2 = md5($username);
$password2 = md5($password);


// To protect MySQL injection for Security purpose
$username2 = stripslashes($username2);
$password2 = stripslashes($password2);
$username2 = mysql_real_escape_string($username2);
$password2 = mysql_real_escape_string($password2);

$sqlx = "UPDATE u6799722_rumahsakit.user SET password='$password2', pass_umask='$password' WHERE user.id='$id'";
$queryx = mysql("u6799722_rumahsakit", $sqlx);    


$sqln = "UPDATE u6799722_rumahsakit.user_detail SET nama='$namalengkap', jabatan='$jabatan', telepon='$telepon' WHERE user_detail.id='$id'";
$queryn = mysql("u6799722_rumahsakit", $sqln); 


header("Location:../../apps/manajemen_user/");
}
}

