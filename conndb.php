<?php

## MAKE SURE mysqli_close is executed at the end of your logic

$link = mysqli_connect('localhost','root','','tabletest2');
##$dbselect = mysqli_select_db($link,'tabletest2');

if($link){
	## echo 'connection success<br>';
} else {
	echo 'connection failed<br>';
}

?>