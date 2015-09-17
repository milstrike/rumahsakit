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

$command = "";
$counter = 1;


if(isset($_POST['simpanPrivileges'])){//to run PHP script on submit
        $idUser = $_SESSION['adminID'];
if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){
    if($counter == 1){
        $command = $command." data_pegawai.perangkat=".$selected." ";
        $counter++;
    }
    else{
        $command = $command."or data_pegawai.perangkat=".$selected." ";
    }
}
}
$sqlxih = "UPDATE user SET unit='".$command."' where id=".$idUser."";
$queryxih = mysql("u6799722_rumahsakit", $sqlxih);
//echo $command;
header("Location:../advanced_role/");
}