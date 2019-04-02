<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     
                    </div>
                </div>              
                 <!-- /. ROW  -->
                 
                
                 <!-- /. ROW  -->
                            
                    <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h4>Việc Làm Đã Lưu</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example10">
                                    <thead>
                                        <tr>
                                            <th>Tiêu đề công việc</th>
                                            <th>Công Ty</th>
                                            <th>Lương</th>
                                            <th>Ngày Đăng</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach ($data as $key => $value) {
                                        ?>
                                        <tr>
                                            <td><a href="?controller=job&action=detail&id=<?php echo $value['id_baituyen']; ?>"><?php echo ucwords($value['tieude']); ?></a></td>
                                            <td><?php echo $value['ten'] ?></td>
                                            <td><?php echo $value['mucluong']; ?></td>
                                            <td><?php echo $value['ngaydang']; ?></td>

                                        </tr>

                                        <?php   }?>
                                                                           
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
         <!-- /. PAGE WRAPPER  -->
        </div>