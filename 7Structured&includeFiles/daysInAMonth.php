<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercise</title>
</head>
<body>
	<?php

	echo daysInAMonth("February");

	function daysInAMonth($month)
	{
		$days = 0;
		switch($month)
		{
			case "January":
			case "March":
			case "May":
			case "July":
			case "August":
			case "October":
			case "December":
				$days = 31;
				break;
			case "February":
				if (isLeapYear(date('Y')) === true)
				{
					$days = 29;
				}
				else
				{
					$days = 28;
				}
				
				break;
			case "April":
			case "June":
			case "September":
			case "November":
				$days = 30;
				break;
			default:
				echo "Incorrect month";
				break;
		}

		return $days;
	}

	function isLeapYear($year)
	{
		if((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0))
		{	
			return true;
		}
		else
		{
			return false;
		}

		//or

		// if(date("L") === true)
		// {
		// 	return 29;
		// }
		// else
		// {
		// 	return 28;
		// }
	}

	
		
	?>
</body>
</html>