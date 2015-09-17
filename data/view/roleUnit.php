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

//include "../my-conf.php";

$error = "";
$counter = 1;
$sql = "select * from perangkat_rs ORDER BY perangkat_rs.keterangan ASC";
$query = mysql("u6799722_rumahsakit", "select * from perangkat_rs ORDER BY perangkat_rs.keterangan ASC");
$rows = mysql_num_rows($query);
if($rows > 0){
    echo '<form action="" method="post" class="form-inline">';
    while($row = mysql_fetch_assoc($query)){
        $id = $row["id"];
        $keterangan = $row["keterangan"];
        echo 
            "
                <label class='checkbox'>
                <input type='checkbox' name='check_list[]' value='".$id."'> ".$keterangan."
                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            ";
        $counter = $counter + 1;
    }
    echo "<br/><br/><br/><p align='right'><button type='submit' id='simpanPrivileges' name='simpanPrivileges' class='btn btn-warning btn-small' title='Edit Hak Akses'><i class='icon-pencil icon-white'></i> Re-Edit Parameter</button></p></form>";
}
else{
    echo 
            " 
            <p align='center'>
            <strong>Belum ada perangkat rumah sakit yang tersimpan, silakan tambahkan melalui menu Tambah Unit Rumah Sakit</strong>
            </p>
            ";
}