<h1>สมัครตัวแทนจำหน่าย > ใบสมัคร</h1>
<table class="view">
	<tr>
		<th width="200">ชื่อร้าน : </th>
		<td><?php echo $applicant->store_name?></td>
	</tr>
	<tr>
		<th>ชื่อผู้ติดต่อ : </th>
		<td><?php echo $applicant->dealer_name?></td>
	</tr>
	<tr>
		<th>ตำแหน่ง : </th>
		<td><?php echo $applicant->dealer_position?></td>
	</tr>
	<tr>
		<th>ที่อยู่ : </th>
		<td><?php echo $applicant->address?></td>
	</tr>
	<tr>
		<th>เบอร์โทรศัพท์ : </th>
		<td><?php echo $applicant->tel?></td>
	</tr>
	<tr>
		<th>มือถือ : </th>
		<td><?php echo $applicant->mobile?></td>
	</tr>
	<tr>
		<th>แฟกซ์ : </th>
		<td><?php echo $applicant->fax?></td>
	</tr>
	<tr>
		<th>อีเมล์ : </th>
		<td><?php echo $applicant->email?></td>
	</tr>
	<tr>
		<th>ภาพถ่ายหน้าร้าน : </th>
		<td><img src="uploads/resellers/applicants/<?php echo $applicant->image?>"  style="max-width:350px;"></td>
	</tr>
	<tr>
		<th>พิกัด : </th>
		<td>
			<img src="http://maps.google.com/staticmap?center=<?php echo $applicant->latitude?>,<?php echo $applicant->longitude?>&zoom=14&size=350x220&maptype=roadmap&markers=<?php echo $applicant->latitude?>,<?php echo $applicant->longitude?>&key=ABQIAAAAsjlbnmTUjA-RpBZO-Jmm0xQED3NELORP5k-CX3o9HKyuxCU1UxT3miN6wBc6OFiQQ1sOhin4ZToUDA">
		</td>
	</tr>
	<tr>
		<th>latitude : </th>
		<td><?php echo $applicant->latitude?></td>
	</tr>
	<tr>
		<th>longitude : </th>
		<td><?php echo $applicant->longitude?></td>
	</tr>
	<tr>
		<th>ปัจจุบันเป็นตัวแทนของแบรนด์ : </th>
		<td><?php echo $applicant->dealer_brand?></td>
	</tr>
	<tr>
		<th>ปัจจุบันมียอดจำหน่ายต่อเดือน : </th>
		<td><?php echo $applicant->sell?></td>
	</tr>
	<tr>
		<th>จำนวนพนักงาน : </th>
		<td><?php echo $applicant->employee?></td>
	</tr>
	<tr>
		<th>มีสินค้าของ zulex จำหน่าย : </th>
		<td><?php echo $applicant->zulex_product?></td>
	</tr>
	<tr>
		<th>ซื้อจากตัวแทน : </th>
		<td><?php echo $applicant->zulex_dealer?></td>
	</tr>
    <tr>
		<th>สมัครเมื่อ : </th>
		<td><?php echo mysql_to_th($applicant->created,'S',TRUE) ?></td>
	</tr>
</table>	

<div align="right" style="width:75%; margin:10px auto;"><input type='button' value='พิมพ์หน้านี้' onClick='window.print()'></div>