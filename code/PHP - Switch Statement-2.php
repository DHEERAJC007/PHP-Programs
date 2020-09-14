
<?php
$Restricted_Area='def'; //Media

switch($Restricted_Area)
{
	case 'Guard':
	case 'Public':
	echo "Permission Granted";
    break;
    
	case 'Office boy':
	case 'Public':
	case 'Media':
    echo "Permission Denied";
    break;
    
	default:
	echo "visit http://Jayakumars.in";

}
?>
