<?php 

//echo $result;
/*echo "<pre>";
var_dump($result[0]);
echo "</pre>";
echo "<table border='1'>";
echo "<tr>";
foreach ($result[0] as $key => $value) {
	echo '<td>' . $key . '</td>';
}
echo "</tr>";
foreach ($result as $object) {
	echo "<tr>";
	foreach ($object as $v) {
		echo "<td>" . $v . "</td>";
	}
}
echo "</tr>";
echo "</table>";*/

foreach ($result as $object) {
	echo $object->username . "<br>";
}
?>