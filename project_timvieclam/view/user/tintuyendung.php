 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     
                    </div>
                </div>              
                 <!-- /. ROW  -->
                
                <hr />                
                    <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h4>Tất cả tin tuyển dụng</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Link</th>
                                            <th>Tiêu Đề</th>
                                            <th>Số lượng</th>
                                            <th>Hình Thức</th>
                                            <th>Giới Tính</th>
                                            <th>Tuổi</th>
                                            <th>Bằng Cấp</th>
                                            <th>Tên Ngành</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach ($data as $key => $value) { ?>
                                          <tr class="odd gradeX">
                                           <th><a href="?controller=job&action=detail&id=<?php echo $value['id_baituyen'] ?>">Link</a></th>
                                           <td><?php echo $value['tieude'] ?></td>
                                           <td><?php echo $value['soluong'] ?></td>
                                           <td><?php echo $value['hinhthuc'] ?></td>
                                           <td><?php echo $value['gioitinh'] ?></td>
                                           <td><?php echo $value['tuoi'] ?></td>
                                           <td><?php echo $value['bangcap'] ?></td>
                                           <td><?php echo $value['ten_nganh'] ?></td>
                                           
                                           <td><a href="?controller=user&action=deleteTin&id=<?php echo $value['id_baituyen']; ?>" class="btn btn-danger">Xóa</a></td>
                                        
                                            
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
            <hr/>
            
                        
         </div>

             <!-- /. PAGE INNER  -->
            </div>