<!DOCTYPE html>
<html>
    <head>
        <?php
        include "../../../class/router.php";
        include "../../../class/initTitle.php";
        include "../../../data/basic.php";
        include "../../../data/createNewAccount.php";
        include "../../../class/logout.php";
        include "../../../data/view/optionRole.php";
        if(empty ($_SESSION['status'])){
            header("Location:../../../"); // Redirecting To Other Page
        }
        ?>
        <link href='../../../bootstrap/css/bootstrap.css' rel='stylesheet' media='screen'>
        <link href='../../../bootstrap/css/bootstrap-responsive.css' rel='stylesheet' media='screen'>
        <link href='../../../bootstrap/css/custom.css' rel='stylesheet' media='screen'>
        <link href="../../../bootstrap/js/custom.js" type="text/javascript">
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
                                            <img src="../../../assets/icon-uses/nama.png" alt="icon-user"/>
                                        </td>
                                        <td width="75%" class="anotherColumn">
                                            <strong><?php echo $_SESSION['nama'];?></strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="firstColumn">
                                            <img src="../../../assets/icon-uses/jabatan.png" alt="icon-jabatan"/>
                                        </td>
                                        <td class="anotherColumn">
                                            <?php echo $_SESSION['jabatan'];?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="firstColumn">
                                            <img src="../../../assets/icon-uses/telepon.png" alt="icon-telepon"/>
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
                                    <li><a href="../../landing/">Beranda</a> <span class="divider">/</span></li>
                                    <li><a href="../manajemen_user/">Manajemen User</a> <span class="divider">/</span></li>
                                    <li class="active">Tambah User</li>
                                </ul>
                            
                            
                            <form class="form-horizontal" action="" method="post">
                                <div class="control-group">
                                    <label class="control-label" for="namalengkap">Nama Lengkap*</label>
                                    <div class="controls">
                                        <input id="namalengkap" name="namalengkap" type="text" placeholder="Nama Lengkap" class="span5" required="required">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="username">Username*</label>
                                    <div class="controls">
                                        <input id="username" name="username" type="text" placeholder="Username" class="span5" maxlength="20" required="required">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="password">Password*</label>
                                    <div class="controls">
                                        <input id="password" name="password" type="password" placeholder="Password" class="span5" maxlength="20" required="required">
                                    </div>
                                </div>
                                <!-- <div class="control-group">
                                    <label class="control-label" for="password2">Re-type Password*</label>
                                    <div class="controls">
                                        <input id="password2" name="password2" type="password" placeholder="Masukkan kembali Password" class="span5" required="required">
                                        <span class="help-inline" style="color: #cf0404;">Password tidak sama!</span>
                                        <span class="help-inline" style="color: #7aba7b;">Password sama!</span>
                                    </div>
                                </div> -->
                                <div class="control-group">
                                    <label class="control-label" for="telepon">No. Telepon*</label>
                                    <div class="controls">
                                        <input id="telepon" name="telepon" type="number" placeholder="No. Telepon" class="span5" maxlength="20" required="required" onkeypress="return isNumberKey(evt)">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="jabatan">Tingkatan*</label>
                                    <div class="controls">
                                        <select id="jabatan" name="jabatan" class="span5" required="required">
                                            <?php echo $optionRoles;  ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="submit">&nbsp;</label>
                                    <div class="controls">
                                        <button type="submit" id="submit" name="submit" class="btn btn-primary"><i class="icon-user icon-white"></i>&nbsp;<strong>Buat Akun!</strong></button><br/>
                                    </div>
                                </div>
                                <span class="spanErrorB"><?php echo $error; ?></span>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src='../../../bootstrap/js/jquery.js'></script>
        <script src='../../../bootstrap/js/bootstrap.js'></script>
        
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



