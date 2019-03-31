<div class="job-new">
<h4 style="color:#1F568B;font-weight: bold">Việc làm đã ứng tuyển <span style="font-size: 13px;">(click vào tiêu đề để xem bài)</span></h4>
<table class="table table-bordered">
	<tr>
		<td style="color:#1F568B;font-weight: bold ">Tiêu đề công việc</td>
		<td style="color:#1F568B;font-weight: bold ">Công ty</td>
		<td style="color:#1F568B;font-weight: bold ">Ngày nộp</td>
	</tr>
	<?php 
		foreach ($data as $key => $value) {
	?>
	<tr>
		<td><a href="?controller=job&action=detail&id=<?php echo $value['id_baituyen']; ?>"><?php echo ucwords($value['tieude']); ?></a></td>
		<td><?php echo $value['ten'] ?></td>
		<td><?php echo date('d-m-Y',strtotime($value['thoigian'])); ?></td>
	</tr>

	<?php	}?>
	
</table>
</div>
<!-- <?php echo "<pre>";print_r($data); ?> -->