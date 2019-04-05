<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     
                    </div>
                </div>              
                 <!-- /. ROW  -->
                    <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h4>Quản lý tài khoản</h4>
                        </div>
                        <div class="panel-body">
                           <a href="?controller=user&action=listAccount" class="btn btn-default">Danh sách tài khoản</a> &#160; <a href="nhomtaikhoan.html" class="btn btn-success">Nhóm tài khoản</a>  &#160; <a href="phanquyen.html" class="btn btn-primary">Phân quyền</a><br><br>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên đăng nhập</th>
                                            <th>PassWord</th>
                                            <th>Quyền</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $i=1;
                                            foreach ($data as $key => $value) { ?>
                                            <tr class="odd gradeX">
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $value['ten_tk']; ?></td>
                                            <td><?php echo $value['password']; ?></td>
                                            <td><?php if ($value['id_loaitk'] =='1') {
                                                echo "Admin";
                                            }else if($value['id_loaitk'] =='2'){
                                                echo "User";
                                            }else{ echo "Business";} ?></td>
                                            <td><a href="delete.html">Xóa</a></td>
                                            
                                        </tr>
                                        <?php } ?>
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            
                                                <!-- </div> -->
                        
         </div>

             <!-- /. PAGE INNER  -->
            </div>