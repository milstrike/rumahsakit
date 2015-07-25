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

if (isset($_POST['submitDelete'])) {
$id=$_POST['id'];
$value = NULL;


$sqlx = "UPDATE rumahsakit.a_2_kepegawaian SET pajak='$value' WHERE a_2_kepegawaian.id='$id'";
$queryx = mysql("rumahsakit", $sqlx);    


//header("Location:../apps/konfigurasi_poin/konfigurasi_poin_masa_kerja");
header("Refresh:0");
}


