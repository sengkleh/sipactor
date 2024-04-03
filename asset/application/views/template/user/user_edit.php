<!-- page content -->
<div class="right_col" role="main">
    <div class="">

    <div class="page-title">
        <div class="title_left">
        <h3>Update Data User <small>Some</small></h3>
        <a href="<?php echo site_url('Ctr_user/')?>" class ="btn btn-primary btn-md mb-2 mt-6"><i class="fa fa-reply-all" aria-hidden="true"></i>  Back</a>
        </div>

        <div class="title_right">
        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
            </span>
            </div>
        </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>Form Update Data User<small>!!</small></h2>
            <?php echo validation_errors(); ?>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Settings 1</a>
                    <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <form action="" method="POST">

                        <div class="card-box table-responsive">
                                <input type="hidden" name="id_user" value="<?=$row->id_user ?>">
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Full Name<span >*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        
                                        <input class="form-control" name="name" value="<?php echo $this->input->post('name') ?? $row->nama ?>" placeholder="ex. Fahmi Soleh" required="required"/>
                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Username<span >*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" name="username" value="<?php echo $this->input->post('username') ?? $row->username ?>" placeholder="ex.Fello@gmail.com" type="text" />
                                        <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>                              
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Password<span >*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="password" name="password" value="<?php echo $this->input->post('password') ?>" placeholder="ex.Password"  />
                                        <span class="fa fa-key form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>          
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Repeat Password<span >*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="password" name="reppas" value="<?php echo  $this->input->post('reppes')?>" placeholder="ex.Konfirmasi Password"  />
                                        <span class="fa fa-key form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Address<span >*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="text" name="address" value="<?php echo $this->input->post('address') ?? $row->address ?>" placeholder="ex. Jl Kh suhaemi" />
                                        <span class="fa fa-map-signs form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Level<span >*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <select class="form-control" name="level">
                                            <?php $level = $this->input->post('level') ?? $row->level ?>
                                                <option value="1" >Admin</option>
                                                <option value="2<?php echo $level == 2 ? 'selected' : null?>">Kasir</option>               
                                        </select>
                                    </div>
                                </div>
                                <div class="ln_solid">
                                    <div class="form-group">
                                        <div class="col-md-6 offset-md-3 mt-3">
                                            <button type='submit' class="btn btn-app btn-md"><i class="fa fa-paper-plane" aria-hidden="true"></i> Submit</button>
                                            <button type='reset' class="btn btn-app btn-sm"><i class="fa fa-history" aria-hidden="true"></i> Reset</button>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- /page content -->                              

        </div>
    </div>
</div>
<!-- /page content -->

