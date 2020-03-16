<?php
	if(@$_POST['xss']{
	echo 'hasil pencaharian: '.$_POST['xss'];
	}else{
	echo '<form action="" method="post">
	<input type="text" name="xss">
	<input type="sumbit" value="cari">
	';
	}
 ?>
