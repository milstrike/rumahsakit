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

//include "../../../data/view/dataExtractor.php";

$nama_tabel = $_SESSION['tabel'];

$counter = 1;
$sql = "select * from ".$nama_tabel;
$query = mysql("a3821629_rs", $sql);
$rows = mysql_num_rows($query);
if($rows > 0){
    while($row = mysql_fetch_assoc($query)){
        $id = $row["id"];
        $id_pegawai = $row["id_pegawai"];
        $masaKerja = $row["masa_kerja"];
        $gajiPokok = $row["gaji_pokok"];
        $golongan = $row["golongan"];
        $basicIndex = $row["basic_index"];
        $pendidikan = $row["pendidikan"];
        $sertifikasi = $row["sertifikasi"];
        $capacityIndex = $row["capacity_index"];
        $levelResiko = $row["level_resiko"];
        $riskIndex = $row["risk_index"];
        $levelEmergency = $row["level_emergency"];
        $emergencyIndex = $row["emergency_index"];
        $struktural = $row["struktural"];
        $levelKoordinasi = $row["level_koordinasi"];
        $kepanitiaan = $row["kepanitiaan"];
        $positionIndex = $row["position_index"];
        $ikip = $row["ikip"];
        $ikukp = $row["ikukp"];
        $performanceIndex = $row["performance_index"];
        
        
        //ExtractData
        $namaPegawai = nama($id_pegawai);
        
        $sqlp = "select * from a3821629_rs.data_pegawai where id='$id_pegawai'";
        $queryp = mysql("a3821629_rs", "select * from a3821629_rs.data_pegawai where id='$id_pegawai'");
        $rowp = mysql_fetch_array($queryp);
        
         $nip = $rowp["nip"];
        $golonganView = $rowp["golongan"];
        $satkerView = $rowp["satker"];
        $jabatanView = $rowp["jabatan"];
        $kelompokView = $rowp["kelompok"];
        $pendidikanView = $rowp["pendidikan"];
        $sertifikasiView = $rowp["sertifikasi"];
        $perangkatView = $rowp["perangkat"];
        $tanggal_masukView = $rowp["tanggal_masuk"];
        
        
        $getGolongan = poinGolongan($golonganView);
        
        $getPendidikan = poinPendidikan($pendidikanView);
        $getSertifikasi = poinSertifikasi($sertifikasiView);
        $getLevelResiko = poinLevelResiko($perangkatView);
        $getLevelEmergency = poinGradeEmergency($perangkatView);
        $getStruktural = poinStruktural($jabatanView);
        
        
        
        $golonganHelp = $golonganView;
        
        
        $golonganView = golongan($golonganView);
        $satkerView = satker($satkerView);
        $jabatanView = jabatan($jabatanView);
        $kelompokView = kelompok($kelompokView);
        $pendidikanView = pendidikan($pendidikanView);
        $sertifikasiView = sertifikasi($sertifikasiView);
        $risk_levelView = risk($perangkatView);
        $emergency_levelView = emergency($perangkatView);
        $perangkatView = perangkat($perangkatView);
        $masaKerjaView = lamaKerja($tanggal_masukView);
        $gajiView = gajiPokok($rowp["golongan"]);
        $levelKoordinasiView = IDLevelKoordinasi($id_pegawai);
        $kepanitiaanView = poinKepanitiaan($id_pegawai);
        
        $getMasaKerja = poinMasaKerja($masaKerjaView);
        $getGajiPokok = pembagiGajiPokok($gajiView, $golonganHelp);  
        $getLevelKoordinasi = poinLevelKoordinasi($levelKoordinasiView);
        
        $fghj = $kepanitiaanView/5;
        $getKepanitiaan = round($fghj);
        
        
        
        echo 
            "<tr>
            <td width='10%' id='thead'>".$counter."</td>
            <td width='30%' id='thead'>".$namaPegawai."</td>
            <td width='20%' id='thead'>
            <button class='btn btn-primary btn-small' title='Lihat Detail' data-toggle='collapse' data-target='#detail".$counter."' ><i class='icon-check icon-white'></i> Lihat Detail</button>
            </td>
            </tr>
            <tr>
                <td colspan=3>
                    <div class='collapse' id='detail".$counter."'>
                    <table width='100%' cellpadding='5' cellspacing='5' class='table table-bordered'>
                                <thead>
                                    <tr id='theadBasic'>
                                        <td id='thead'>Faktor</td>
                                        <td width='40%' colspan='2' id='thead'>Keterangan</td>                                        
                                        <td width='20%' id='thead'>Perhitungan Poin</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td width='40%'>Masa Kerja</td>
                                    <td width='20%'>".$masaKerjaView." Tahun</td>
                                    <td width='20%'>".$getMasaKerja."</td>
                                    <td width='40%'>".$masaKerja."</td>
                                    </tr>
                                    
                                    <tr>
                                    <td>Golongan</td>
                                    <td>".$golonganView."</td>
                                    <td>".$getGolongan."</td>
                                    <td>".$golongan."</td>
                                    </tr>
                                    
                                    <tr>
                                    <td>Gaji Pokok</td>
                                    <td>".$gajiView."</td>
                                    <td>".$getGajiPokok."</td>
                                    <td>".$gajiPokok."</td>
                                    </tr>
                                    
                                    <tr>
                                    <td>Pendidikan</td>
                                    <td>".$pendidikanView."</td>
                                    <td>".$getPendidikan."</td>
                                    <td>".$pendidikan."</td>
                                    </tr>
                                    
                                    <tr>
                                    <td>Sertifikasi</td>
                                    <td>".$sertifikasiView."</td>
                                    <td>".$getSertifikasi."</td>
                                    <td>".$sertifikasi."</td>
                                    </tr>
                                    
                                    <tr>
                                    <td>Level Resiko</td>
                                    <td>".$risk_levelView."</td>
                                    <td>".$getLevelResiko."</td>
                                    <td>".$levelResiko."</td>
                                    </tr>
                                    
                                    <tr>
                                    <td>Level Emergency</td>
                                    <td>".$emergency_levelView."</td>
                                    <td>".$getLevelEmergency."</td>
                                    <td>$levelEmergency</td>
                                    </tr>
                                    
                                    <tr>
                                    <td>Struktural</td>
                                    <td>".$jabatanView."</td>
                                    <td>".$getStruktural."</td>
                                    <td>".$struktural."</td>
                                    </tr>
                                    
                                    <tr>
                                    <td>Level Koordinasi</td>
                                    <td>".$levelKoordinasiView."</td>
                                    <td>".$getLevelKoordinasi."</td>
                                    <td>".$levelKoordinasi."</td>
                                    </tr>
                                    
                                    <tr>
                                    <td>Kepanitiaan</td>
                                    <td>".$kepanitiaanView."</td>
                                    <td>".$getKepanitiaan."</td>
                                    <td>".$kepanitiaan."</td>
                                    </tr>
                                    
                                    <tr>
                                    <td>IKIP</td>
                                    <td>On Progress</td>
                                    <td></td>
                                    <td>".$ikip."</td>
                                    </tr>
                                    
                                    <tr>
                                    <td>IKUKP</td>
                                    <td>On Progress</td>
                                    <td></td>
                                    <td>".$ikukp."</td>
                                    </tr>
                                    
                                </tbody>
                        </table>
                        </div>
                </td>
            </tr>
            ";
        $counter = $counter + 1;
    }
}
else{
    echo 
            "<tr>
            <td colspan='7' style='padding:20px'> 
            <p align='center'>
            <strong>Belum ada data poin yang tersimpan, silakan tambahkan melalui menu Isi Tabel. Tabel akan terisi secara otomatis jika Data Pegawai sudah ada</strong>
            </p>
            </td>
            </tr>
            ";
}