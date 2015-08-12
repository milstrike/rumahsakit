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

function SearchPoint($num){
    $dataPoin = "";
    
    $query = mysql("a3821629_rs", "select poin from a3821629_rs.e_2_kepanitiaan_tim_kerja where e_2_kepanitiaan_tim_kerja.id='$num'");
    $row = mysql_fetch_array($query);
    $dataPoin = $row['poin'];
    
    return $dataPoin;
}

$error='';

if (isset($_POST['submitTambah'])) {
$id = $_SESSION['id_kepanitiaan'];
$nama=$_POST['nama'];
$jabatan=$_POST['jabatan'];
$poin = SearchPoint($jabatan);

    
$sqlx = "INSERT INTO a3821629_rs.detail_kepanitiaan (id, id_pegawai, jabatan, poin, bulan) VALUES ('$id', '$nama', '$jabatan', '$poin', CURRENT_TIMESTAMP)";
$queryx = mysql("a3821629_rs", $sqlx);    

////header("Refresh:0");
}


