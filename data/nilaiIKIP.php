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
$error = "";

if (isset($_POST['simpanData'])) {
    $nama_tabel = $_SESSION['tabel'];
    $tabelIKIP = $_SESSION['tabelIKIP'];
    $sql =  "select sum(sum) as jumlah from ".$tabelIKIP."";
    $query = mysql("u6799722_rumahsakit", $sql);
    $rows = mysql_num_rows($query);
    $nilaiIKIP = 0;
    if($rows > 0){
    while($row = mysql_fetch_assoc($query)){
        $nilaiIKIP = $row["jumlah"];
    }
    }
    
    $sumIKIP = $nilaiIKIP * (1/3);
    $ikipAkhir = $sumIKIP * 0.7;
    $idPegawai = substr($tabelIKIP, 0, 2);
    
    $sqlx = "UPDATE ".$nama_tabel." SET sum_ikip='$sumIKIP', ikip='$ikipAkhir' WHERE id_pegawai='$idPegawai'";
    $queryx = mysql("u6799722_rumahsakit", $sqlx);   
    
    $error='<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Sukses Menghitung Indeks Kinerja Individual Pegawai(IKIP)</div>';
    
}

