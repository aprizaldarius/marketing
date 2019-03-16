<?php
    include "konek.php";
?>
<!--speakers start-->

<form id="login_form" method="post" action="act_daftar.php">

<section class="u-PaddingTop100 u-PaddingBottom100 u-xs-PaddingBottom30 u-xs-PaddingTop30 u-MarginBottom0 u-zIndex10 position-relative">
        <div class="container">
            <div class="row">

<div class="col-md-12">
                    <ul class="nav nav-tabs u-BoxShadow40- nav-tabs-justified" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tab1" data-toggle="tab" aria-expanded="true">
                                <h2 class="u-Weight700 u-Margin0 text-uppercase">Register Lomba</h2>
                                <p>Registrasi untuk lomba inovasi, entrepreneurship, e-games dan e-sport </p>
                            </a>
                        </li>
                        <li role="presentation" class="">
                            <a href="#tab2" data-toggle="tab" aria-expanded="false">
                                <h2 class="u-Weight700 u-Margin0 text-uppercase">Register Talkshow</h2>
                                <p>Registrasi untuk talkshow</p>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content u-BoxShadow100">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab1">
                            <div class="table-responsive">
                            <div class="bg-black-transparent u-BorderRadius4 u-BoxShadow40 u-Padding10">
                        <div class="row u-PaddingTop30 u-PaddingLeft30 u-PaddingRight30">
                            <div class="col-md-12">
                                <form>
                                    <h3 class="text-white u-MarginTop0">Form Pendaftaran Perlombaan</h3>
                                    <div class="form-group">
                                        <input class="form-control form-control--white" name="nama" placeholder="Nama" type="text" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control form-control--white" name="email" placeholder="E-mail" type="text" required>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control form-control--white" name="no_hp" placeholder="No Handphone" type="text" required>
                                    </div>

                                    <div class="form-group select-wrapper">
                                        <select class="form-control" name="jenis_lomba" required>
                                            <option>Jenis Lomba</option>
                                            <option>Innovation Challenge</option>
                                            <option>Entrepeneurship Challenge</option>
                                            <option>PUBG (Player Unknown Battle Ground)</option>
                                            <option>Mobile Legends</option>
                                            
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                            </div>
                        </div>
                        
                        <div role="tabpanel" class="tab-pane fade" id="tab2">
                            <div class="table-responsive">
                            <div class="bg-black-transparent u-BorderRadius4 u-BoxShadow40 u-Padding10">
                        <div class="row u-PaddingTop30 u-PaddingLeft30 u-PaddingRight30">
                            <div class="col-md-12">
                                <form>
                                    <h3 class="text-white u-MarginTop0">Form Pendaftaran Talkshow</h3>
                                    <div class="form-group">
                                        <input class="form-control form-control--white" name="nama" placeholder="Nama" type="text" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control form-control--white" name="email" placeholder="E-mail" type="text" required>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control form-control--white" name="no_hp" placeholder="No. Handphone" type="text" required>
                                    </div>

                                    
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
</div>
</div>
</section>