<!doctype html>
<html lang="en">
  <head>
    <title>Switch It!</title>
  </head>
  <body>
  <p>Create a switch statement with 3 different cases and a default case, feel free to use alternative syntax as well!</p>
  <?php
  $months = 8;
switch ($months) {
	case 1:
		$monthName = 'Jan';
		break;
	case 2:
		$monthName = 'Feb';
		break;
	case 3:
		$monthName = 'Mar';
		break;
	case 4:
		$monthName = 'Apr';
		break;
	case 5:
		$monthName = 'May';
		break;
	case 6:
		$monthName = 'Jun';
		break;
	case 7:
		$monthName = 'Jul';
		break;
	case 8:
		$monthName = 'Aug';
		break;
	case 9:
		$monthName = 'Sep';
		break;
	case 10:
		$monthName = 'Oct';
		break;
	case 11:
		$monthName = 'Nov';
		break;
	default:
		$monthName = 'Dec';
		break;
}
echo $monthName;

  ?>
  </body>
</html>
