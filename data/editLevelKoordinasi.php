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
include "../../../data/view/dataExtractor.php";

$error='';

if (isset($_POST['submitEdit'])) {
// Define $username and $password
$id=$_POST['id'];
$jumlah = $_POST['bawahan'];

$poin = getPoinLevelKoordinasi($jumlah);


$sqlx = "UPDATE u6799722_rumahsakit.level_koordinasi SET id_level_koordinasi='$jumlah', poin='$poin' WHERE level_koordinasi.id_pegawai='$id'";
$queryx = mysql("u6799722_rumahsakit", $sqlx);    


//header("Location:../apps/konfigurasi_poin/konfigurasi_poin_masa_kerja");
//header("Refresh:0");
}

