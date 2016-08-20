
<?php
require("constants.php");

$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

//Check
if (mysqli_connect_errno()) {
	echo "Failed to find MySQL: " . mysqli_connect_error();
}

?>