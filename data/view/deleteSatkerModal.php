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

$counter = 1;
$sql = "select * from satker";
$query = mysql("u6799722_rumahsakit", "select * from satker");
$rows = mysql_num_rows($query);
if($rows > 0){
    while($row = mysql_fetch_assoc($query)){
        $id = $row['id'];
        $satker = $row['satuan_kerja'];
        echo 
            "
            <div id='delete".$counter."' class='modal hide'' tabindex='-1' role='dialog' aria-labelledby='delete".$counter."' aria-hidden='true'>
            <div class='modal-header' style='background-color: #149bdf;'>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
            <h3 id='myModalLabel' style='color: #fff;'>Hapus Data Satuan Kerja</h3>
            </div>
            <div class='modal-body'>
                <form action='' method='post'>
                <input id='id' name='id' type='text' class='uneditable-input' value='".$id."' style='display:none;'>
                <p align='center'>
                Apakah Anda yakin ingin menghapus data untuk Satuan Kerja: <strong>".$satker."</strong>?. Anda tidak bisa mengembalikan lagi data yang sudah dihapus!
                </p>
                <p align='right'>
                <button type='submit' id='submitDelete' name='submitDelete' class='btn btn-danger'><i class='icon-remove icon-white'></i>&nbsp;<strong>Hapus Data ini!</strong></button><br/>
                </p>
                </form>
            </div>
            </div>";
        $counter = $counter + 1;
    }
}