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
$sql = "select * from user_role";
$query = mysql("u6799722_rumahsakit", "select * from user_role");
$rows = mysql_num_rows($query);
if($rows > 0){
    while($row = mysql_fetch_assoc($query)){
        $id = $row["id"];
        $role = $row["role"];
        $keterangan = $row["keterangan"];
        echo 
            "<tr>
            <td width='10%' id='thead'>".$counter."</td>
            <td width='30%' id='thead'>".$role."</td>
            <td width='30%' id='thead'>".$keterangan."</td>
            <td width='30%' id='thead'>
            <a href='#edit".$counter."' data-toggle='modal'><button type='submit' id='edit' name='edit' class='btn btn-warning btn-small' title='Edit Data'><i class='icon-pencil icon-white'></i></button></a>
            <a href='#' data-toggle='modal'><button type='submit' id='remove' name='remove' class='btn btn-danger btn-small disabled' title='Hapus Data'><i class='icon-remove icon-white'></i></button></a>
            </td>
            </tr>
            ";
        $counter = $counter + 1;
    }
}