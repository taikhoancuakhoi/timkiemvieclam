<div id="page-wrapper">

	<div style="float: left">
		<h2><span style="font-weight: bold">Tên: </span><?php echo $data['ten']; ?> </h2>
		<p><span style="font-weight:bold">Địa Chỉ: </span><?php echo $data['diachi']; ?></p>
		<p><span style="font-weight:bold">Sđt: </span><?php echo $data['sdt']; ?></p>
		<p><span style="font-weight:bold">Giới Tính: </span><?php if ($data['gioitinh']=='0') {
			echo "Nam";
		}else{ echo "Nữ";} ?></p>
		<p><span style="font-weight:bold">Bằng Cấp: </span><?php echo $data['bangcap']; ?></p>
		<p><span style="font-weight:bold">Ngoai Ngữ: </span><?php echo $data['ngoaingu']; ?></p>
		<p><span style="font-weight:bold">Kinh Nghiệm: </span><?php echo $data['kinhnghiem']; ?></p>
		<p><span style="font-weight:bold">Thành Phố: </span><?php echo $data['ten_tp']; ?></p>
		<p><span style="font-weight:bold">Email: </span><?php echo $data['email']; ?> </p>
	</div>
 	<div style="float: right;border: 1px solid #ccc;width: 200px;height: 200px">
 		<img src="" alt="">
 	</div>
</div>