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

if (isset($_POST['submitTambah'])) {
if (empty($_POST['keterangan']) || empty($_POST['poin'])) {
$error = "<font color='red'>kolom isian harus diisi semua!</font>";
}
else
{
// Define $username and $password
$keterangan=$_POST['keterangan'];
$poin=$_POST['poin'];

    
$sqlx = "INSERT INTO a3821629_rs.e_2_kepanitiaan_tim_kerja (id, keterangan, poin) VALUES (NULL, '$keterangan', '$poin')";
$queryx = mysql("a3821629_rs", $sqlx);    

//header("Refresh:0");

}
}


