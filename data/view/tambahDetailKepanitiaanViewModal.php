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

function ListNama(){
    
    $listnama = "";
    
    $sql = "select * from data_pegawai";
    $query = mysql("a3821629_rs", "select * from data_pegawai");
    $rows = mysql_num_rows($query);
    if($rows > 0){
        while($row = mysql_fetch_assoc($query)){
            $id = $row["id"];
            $nama = $row["nama"];
            
        $listnama = $listnama."<option value='".$id."'>".$nama."</option>";
        }
    }
    else{
    }
    
    return $listnama;
}

function ListJabatan(){
    
    $listjabatan = "";
    
    $sql = "select * from e_2_kepanitiaan_tim_kerja";
    $query = mysql("a3821629_rs", "select * from e_2_kepanitiaan_tim_kerja");
    $rows = mysql_num_rows($query);
    if($rows > 0){
        while($row = mysql_fetch_assoc($query)){
            $id = $row["id"];
            $jabatan = $row["keterangan"];
            
        $listjabatan = $listjabatan."<option value='".$id."'>".$jabatan."</option>";
        }
    }
    else{
    }
    
    return $listjabatan;
}

$namaTampil = ListNama();
$jabatanTampil = ListJabatan();

        echo 
            "
            <div id='tambah' class='modal hide'' tabindex='-1' role='dialog' aria-labelledby='tambah' aria-hidden='true'>
            <div class='modal-header' style='background-color: #149bdf;'>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
            <h3 id='myModalLabel' style='color: #fff;'>Tambah Anggota Kepanitiaan</h3>
            </div>
            <div class='modal-body'>
                <form class='form-horizontal' action='' method='post'>
                                <div class='control-group'>
                                    <label class='control-label' for='nama'>Nama Pegawai*</label>
                                    <div class='controls'>
                                        <select name='nama' required='required'>
                                        ".$namaTampil."
                                        </select>
                                    </div>
                                </div>
                                <div class='control-group'>
                                    <label class='control-label' for='jabatan'>Jabatan Kepanitiaan*</label>
                                    <div class='controls'>
                                        <select name='jabatan' required='required'>
                                        ".$jabatanTampil."
                                        </select>
                                    </div>
                                </div>
                                ";
        
if($namaTampil == ""){
    echo 
    "
        <div class='control-group'>
                                    <label class='control-label' for='submit'>&nbsp;</label>
                                    <div class='controls'>
                                        <strong>Belum ada data pegawai yang tersimpan, silakan tambahkan dari Manajemen Pegawai</strong>
                                        <!-- <button type='submit' id='submitTambah' name='submitTambah' class='btn btn-primary'><i class='icon-plus-sign icon-white'></i>&nbsp;<strong>Tambah Anggota!</strong></button><br/> -->
                                    </div>
                                </div>
                                    </form>
                                    </div>
            </div>
                                    ";
}
else{
    echo 
    "
        <div class='control-group'>
                                    <label class='control-label' for='submit'>&nbsp;</label>
                                    <div class='controls'>
                                        <button type='submit' id='submitTambah' name='submitTambah' class='btn btn-primary'><i class='icon-plus-sign icon-white'></i>&nbsp;<strong>Tambah Anggota!</strong></button><br/>
                                    </div>
                                </div>
                                    </form>
                                    </div>
            </div>
                                    ";
}