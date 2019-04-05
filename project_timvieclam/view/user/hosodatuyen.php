<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     
                    </div>
                </div>              
                 <!-- /. ROW  -->
               <!--  <?php echo "<pre>";print_r($data); ?> -->
                <hr />                
                    <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h4>Hồ sơ đã ứng tuyển</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Tên Người Tìm Việc</th>
                                            <th>Bài Tuyển</th>
                                            <th>Ngày Nộp</th>
                                            <th>Trạng thái</th>
                                            <th>Hành động</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $key => $value) { ?>
                                         <tr class="odd gradeX">
                                            <td><?php echo $value['ten']; ?></td>
                                            <td><?php echo $value['tieude']; ?></td>
                                            <td><?php echo $value['thoigian']; ?></td>
                                            <?php 
                                                $sql = "SELECT * FROM tb_mess WHERE id_thanhvien='".$value['id_thanhvien']."' AND id_nhatd='".$_SESSION['tv']."'";
                                                $stmt=DB::getInstance()->prepare($sql);
                                                $stmt->execute();
                                                $count = $stmt->rowCount();
                                                if ($count>0) {
                                            ?>
                                            <td style="color: green;">Đã Gửi Tin Nhắn</td>
                                            <?php }else{ ?>
                                            <td style="color:blue">Đang Chờ</td>
                                            <?php } ?>
                                            <td><a href="#" class="btn btn-success">Lưu</a>
                                                <a href="#" class="btn btn-danger">Xóa</a>
                                                <a href="?controller=user&action=sendMess&id=<?php echo $value['id_thanhvien']; ?>" class="btn btn-warning">Nhắn Tin</a>
                                                <a href="?controller=user&action=showHoSo&id=<?php echo $value['id_thanhvien']; ?>" class="btn btn-default">Xem Hồ Sơ</a>
                                            </td>
                                        
                                            
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