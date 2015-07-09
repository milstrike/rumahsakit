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
include "store.php";


$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "<font color='red'>username atau password tidak boleh kosong!</font>";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

//Convert to md5
$username = md5($username);
$password = md5($password);


// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

// SQL query to fetch information of registerd users and finds user match.
$query = mysql("rumahsakit", "select * from user where password='$password' AND username='$username'");
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['status'] = "1";
$_SESSION['login_user']=$username; // Initializing Session
storing($username);
//$error = "Berhasil Login!";

header("Location:mechanism/landing"); // Redirecting To Other Page
} else {
$error = "<font color='red'>username atau password salah!</font>";
}
//mysql_close($conn); // Closing Connection
}
}
