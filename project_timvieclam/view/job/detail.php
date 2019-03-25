<div class="body">
		&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="detail">
						<div class="products">
							<img src="asset/images/cn.png" alt="CÔNG ty" style="border:1px solid black;width:25%;float: left;margin:10px 10px">
							<div class="image-product">

								
								<div class="name-job">
									<p><h3><?php echo $data['tieude']; ?></h3></p>
									<a href="#" style="color: black;"><?php echo ucwords($data['ten']); ?></a>
								</div>
								<div style="clear: both"></div>
								<a class="btn btn-grey-bor marginRight10 btn-luu-vl hidden-xs save-job-track" id="save-job" style="margin:0px 33px" onclick="bookmarkDetail(1247433)">
                                		<i class="far fa-star"></i> Lưu việc làm
                            	</a>
								<p style="float: left;margin:30px 300px;"><b>Ngày Cập Nhật:</b> <?php echo $data['ngaydang']; ?></p>
								
                            	<div style="clear: both;"></div>
							</div>
							<p style="font-size:17px;color:#FF6633;text-align: center;">THÔNG TIN TUYỂN DỤNG</p>
							<div class="row">
								<div class="col-lg-6 left">
										
									<div class="describe">
										
										
										
										
										<p style="font-weight: bold;">Địa điểm làm việc : <span style="color: #337ab7;"><?php echo $data['ten_tp']; ?></span></p>
										<p style="font-weight: bold;">Ngành nghề : <span style="color: #337ab7;"><?php echo $data['ten_nganh']; ?></span></p>
										<p style="font-weight: bold;">Chức vụ : <span style="color: #337ab7;"> Nhân viên</span></p>
										<p style="font-weight: bold;">Số lượng cần tuyển : <span style="color: #337ab7;"><?php echo $data['soluong'] ?> Người</span></p>
										<p style="font-weight: bold;">Hạn nộp : <span style="color: #337ab7;"><?php echo $data['hannop'] ?></span></p>
										
										<p style="font-size:17px;color:#FF6633;margin-top: 40px">MÔ TẢ CÔNG VIỆC</p>
										<p><?php echo $data['mota'] ?></p>
										</div>
	
								</div>
								
								<div class="col-lg-6 right">
									
									<div class="click">
										
										<p style="margin-top:70px;font-weight: bold;">Lương : <span style="color: #337ab7;"><?php echo $data['mucluong'] ?></span></p>
										<p style="font-weight: bold;">Giới tính : <span>
											<?php 
												if ($data['gioitinh'] == 1) {
													echo "<span style='color: #337ab7'>Nữ</span>";
												}else{
													echo "<span style='color: #337ab7'>Nam</span>";
												}
											 ?>
												
										</span></p>
										<p style="font-weight: bold;">Tuổi : <span style='color: #337ab7'><?php echo $data['tuoi'] ?></span></p>
										
										
										<p style="font-size:17px;color:#FF6633;margin-top: 100px;">THÔNG TIN LIÊN HỆ</p>
										<p><?php echo $data['lienhe'] ?></p>
										
									
										
									</div>

								</div>
								<div class="row">
									<div class="col-lg-12">
										<!-- UP file -->
									<form action="?controller=user&action=checkFile" method="POST" enctype="multipart/form-data">
										<input type="file" name="CVcongviec" style="margin:10px 20px">
										<input type="submit" name="submit" value="NỘP HỒ SƠ" class="btn btn-danger form-control" style="margin-left: 20px;width: 95%;height: 40px">
									</form>
								</div>
								</div>
								
								
								<br/>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="jobnew">
						<h4 style="text-align: center;padding-top: 10px;">VIỆC LÀM TƯƠNG TỰ</h4><hr style='width:360px;margin-left:0px'>
						<div class="job">
							<div class="row">
								<div class="col-lg-6">
									<p style="font-weight: bold;font-size:14px;"><a href="#">NHÂN VIÊN TẠP VỤ</a></p>
							<span><img src="asset/images/anh1.jpg" style="width: 97%;"></span>
								</div>
								<div class="col-lg-6">
									<div class="pass">
										<p><a href="#" style="font-size: 14px;">CÔng ty TNHH vindd</a></p>
									<p style="font-size: 12px;">Địa điểm : <span style="font-size: 12px;"> Hà Nội</span></p>
								<p style="font-size: 12px;">Lương : <span style="color: blue;font-size: 12px;font-weight: bold;">3.000.000 - 4.000.000</span></p>
								</div>
									</div>
							</div>
							
						</div>
						<hr style='width:360px;margin-left:0px'>
						<div class="job">
							<div class="row">
								<div class="col-lg-6">
									<p style="font-weight: bold;font-size:14px;"><a href="#">NHÂN VIÊN TẠP VỤ</a></p>
							<span><img src="asset/images/anh1.jpg" style="width: 97%;"></span>
								</div>
								<div class="col-lg-6">
									<div class="pass">
										<p><a href="#" style="font-size: 14px;">CÔng ty TNHH vindd</a></p>
									<p style="font-size: 12px;">Địa điểm : <span style="font-size: 12px;"> Hà Nội</span></p>
								<p style="font-size: 12px;">Lương : <span style="color: blue;font-size: 12px;font-weight: bold;">3.000.000 - 4.000.000</span></p>
								</div>
									</div>
							</div>
							
						</div>
						<hr style='width:360px;margin-left:0px'>
						<div class="job">
							<div class="row">
								<div class="col-lg-6">
									<p style="font-weight: bold;font-size:14px;"><a href="#">NHÂN VIÊN TẠP VỤ</a></p>
							<span><img src="asset/images/anh1.jpg" style="width: 97%;"></span>
								</div>
								<div class="col-lg-6">
									<div class="pass">
										<p><a href="#" style="font-size: 14px;">CÔng ty TNHH vindd</a></p>
									<p style="font-size: 12px;">Địa điểm : <span style="font-size: 12px;"> Hà Nội</span></p>
								<p style="font-size: 12px;">Lương : <span style="color: blue;font-size: 12px;font-weight: bold;">3.000.000 - 4.000.000</span></p>
								</div>
									</div>
							</div>
							
						</div>
						<hr style='width:360px;margin-left:0px'>
						<div class="job">
							<div class="row">
								<div class="col-lg-6">
									<p style="font-weight: bold;font-size:14px;"><a href="#">NHÂN VIÊN TẠP VỤ</a></p>
							<span><img src="asset/images/anh1.jpg" style="width: 97%;"></span>
								</div>
								<div class="col-lg-6">
									<div class="pass">
										<p><a href="#" style="font-size: 14px;">CÔng ty TNHH vindd</a></p>
									<p style="font-size: 12px;">Địa điểm : <span style="font-size: 12px;"> Hà Nội</span></p>
								<p style="font-size: 12px;">Lương : <span style="color: blue;font-size: 12px;font-weight: bold;">3.000.000 - 4.000.000</span></p>
								</div>
									</div>
							</div>
							
						</div>
						<hr style='width:360px;margin-left:0px'>
						<a href="#" class="btn btn-danger" style="margin-left: 35%;">TRANG KẾ --></a>
					</div>
					&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
					<div class="min">
						<h3>TỪ KHÓA</h3>
						&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
					</div>
				</div>
			</div>
		</div>
	
	</div>