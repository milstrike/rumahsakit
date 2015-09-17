<!DOCTYPE html>
<html>
    <head>
        <?php
        include "../../class/router.php";
        include "../../class/initTitle.php";
        include "../../data/basic.php";
        include "../../class/logout.php";
        if(empty ($_SESSION['status'])){
            header("Location:../../"); // Redirecting To Other Page
        }
        ?>        
        <link href='../../bootstrap/css/bootstrap.css' rel='stylesheet' media='screen'>
        <link href='../../bootstrap/css/bootstrap-responsive.css' rel='stylesheet' media='screen'>
        <link href='../../bootstrap/css/custom.css' rel='stylesheet' media='screen'>
    </head>
    <body class="bodyBackground">
        
        <!-- NavigationBar -->
        <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container" style="height: 60px;">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="brand" style="color: white; padding-top: 18px;"><?php BasicConfiguration(1); ?></a>
          <div class="nav-collapse collapse">
          </div>
        </div>
      </div>
    </div>
        
        
        <!-- content -->
        <div class="container" style="padding-top:100px;">
            <div class="row-fluid">
                <div class="span12">
                    <div class="row-fluid">
                        <div class="span3">
                            <div class="panelSide boxShadow">
                                <div class="boxBA">
                                <strong>Detail Akun</strong>
                            </div>
                            <div class="boxBC">
                                <table width="100%" border="0" cellpadding="5" cellspacing="5">
                                    <tr>
                                        <td widtch="25%" class="firstColumn">
                                            <img src="../../assets/icon-uses/nama.png" alt="icon-user"/>
                                        </td>
                                        <td width="75%" class="anotherColumn">
                                            <strong><?php echo $_SESSION['nama'];?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="firstColumn">
                                            <img src="../../assets/icon-uses/jabatan.png" alt="icon-jabatan"/>
                                        </td>
                                        <td class="anotherColumn">
                                            <?php echo $_SESSION['jabatan'];?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="firstColumn">
                                            <img src="../../assets/icon-uses/telepon.png" alt="icon-telepon"/>
                                        </td>
                                        <td class="anotherColumn">
                                            <?php echo $_SESSION['telepon'];?>
                                        </td>
                                    </tr>
                                </table>
                                <form action="" method="post">
                                    <button type="submit" id="logout" name="logout" class="btn btn-block btn-warning buttonLock">Logout!</button>
                                </form> 
                            </div>
                            </div>
                        </div>
                        
                        <div class="span9 bigPanel boxShadow" id="bigPanel">
                            <ul class="breadcrumb">
                                    <li class="active">Beranda</li>
                                </ul>
                           <!-- <div class="span3">
                                <legend>Administrasi</legend>
                                <table width="100%" border="0" cellpadding="5" cellspacing="5">
                                <tr>
                                    <td widtch="20%" class="firstColumn">
                                        <img src="../../assets/icon-uses/nama.png" alt="icon-user"/>
                                    </td>
                                    <td width="80%" class="anotherColumn">
                                        <a href="../apps/manajemen_user/" title="Manajemen user yang menggunakan sistem"><strong>Manajemen User</strong></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td widtch="20%" class="firstColumn">
                                        <img src="../../assets/icon-uses/tool.png" alt="icon-konfigurasi"/>
                                    </td>
                                    <td width="80%" class="anotherColumn">
                                        <a href="../apps/konfigurasi_sistem/" title="Konfigurasi sistem secara keseluruhan"><strong>Konfigurasi Sistem</strong></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td widtch="20%" class="firstColumn">
                                        <img src="../../assets/icon-uses/maintenance.png" alt="icon-maintenance"/>
                                    </td>
                                    <td width="80%" class="anotherColumn">
                                        <a href="../apps/maintenance_sistem/" title="Mengubah sistem ke mode maintenance"><strong>Maintenance Sistem</strong></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td widtch="20%" class="firstColumn">
                                        <img src="../../assets/icon-uses/bantuan.png" alt="icon-bantuan"/>
                                    </td>
                                    <td width="80%" class="anotherColumn">
                                        <a href="../apps/bantuan_sistem/" title="Dapatkan bantuan sistem di sini."><strong>Bantuan Sistem</strong></a>
                                    </td>
                                </tr>
                            </table>
                            </div> -->
                            
                            <div class="span4">
                                <legend>Kepegawaian</legend>
                                <table width="100%" border="0" cellpadding="5" cellspacing="5">
                                    <!-- <tr>
                                        <td widtch="20%" class="firstColumn">
                                            <img src="../../assets/icon-uses/plus.png" alt="icon-tambah"/>
                                        </td>
                                        <td width="80%" class="anotherColumn">
                                            <a href="#" title="Tambah Pegawai yang terdaftar di institusi"><strong>Tambah Pegawai...</strong></a>
                                        </td>
                                    </tr>-->
                                    <tr>
                                        <td widtch="20%" class="firstColumn">
                                            <img src="../../assets/icon-uses/pegawai.png" alt="icon-pegawai"/>
                                        </td>
                                        <td width="80%" class="anotherColumn">
                                            <a href="../apps/manajemen_pegawai_evaluator/" title="Manajemen Pegawai yang terdaftar di institusi"><strong>Manajemen Pegawai</strong></a>
                                        </td>
                                    </tr>
                                </table>
                                
                                <br/>
                                <!-- <legend>Penilaian</legend>
                                <table width="100%" border="0" cellpadding="5" cellspacing="5">
                                    <tr>
                                        <td widtch="20%" class="firstColumn">
                                            <img src="../../assets/icon-uses/poin.png" alt="icon-poin"/>
                                        </td>
                                        <td width="80%" class="anotherColumn">
                                            <a href="../apps/konfigurasi_poin/" title="Konfigurasi poin poin penilaian pegawai"><strong>Konfigurasi Poin</strong></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td widtch="20%" class="firstColumn">
                                            <img src="../../assets/icon-uses/bobot.png" alt="icon-bobot"/>
                                        </td>
                                        <td width="80%" class="anotherColumn">
                                            <a href="../apps/konfigurasi_bobot/" title="Manajemen bobot bobot nilai"><strong>Konfigurasi Bobot</strong></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td widtch="20%" class="firstColumn">
                                            <img src="../../assets/icon-uses/ikip.png" alt="icon-ikip"/>
                                        </td>
                                        <td width="80%" class="anotherColumn">
                                            <a href="../apps/form_ikip/" title="Manajemen Indikator Kinerja Individual Pegawai(IKIP)"><strong>Form IKIP</strong></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td widtch="20%" class="firstColumn">
                                            <img src="../../assets/icon-uses/ikiku.png" alt="icon-ikiku"/>
                                        </td>
                                        <td width="80%" class="anotherColumn">
                                            <a href="../apps/form_ikukp/" title="Manajemen Indikator Kinerja Unit Kerja Pegawai(IKUKP)"><strong>Form IKUKP</strong></a>
                                        </td>
                                    </tr>
                                </table> -->
                            </div>
                            
                            <div class="span4">
                                <!-- <legend>Rumah Sakit</legend>
                                <table width="100%" border="0" cellpadding="5" cellspacing="5">
                                    <tr>
                                        <td widtch="20%" class="firstColumn">
                                            <img src="../../assets/icon-uses/bagian.png" alt="icon-bagian"/>
                                        </td>
                                        <td width="80%" class="anotherColumn">
                                            <a href="../apps/manajemen_rs/" title="Manajemen Laporan Penggajian"><strong>Manajemen Unit RS</strong></a>
                                        </td>
                                    </tr>
                                </table>
                                <legend>Keuangan</legend>
                                <table width="100%" border="0" cellpadding="5" cellspacing="5">
                                    <tr>
                                        <td widtch="20%" class="firstColumn">
                                            <img src="../../assets/icon-uses/gaji.png" alt="icon-gaji"/>
                                        </td>
                                        <td width="80%" class="anotherColumn">
                                            <a href="../apps/manajemen_penggajian/" title="Manajemen Penggajian"><strong>Manajemen Penggajian</strong></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td widtch="20%" class="firstColumn">
                                            <img src="../../assets/icon-uses/pajak.png" alt="icon-pajak"/>
                                        </td>
                                        <td width="80%" class="anotherColumn">
                                            <a href="../apps/manajemen_perpajakan/" title="Manajemen Perpajakan"><strong>Manajemen Perpajakan</strong></a>
                                        </td>
                                    </tr>
                                </table>
                                <br/> -->
                                <legend>Manajemen Laporan</legend>
                                <table width="100%" border="0" cellpadding="5" cellspacing="5">
                                    <tr>
                                        <td widtch="20%" class="firstColumn">
                                            <img src="../../assets/icon-uses/laporan.png" alt="icon-laporan"/>
                                        </td>
                                        <td width="80%" class="anotherColumn">
                                            <a href="../apps/manajemen_penilaian_evaluator/" title="Manajemen Laporan Penilaian"><strong>Manajemen Laporan Penilaian</strong></a>
                                        </td>
                                    </tr>
                                    <!-- <tr>
                                        <td widtch="20%" class="firstColumn">
                                            <img src="../../assets/icon-uses/laporan.png" alt="icon-laporan"/>
                                        </td>
                                        <td width="80%" class="anotherColumn">
                                            <a href="../apps/manajemen_penggajian/" title="Manajemen Laporan Penggajian"><strong>Manajemen Laporan Penggajian</strong></a>
                                        </td>
                                    </tr> -->
                                </table>
                            </div>
                            <!-- Under Construction -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>



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



