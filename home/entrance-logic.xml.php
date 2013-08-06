<?php
header("content-type: text/xml");
print "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
	<?php
	if(isset($_REQUEST['Digits']))
		$keyValue = intval($_REQUEST['Digits']);
	
	switch ($keyValue) {
		case 1:
			print "<Say>For English, wait a moment.</Say>";
			$dialto = "+18774734636";
			break;
		case 2:
			print "<Say language='es-MX'>En español, espera un momento.</Say>";
			$dialto = "+18774734636";
			break;
		case 3:
			print "<Say>To Check the status of your application, wait a moment.</Say>";
			$dialto = "+18774734636";
			break;
		case 4:
			print "<Say>To talk an hsf scolarship expert, wait a moment.</Say>";
			$dialto = "+18774734636";
			break;
		case 5:
		default:
			print "<Say>To Listen to this menu option again, wait a moment.</Say>";
			print "<Redirect method=POST>entrance-pt.xml.php</Redirect>";
			break;
	}

	if (isset($dialto)) {
		print "<Dial>$dialto</Dial>";
		print "<Say>The call failed or the remote party hung up. Goodbye.</Say>";
	}
	?>
</Response>
