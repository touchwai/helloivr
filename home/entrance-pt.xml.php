<?php
header("content-type: text/xml");
print "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
	<Gather numDigits="1" action="entrance-logic.xml.php" method="POST">
		<Say>For English, press 1,</Say> 
		<Say>For espanol press 2,</Say>
		<Say>To Check the status of your application, press 3</Say> 
		<Say>To talk an hsf scolarship expert, press 4</Say>
		<Say>To Listen to this menu option again, press 5</Say>
	</Gather>
</Response>
