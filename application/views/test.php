 <!-- Static Table Start -->
 <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                                </div>
                                    <button class="btn btn-sm btn-primary login-submit-cs" type="submit" href="#" data-toggle="modal" data-target="#DangerModalhdbgcl">Add User</button>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="id">ID</th>
                                                <th data-field="name" data-editable="true">Username</th>
                                                <th data-field="email" data-editable="true">Email</th>
                                                <th data-field="phone" data-editable="true">Password</th>
                                                <th data-field="complete">Telepon</th>
                                                <th data-field="complete">Devisi</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach($row->result() as $key=> $data) { ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $data->username?></td>
                                                <td><?php echo $data->email?></td>
                                                <td><?php echo $data->password?></td>
                                                <td class="datatable-ct"><span class="pie"><?php echo $data->telepon?></span>
                                                </td>
                                                <td><?php echo $data->level?></td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->


         <!-- Modals Start-->
         <div class="login-form-area edu-pd mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div id="DangerModalhdbgcl" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header header-color-modal bg-color-4">
                                        <h4 class="modal-title">BG Color Header Modal</h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="sparkline12-list">
                                                <div class="sparkline12-graph">
                                                    <div class="basic-login-form-ad">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="all-form-element-inner">
                                                                    <form action="#">
                    
                                                                    <div class="form-group-inner">
                                                                            <div class="row">
                                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                    <label class="login2 pull-right pull-right-pro">Username</label>
                                                                                </div>
                                                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                                    <input type="email" name="email" id="email" class="form-control" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group-inner">
                                                                            <div class="row">
                                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                    <label class="login2 pull-right pull-right-pro">Email</label>
                                                                                </div>
                                                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                                    <input type="email" name="email" id="email" class="form-control" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group-inner">
                                                                            <div class="row">
                                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                    <label class="login2 pull-right pull-right-pro">Password</label>
                                                                                </div>
                                                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                                    <input type="text" name="password" id="password" class="form-control" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group-inner">
                                                                            <div class="row">
                                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                    <label class="login2 pull-right pull-right-pro">Telepon</label>
                                                                                </div>
                                                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                                    <input type="number" name="number" id="number" class="form-control" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group-inner">
                                                                            <div class="row">
                                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                                    <label class="login2 pull-right pull-right-pro">Level</label>
                                                                                </div>
                                                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                                    <input type="number" name="number" id="number" class="form-control" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer danger-md">
                                        <a data-dismiss="modal" href="#">Cancel</a>
                                        <a href="#">Process</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
            </div>
        </div>
        <!-- Modals End-->