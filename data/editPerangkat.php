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
if (empty($_POST['namaPerangkat']) || empty($_POST['risk']) || empty($_POST['emergency'])) {
$error = "<font color='red'>kolom isian harus diisi semua!</font>";
}
else
{
// Define $username and $password
    

list($data1, $data2) = explode("-", $_POST['risk'], 2);
list($data3, $data4) = explode("-", $_POST['emergency'], 2);

$id=$_POST['id'];
$namaPerangkat = $_POST['namaPerangkat'];
$namaPerangkat = strtoupper($namaPerangkat);
$level_risk = $data1;
$poin_risk = $data2;
$level_emergency = $data3;
$poin_emergency = $data4;



$sqlx = "UPDATE u6799722_rumahsakit.perangkat_rs SET keterangan='$namaPerangkat', level_risk='$level_risk', poin_risk='$poin_risk', level_emergency='$level_emergency', poin_emergency='$poin_emergency', change_date=NULL WHERE perangkat_rs.id='$id'";
$queryx = mysql("u6799722_rumahsakit", $sqlx);    


//header("Location:../apps/konfigurasi_poin/konfigurasi_poin_masa_kerja");
//header("Refresh:0");
}
}

