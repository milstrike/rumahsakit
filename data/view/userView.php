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
$sql = "select * from user, user_detail where user.id=user_detail.id";
$query = mysql("u6799722_rumahsakit", "select * from user, user_detail where user.id=user_detail.id");
$rows = mysql_num_rows($query);
if($rows > 0){
    while($row = mysql_fetch_assoc($query)){
        $namaView = $row["nama"];
        $userView = $row["user_umask"];
        $passView = $row["pass_umask"];
        $createView = $row["change_date"];
        $jabatanView = $row["jabatan"];
        $teleponView = $row["telepon"];
        echo 
            "<tr>
            <td width='10%' id='thead'>".$counter."</td>
            <td width='30%' id='thead'>".$namaView."</td>
            <td width='15%' id='thead'>".$userView."</td>
            <td width='15%' id='thead'>".$jabatanView."</td>
            <td width='30%' id='thead'>
            <a href='#UserDetail".$counter."' data-toggle='modal'><button type='submit' id='edit' name='edit' class='btn btn-primary btn-small' title='Info Akun'><i class='icon-info-sign icon-white'></i></button></a>
            <a href='#EditUser".$counter."' data-toggle='modal'><button type='submit' id='edit' name='edit' class='btn btn-warning btn-small' title='Edit Akun'><i class='icon-pencil icon-white'></i></button></a>
            <a href='#DeleteUser".$counter."' data-toggle='modal'><button type='submit' id='remove' name='remove' class='btn btn-danger btn-small' title='Hapus Akun'><i class='icon-remove icon-white'></i></button></a>
            <a href='#resetPassword".$counter."' data-toggle='modal'><button type='submit' id='remove' name='remove' class='btn btn-info btn-small' title='Reset Password Akun'><i class='icon-refresh icon-white'></i></button></a>
            </td>
            </tr>
            ";
        $counter = $counter + 1;
    }
}