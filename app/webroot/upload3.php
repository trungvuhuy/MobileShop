<?php
/*
How to modify:
When you create a FileUploader Object, specify it which file types are allowed, maximum file size upload and upload directory like this:
	$fileUploader = new FileUploader('jpg, jpeg, gif, png, zip, rar', 3, 'upload/');
File types are and seperated by commas (,), default are 'jpg, jpeg, gif, png, zip, rar'
Maximum file size upload is in MB, default is: 3 MB
Upload directory is ended with trailing slash (/), default is: 'upload/'

If one or more of these arguments is missed, default value is used in stead of. You can leave if blank if you don't know how to change.
*/
class FileUploader {
	private $fileTypesAllowed;
	private $fileSizeMax;
	private $uploadDir;
	private $files;
	
	/*
	Function: Create FileUploader object
	Arguments:
		$fileTypesAllowed: types of files allowed, separated by commas(,)
		$fileSizeMax: max size of file upload in MB
		$uploadDir: path to directory where files go to, ended with trailing slash (/)
			function __construct($fileTypesAllowed = 'jpg, jpeg, gif, png, zip, rar, mpg, avi, flv, wmv',
	*/

 // script để thực hiện quá trình upload
	
	function __construct($fileTypesAllowed = 'jpg, jpeg, gif, png', $fileSizeMax = 10, $uploadDir = 'upload/images/') {
		$this->fileTypesAllowed = strtolower($fileTypesAllowed);
		$this->fileSizeMax = $fileSizeMax;
		$this->uploadDir = $uploadDir;
	}
	/*
	Function: Show form upload
	*/
	function showFormUpload() {
		echo '
		<script type="text/javascript">
			function addFile() {
				var br = document.createElement("br")
				var newInput = document.createElement("input");
				newInput.name = "filesUpload[]";
				newInput.type = "file";
				document.getElementById("list").appendChild(br);
				document.getElementById("list").appendChild(newInput);
			}
			function wait() {
				document.getElementById("wait").innerHTML = "Please wait while uploading...";
			}
		</script>
		<form action="'.htmlentities($_SERVER['PHP_SELF']).'" method="post" enctype="multipart/form-data" onsubmit="wait()">
			<input type="hidden" name="MAX_FILE_SIZE" value="'.($this->fileSizeMax * 1024 * 1024).'">
			<table cellspacing="0" cellpadding="5" style=" margin:10px auto;">
				<tr><td>Dung lương tối đa</td><td><b>'.$this->fileSizeMax.' MB</b></td></tr>
				<tr><td>Kiểu file</td><td><b>'.$this->fileTypesAllowed.'</b></td></tr>
				<tr><td>Chọn file upload<br><!--<a href="javascript:void(0)" onclick="addFile()">Add more files</a>--></td><td id="list"><input name="filesUpload[]" type="file"></td></tr>
			</table>
			<input type="submit" name="submit" value="Up ảnh">
		</form>
		<div id="wait"></div>
		
		';
	}
	/*
	Function: Get file upload and set file name and file type
	*/
	function getFilesUpload($files) {
		$j = 0;
		$this->files = array();
		for ($i = 0; $i < count($files['name']); $i++) {
			if (trim($files['name'][$i]) != '') {
				$this->files[$j]['name'] = trim($files['name'][$i]);
				$this->files[$j]['tmp_name'] = $files['tmp_name'][$i];
				$this->files[$j]['error'] = $files['error'][$i];
				$this->files[$j]['type'] = $files['type'][$i];
				$newsname = str_replace(" ","",$this->files[$j]['name']);
				$newsname = str_replace(".","",$this->files[$j]['name']);
				$this->files[$j]['ext'] = strtolower(substr($this->files[$j]['name'], strrpos($this->files[$j]['name'], '.') + 1));
				$this->files[$j]['newName'] = $this->uploadDir.time().$newsname.'.'.$this->files[$j]['ext'];
				$j++;
			}
		}
	}
	/*
	Function: Get total files upload
	*/
	function getTotalFiles() {
		return count($this->files);
	}
	/*
	Function: Check error while uploading
	*/
	function checkUploadProcess($i) {
		switch ($this->files[$i]['error']) {
			case UPLOAD_ERR_INI_SIZE:
			case UPLOAD_ERR_FORM_SIZE:
				echo '<div id="error">File <u>'.$this->files[$i]['name'].'</u> Lớn quá hãy chọn lại file khác</div>';
				return false;
			case UPLOAD_ERR_PARTIAL:
				echo '<div id="error">Lỗi khi tải file <u>'.$this->files[$i]['name'].'</u> , Xin hãy tải lại</div>';
				return false;
		}
		return true;
	}
	/*
	Function: Check file type
	*/
	function checkFileType($i) {
		if (strpos($this->fileTypesAllowed, $this->files[$i]['ext']) === false) {
	//	echo $this->fileTypesAllowed;
			echo '<div id="error">Định dạng không đúng <u>'.$this->files[$i]['name'].'</u> Hãy chọn lại</div>';
			return false;
		}

		return true;
	}
	/*
	Function: Move file to destination folder
	*/
	function moveFile($i) {
		if (!@file_exists($this->files[$i]['newName'])) {
			if (!@move_uploaded_file($this->files[$i]['tmp_name'], $this->files[$i]['newName'])) {
				echo '<div id="error">Không thể up file <u>'.$this->files[$i]['name'].'</u> Lên server,Làm lại</div>';
				return false;
			} else {
				echo '<div id="successful">File <u>'.$this->files[$i]['name'].'</u> Hoàn Thành </div>';
			}
		} else {
			echo '<div id="warn">File <u>'.$this->files[$i]['name'].'</u> already exists</div>';
		}
		return true;
	}
	/*
	Function: Return link to uploaded file
	*/
	function getLink($i) {
		$path = dirname($_SERVER['PHP_SELF']);
		if ($path == '' || $path == '/' || $path == '\\') {
			$path = '';
		}

		$link = 'http://'.$_SERVER['HTTP_HOST'].$path.'/'.$this->files[$i]['newName'];
		$link_bs = $this->files[$i]['newName'];
		$link_bs = str_replace("../","",$link_bs);
		
		if (strpos($this->files[$i]['type'], 'image') !== false) {
			$link1 = $link;
		} else {
			$link = '[url='.$link.']Download File[/url]';
		}		
		$return = "<tr><td colspan=\"2\"><a href=\"javascript:window.opener.document.getElementById('imagesid3').value = '$link_bs';window.opener.document.imagesdefault3.src='$link1';window.close();window.history.go(1);\">close</a></td> </tr></table>";
		return $return;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>File Uploader</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="Upload one or multiple files to server, handle for errors, generate direct links and BBCode for forums.">
	<meta name="keywords" content="upload file, file uploader, php uploader, upload, file">
	<meta name="author" content="Rilwis">
	<style type="text/css">
		body {
			font: normal 13px Arial, Heltical, sans-serif;
			margin: 0;
			text-align: center;
			background:url(../images/sidebar.png);
		}
		#page {
			width: 500px;
			margin: 0 auto;
			
		}
		#page center {
		height:30px;
		line-height:30px;
		background:url(images/header_bg.png);
		color:#CCC;
		text-transform:uppercase;
		font-weight:bold;
		}
		table {
			font: normal 13px Arial, Heltical, sans-serif;
		}
		h2 {
			font: bold 22px Verdana, Heltical, sans-serif;
			color: #a69;
			margin: 20px;
		}
		#wait, #error, #successful, #warn {
			font-size: 16px;
		}
		#error {
			color: red;
		}
		#successful {
			color: green;
		}
		#warn {
			color: orange;
		}
		#copyright {
			margin-top: 20px;
		}
	</style>
</head>
<body>
 
	<div id="page">
		<center>Up ảnh</center>
		<?php
		$fileUploader = new FileUploader();
		ini_set('post_max_size','100M');
		ini_set('upload_max_filesize','100M');
 		ini_set('max_execution_time','1000');
		ini_set('max_input_time','1000');
		$fileUploader->showFormUpload();
		if (isset($_POST['submit'])) {
			$fileUploader->getFilesUpload($_FILES['filesUpload']);
			if ($fileUploader->getTotalFiles() > 0) {
				for ($i = 0; $i < $fileUploader->getTotalFiles(); $i++) {
					if ($fileUploader->checkUploadProcess($i) && $fileUploader->checkFileType($i) && $fileUploader->moveFile($i)) {
						echo $fileUploader->getLink($i);
					}
				}
			} else {
				echo '<div id="error">Hãy chọn file để upload</div>';
			}
		}
		?>
	</div>
</body>
</html>
