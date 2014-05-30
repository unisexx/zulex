<h1>ติดต่อเรา > ข้อความ</h1>
<table class="view">
	<tr>
		<th>หัวข้อ : </th>
		<td><?php echo $contact->title?></td>
	</tr>
	<tr>
		<th>ข้อความ : </th>
		<td><?php echo $contact->detail?></td>
	</tr>
	<tr>
		<th>ชื่อ : </th>
		<td><?php echo $contact->name?></td>
	</tr>
	<tr>
		<th>อีเมล์ : </th>
		<td><?php echo $contact->email?></td>
	</tr>
    <tr>
		<th>ที่อยู่ : </th>
		<td><?php echo $contact->address?></td>
	</tr>
	<tr>
		<th>เบอร์ติดต่อกลับ : </th>
		<td><?php echo $contact->tel?></td>
	</tr>
    <tr>
		<th>ส่งเมื่อ : </th>
		<td><?php echo mysql_to_th($contact->created,'S',TRUE) ?></td>
	</tr>
</table>

<div align="right" style="width:75%; margin:10px auto;"><input type='button' value='พิมพ์หน้านี้' onClick='window.print()'></div>