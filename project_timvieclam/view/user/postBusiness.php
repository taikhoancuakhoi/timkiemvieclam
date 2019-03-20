<div class="navbar">
	<div class="conspan">
		<ul>
			<li><a href="#"><span><i class="fas fa-upload" style="color:black;font-size: 17px;"></i></span> Quản lý tài khoản </a></li>
			<li><a href="#"><span><i class="far fa-user" style="color:black;font-size: 17px;"></i></span> Quản lý tin đăng </a></li>
			<li><a href="#"><a href="#"><span><i class="fas fa-check" style="color:black;font-size: 17px;"></i></span> Hồ sơ đã ứng tuyển</a></li>
			<li><a href="#"><a href="#"><span><i class="far fa-star" style="color:black;font-size: 17px;"></i></span> Hồ sơ đã lưu</a></li>
			<li><a href="#"><a href="#"><span><i class="fas fa-file-alt" style="color:black;font-size: 17px;"></i></span> Giấy phép kinh doanh</a></li>

		</ul>
	</div>
</div>

	<div class="body">
		&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
		
			<div class="container">
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-8">
							
								<center><h2 style="padding-top: 0px;font-family:Times New Roman">ĐĂNG TIN TUYỂN DỤNG</h2></center><br>
						<div class="main">
							<div class="tab">
								
					<h4 style="opacity: 0.5;padding-top: 10px">Thông tin tuyển dụng</h4>	<hr/>
								<form class="form-horizontal" action="">
								    <div class="form-group">
								      <label class="control col-sm-3" for="email">Vị trị tuyển dụng <span style="color: red;">*</span></label>
								      <div class="col-sm-8">
								        <input type="text" class="form-control" id="vitri" placeholder="Nhập vị trí cần tuyển dụng" name="">
								      </div>
								    </div>
								    <div class="form-group">
								      <label class="control col-sm-3" for="pwd">Ngành hiển thị <span style="color: red;">*</span></label>
								      <div class="col-sm-8"> 
								      	<select name="" class="form-control">
								      		<option value="">Chọn ngành để hiển thị</option>
									      	<?php
									      		foreach ($data as $id => $cv) {
											?>
									      		<option value="<?php echo $cv['id_nganh'] ?>"><?php echo $cv['ten_nganh']; ?></option>";
									      	<?php } ?>         
								        
								        	
								        	
								        </select>
								      </div>
								    </div>

								    <div class="form-group">
								      <label class="control col-sm-3" for="pwd">Địa điểm <span style="color: red;">*</span></label>
								      <div class="col-sm-8">          
								        <select name="" class="" style="height: 32px;width: 236px;border-radius:3px;opacity: 0.9;">
								        	<option value="">Chọn Tỉnh/Thành</option>
								        	<!-- <?php 
								        		foreach ($city as $key => $tp) {
								        	 ?>
								        	<option value="<?php echo $tp['id_thanhpho'] ?>"><?php echo $tp['ten_tp']; ?></option>
								        	<?php } ?> -->
								        </select>
								        <select name="" class="" style="height: 32px;width: 235px;border-radius:3px;opacity: 0.9;">
								        	<option value="">Chọn Quận/Huyện</option>
								        	<option value="1">Thanh Xuân</option>
								        </select>
								      </div>
								    </div>
								    <div class="form-group">
								      <label class="control col-sm-3" for="pwd">Hình thức <span style="color: red;">*</span></label>
								      <div class="col-sm-8">          
								        <select name="" class="form-control">
								        	<option value="">Chọn hình thức</option>
								        	<option value="1">Nhân viên bán thời gian</option>
								        </select>
								      </div>
								    </div>
								    <div class="form-group">
								      <label class="control col-sm-3" for="pwd">Mức lương <span style="color: red;">*</span></label>
								      <div class="col-sm-8">          
								        <select name="" class="form-control">
								        	<option value="">Chọn mức lương</option>
								        	<option value="1">Dưới 3 triệu</option>
								        </select>
								      </div>
								    </div>
								    <div class="form-group">
								      <label class="control col-sm-3" for="pwd">Số lượng cần tuyển <span style="color: red;">*</span></label>
								      <div class="col-sm-8">          
								        <input type="number" class="form-control" id="soluong" placeholder="Nhập số lượng cần tuyển" name="">
								      </div>
								    </div>
								    <div class="form-group">
								      <label class="control col-sm-3" for="pwd">Bằng cấp <span style="color: red;">*</span></label>
								      <div class="col-sm-8">          
								        <select name="" class="form-control">
								        	<option value="">Chọn bằng cấp</option>
								        	<option value="1">Đại học</option>
								        </select>
								      </div>
								    </div>
								    <div class="form-group">
								      <label class="control col-sm-3" for="pwd">Giới tính <span style="color: red;">*</span></label>
								      <div class="col-sm-8">          
								        <select name="" class="form-control">
								        	<option value="">Chọn giới tính</option>
								        	<option value="1">Nam</option>
								        </select>
								      </div>
								    </div>
								    <div class="form-group">
								      <label class="control col-sm-3" for="pwd">Tuổi <span style="color: red;">*</span></label>
								      <div class="col-sm-8">          
								        <select name="" class="form-control">
								        	<option value="">Chọn mức tuổi</option>
								        	<option value="1">16 tuổi - 18 tuổi</option>
								        </select>
								      </div>
								    </div>
								    <div class="form-group">
								      <label class="control col-sm-3" for="pwd">Mô tả công việc <span style="color: red;">*</span></label>
								      <div class="col-sm-8">          
											<textarea  class="
											form-control" name="editor1">
				          
				      						</textarea>
				      						<script>
 
									           CKEDITOR.replace( 'editor1' );
									 
									       </script>
								      </div>
								    </div>
								    <div class="form-group">
								      <label class="control col-sm-3" for="pwd">Yêu cầu công việc <span style="color: red;">*</span></label>
								      <div class="col-sm-8">          
											<textarea  class="
											form-control" name="editor2">
				          
				      						</textarea>
				      						<script>
 
									           CKEDITOR.replace( 'editor2' );
									 
									       </script>
								      </div>
								    </div>
								    <div class="form-group">
								      <label class="control col-sm-3" for="pwd">Hạn nộp hồ sơ <span style="color: red;">*</span></label>
								      
					                <div class="col-sm-8">          
								        <input type='date' class="form-control"  >
								        
					                    
								     </div>

								    </div>

							  </form><br>

							</div>
							
							
						</div>
						&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
						<div class="dot">
									<div class="tab">
												
												<h4 style="opacity: 0.5;padding-top: 10px;">Thông tin liên hệ</h4>	<hr/>
												<form class="form-horizontal" action="">
												    <div class="form-group">
												      <label class="control col-sm-3" for="email">Tên người liên hệ <span style="color: red;">*</span></label>
												      <div class="col-sm-8">
												        <input type="text" class="form-control" id="" placeholder="Nhập tên người liên hệ" name="">
												      </div>
												    </div>
												    <div class="form-group">
												      <label class="control col-sm-3" for="pwd">Địa chỉ liên hệ <span style="color: red;">*</span></label>
												      <div class="col-sm-8">          
												        <textarea class="form-control">Hà nội</textarea>
												      </div>
												    </div>
												    <div class="form-group">
												      <label class="control col-sm-3" for="pwd">Số điện thoại liên hệ <span style="color: red;">*</span></label>
												      <div class="col-sm-8">          
												        <input type="number" class="form-control" id="sdienthoai" placeholder="0123456789" name="">
												      </div>
												    </div>
												    <div class="form-group">
												      <label class="control col-sm-3" for="pwd">Email liên hệ <span style="color: red;">*</span></label>
												      <div class="col-sm-8">          
												        <input type="email" class="form-control" id="email" placeholder="loca@gmail.com" name="">
												      </div>
												    </div>
												</form><br>	
									</div>
						
												
						</div>
						&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
									<div class="submit">
										<input type="submit" name="" value="ĐĂNG TIN"  class="btn btn-primary" style="height: 50px;width: 120px;margin-left: 110px;">
										<input type="submit" name="" value="XEM TRƯỚC" class="btn btn-danger" style="height: 50px;width: 120px;margin-left: 10px">
										<input type="submit" name="" value="LƯU NHÁP"  class="btn btn-success" style="height: 50px;width: 120px;margin-left: 20px">
										<input type="submit" name="" value="XÓA TIN"  class="btn btn-default" style="height: 50px;width: 120px;margin-left: 20px">
									</div>
							</div>
							</div>
						
						
					</div>
					<div class="col-lg-2"></div>
					&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
				</div>
				<div class="lentop"></div>