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
$sql = "select * from a_1_masa_kerja";
$query = mysql("u6799722_rumahsakit", "select * from a_1_masa_kerja");
$rows = mysql_num_rows($query);
if($rows > 0){
    while($row = mysql_fetch_assoc($query)){
        $idMasaKerja = $row["id"];
        $keteranganView = $row["keterangan"];
        $poinView = $row["poin"];
        echo 
            "
            <div id='editMasaKerja".$counter."' class='modal hide'' tabindex='-1' role='dialog' aria-labelledby='UserDetail".$counter."' aria-hidden='true'>
            <div class='modal-header' style='background-color: #149bdf;'>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
            <h3 id='myModalLabel' style='color: #fff;'>Edit Masa Kerja</h3>
            </div>
            <div class='modal-body'>
                <form class='form-horizontal' action='' method='post'>
                                <div class='control-group'>
                                    <label class='control-label' for='namalengkap'>ID</label>
                                    <div class='controls'>
                                        <input id='id' name='id' type='text' class='uneditable-input' value='".$idMasaKerja."'>
                                    </div>
                                </div>
                                <div class='control-group'>
                                    <label class='control-label' for='keteranganMasaKerja'>Keterangan*</label>
                                    <div class='controls'>
                                        <input id='keteranganMasaKerja' name='keteranganMasaKerja' type='text' required='required' value='".$keteranganView."'>
                                    </div>
                                </div>
                                <div class='control-group'>
                                    <label class='control-label' for='poinMasaKerja'>Poin Masa Kerja*</label>
                                    <div class='controls'>
                                        <input id='poinMasaKerja' name='poinMasaKerja' type='text' required='required' value='".$poinView."'>
                                    </div>
                                </div>
                                <div class='control-group'>
                                    <label class='control-label' for='submit'>&nbsp;</label>
                                    <div class='controls'>
                                        <button type='submit' id='submitEdit' name='submitEdit' class='btn btn-warning'><i class='icon-pencil icon-white'></i>&nbsp;<strong>Simpan Hasil Perubahan!</strong></button><br/>
                                    </div>
                                </div>
                                    </form>
            </div>
            </div>";
        $counter = $counter + 1;
    }
}