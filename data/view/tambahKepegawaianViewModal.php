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

        echo 
            "
            <div id='tambahKepegawaian' class='modal hide'' tabindex='-1' role='dialog' aria-labelledby='tambahKepegawaian' aria-hidden='true'>
            <div class='modal-header' style='background-color: #149bdf;'>
            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
            <h3 id='myModalLabel' style='color: #fff;'>Tambah Kepegawaian</h3>
            </div>
            <div class='modal-body'>
                <form class='form-horizontal' action='' method='post'>
                                <div class='control-group'>
                                    <label class='control-label' for='keteranganKepegawaian'>Keterangan*</label>
                                    <div class='controls'>
                                        <input id='keteranganKepegawaian' name='keteranganKepegawaian' type='text' required='required' placeholder='Contoh: PNS Gol. 1'>
                                    </div>
                                </div>
                                <div class='control-group'>
                                    <label class='control-label' for='poinKepegawaian'>Poin Kepegawaian*</label>
                                    <div class='controls'>
                                        <input id='poinKepegawaian' name='poinKepegawaian' type='text' required='required' placeholder='Contoh: 20'>
                                    </div>
                                </div>
                                <div class='control-group'>
                                    <label class='control-label' for='submit'>&nbsp;</label>
                                    <div class='controls'>
                                        <button type='submit' id='submitTambah' name='submitTambah' class='btn btn-primary'><i class='icon-plus-sign icon-white'></i>&nbsp;<strong>Tambah Kepegawaian!</strong></button><br/>
                                    </div>
                                </div>
                                    </form>
            </div>
            </div>";