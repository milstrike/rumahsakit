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

if (isset($_POST['submitReset'])) {
$id6=$_POST['id'];
$passView6=$_POST['user'];
$passNormal=$_POST['user'];

$passView6 = md5($passView6);



$sqlx = "UPDATE u6799722_rumahsakit.user SET password='$passView6', pass_umask='$passNormal'  WHERE user.id='$id6'";
$queryx = mysql("u6799722_rumahsakit", $sqlx);    

header("Location:../../apps/manajemen_user/");
}

