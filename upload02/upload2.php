<?php
if(isset($_FILES['file'])){
	$file = $_FILES['file'];
	
	
	// File properties
	$file_name = $file['name'];
	$file_tmp = $file['tmp_name'];
	$file_size = $file['size'];
	$file_error = $file['error'];
	
	
	// work out the file extension
	$file_ext = explode('.', $file_name);
	$file_ext = strtolower(end($file_ext));
	
	$allowed = array('txt','jpg');
	
	if(in_array($file_ext, $allowed)) {
		if($file_error === 0){
			if($file_size <= 2097152) {
				
				$file_name_new = uniqid('',true) . '.' . $file_ext;
				$file_destination = 'uploads/' . $file_name_new;
				
				
				if(move_uploaded_file($file_tmp, $file_destination)){
					echo '<style>.upload_img{width:300px;}</style>';
					echo '<img src="'. $file_destination .'" class="upload_img"/>';
				}
			}
		}
	}
	
}

?>