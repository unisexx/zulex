<?php 
if ( ! function_exists('mysql_to_th'))
{
	function mysql_to_th($datetime,$format = 'S' ,$time = FALSE)
	{
		$month_th['F'] = array( 1 =>'มกราคม',2 => 'กุมภาพันธ์',3=>'มีนาคม',4=>'เมษายน',5=>'พฤษภาคม',6=>'มิถุนายน',7=>'กรกฏาคม',8=>'สิงหาคม',9=>'กันยายน',10=>'ตุลาคม',11=>'พฤศจิกายน',12=>'ธันวาคม');
		$month_th['S'] = array( 1 =>'ม.ค.',2 => 'ก.พ.',3=>'มี.ค.',4=>'เม.ย',5=>'พ.ค.',6=>'มิ.ย',7=>'ก.ค.',8=>'ส.ค.',9=>'ก.ย.',10=>'ต.ค.',11=>'พ.ย.',12=>'ธ.ค.');
		$datetime = mysql_to_unix($datetime);
		$r = date('d', $datetime).' '.$month_th[$format][date('n', $datetime)].' '.(date('Y', $datetime) + 543); 
		if($time)$r .= ' - '.date('H', $datetime).':'.date('i', $datetime);
		return $r;
	}
}

if ( ! function_exists('month_th'))
{
	function month_th($month)
	{
		$month_array = array('มกราคม','กุมภาพันธุ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฏาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม');
		return $month_array[$month-1];
	}
}

if ( ! function_exists('year_th'))
{
	function year_th($year)
	{
		return $year + 543;
	}
}

if ( ! function_exists('mysql_to_relative'))
{
	function mysql_to_relative($datetime){
		$timestamp = mysql_to_unix($datetime);
		$difference = time() - $timestamp;
		$periods = array('วินาที','นาที','ชั่วโมง','วัน','สัปดาห์','เดือน','ปี','สิบปี');
		$lengths = array('60','60','24','7','4.35','12','10');
		
		if ($difference > 0) 
		{ 
			$ending = "ที่ผ่านมา";
		} 
		else 
		{
			$difference = -$difference;
			$ending = "to go";
		}
		for($j = 0; $difference >= $lengths[$j]; $j++)
		{
			$difference /= $lengths[$j];
		}
		$difference = round($difference);
		$text = "$difference $periods[$j]$ending";
		return $text;
	}
}
?>