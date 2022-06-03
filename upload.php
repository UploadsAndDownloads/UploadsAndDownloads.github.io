<?php
	//move_uploaded_file();
	foreach($_FILES['doc']['name'] as $key=>$val){

		$file=$val;
		move_uploaded_file($_FILES['doc']['tmp_name'][$key],'Uploads/'.$file);
		//insert into table(image) values('$file');
	}
header("Location: " . $_SERVER["HTTP_REFERER"]);
?>