<div class="banner">
					<div class="container">
						<div class="row">
							<!-- Carousel
							================================================== -->
							<div id="myCarousel" class="carousel slide">
							  <!-- Indicators -->
							  <ol class="carousel-indicators">
							    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							    <li data-target="#myCarousel" data-slide-to="1"></li>
							    <li data-target="#myCarousel" data-slide-to="2"></li>
							  </ol>
							  <div class="carousel-inner">
							    <div class="item active">
							    	
							      <img src="asset/images/anh2.jpg">

							      <div class="container">

							        <div class="carousel-caption" >
							        	
							        </div>
							      </div>
							    </div>
							    <div class="item">
							      <img src="asset/images/anh2.jpg">
							      <div class="container">
							        <div class="carousel-caption">
							          
							        </div>
							      </div>
							    </div>
							    <div class="item">
							      <img src="asset/images/anh2.jpg">
							      <div class="container">
							        <div class="carousel-caption">
							          
							        </div>
							      </div>
							    </div>
							  </div>
							  
							  <form class="col-lg-12" id="searchForm">
							   	<div class="row">
							   		<div class="col-lg-5">
							   			<input type="text" name="" class="form-control" value="" placeholder="Search">
							   		</div>
							   		<div class="col-lg-3">
							   			<select class="form-control">
							   				<option>Tất cả ngành</option>
							   			</select>
							   		</div>
							   		<div class="col-lg-2">
							   			<select class="form-control">
							   				<option>Địa chỉ</option>
							   			</select>
							   		</div>
							   		<div class="col-lg-2">
							   			<button type="button" class="btn btn-primary">TÌM KIẾM</button>
							   		</div>
							   	</div>
							  </form>
							 
							</div>
							<!-- /.carousel -->
					</div>
					</div>
				</div>
				<!--HẾT PHẦN BANNER-->
				<!--BẮT ĐẦU BODY-->
				<div class="body">
							<div class="container">
						<div class="row">
							
								<div class="col-lg-8">
								<div class="describe"><h4>CÔNG VIỆC TẠI <span style="color: blue">HÀ NỘI 	</span><span style="color:red ">3,6666</span></h4></div>
								<div class="border">

								<?php 
					
									foreach ($data as $job => $value) {

								 ?>
								<div class="row">

									<div class="col-lg-3">
											<div class="company-images">
													<img src="<?php echo $value['img'] ?>" width="140px" height='80px'>
												
											</div>
									</div>
									<div class="col-lg-5">
										<div class="company-text">
											<p><span style="font-weight: bold;font-size:20px;"><a href="?controller=job&action=detail"><?php echo ucwords($value['tieude']); ?></a></span></p>
											<p><span style="font-style: italic;"><a  href="#"><?php echo ucwords($value['ten']); ?></a></span></p>
											
											
										</div>
									</div>
									<div class="col-lg-4" style="text-align: right;">
										<div class="company-text1">
											<div class="luong">
												<i class="fas fa-dollar-sign"></i>
												<span style="color: red;font-weight: bold;float: left;"> <?php echo $value['mucluong']; ?></span>
											</div>
											<div style="clear: both;height: 5px;"></div>
											<div class="diadiem">
												<i class="fas fa-map-marker-alt" style="margin-right: 6px"></i>
												<span style="color: blue;"><?php echo ucwords($value['ten_tp']); ?></span>
												<span style="color: blue;margin-right:8px"><?php echo ucwords($value['hinhthuc']); ?></span>
											</div>
											<div style="clear: both;height: 5px;"></div>
											<span id="ngaydang"><b>Ngày Đăng</b>: <?php echo date("d-m-Y", strtotime($value['ngaydang'])); ?></span>
										</div>	
									</div>
								</div>
								<hr/>
								<?php 
									}
								 ?>
								<!--HẾT PHẦN ĐƯA RA THÔNG TIN-->
								</div><br>
									
					<!--Phần right--->
							</div>
							<div class="col-lg-4 right">
								<div class="describe1"><h4>HOTLINE</h4></div>
								<div class="hotline">
									<div class="hot">
										<center><img src="asset/images/hot.png" width="280px"></center>
									</div><br>
									
								</div>
								<div class="company_fon">
									<div class="describe1" style="margin-top:20px;padding-top: 10px;"><h4 style="text-align: center;">NHÀ TUYỂN DỤNG HÀNG ĐẦU</h4></div>
									<hr/>
									<div class="company-album">
										<img src="asset/images/rot2.png">
										<img src="asset/images/rot2.png">
										<img src="asset/images/rot2.png">
										<img src="asset/images/rot2.png">
										<img src="asset/images/rot2.png">
										<img src="asset/images/rot2.png">
										<img src="asset/images/rot2.png">
										<img src="asset/images/rot2.png">
										<img src="asset/images/rot2.png">
									</div>
								</div>
								<div class="sidebar">
									<div class="describe1" style="margin-top:20px"><h4 style="text-align: center; padding-top: 20px">CẨM NANG</h4></div><hr>
									<div class="handbook">
										<div class="hand_1">
											<img src="asset/images/cn.png" width="140px">
											<p style="font-size:13px;margin-left: 4px">Cái giá của ... Thất nghiệp</p>

										</div>
										<div class="hand_2">
											<img src="asset/images/cn.png" width="140px">
											<p style="font-size:13px;">Cái giá của ... Thất nghiệp</p>
										</div>
										<p><a href="#" class="" style=""><button type="button" class="btn btn-success" style="background-color:#477ba3;margin:10px 130px">Xem thêm</button></a></p>
									</div>
								</div>
							</div>
							
							
		
								</div>
							</div>
						</div>