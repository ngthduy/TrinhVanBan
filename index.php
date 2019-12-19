<!DOCTYPE html>
<html>
<head>
	<title>CKeditor</title>
	<script type="text/javascript" src="ckeditor_full/ckeditor.js"></script>
	<script type="text/javascript" src="ckfinder/ckfinder.js"></script>
	<style type="text/css">
		.edit {
			width: 50%;
		}
		.contain_detail {
			width: 500px;
			margin-top: 10px;
			border: 1px solid blue;
			padding: 5px;
		}
	</style>
</head>
<body>
	<?php
		if ($_SERVER['REQUEST_METHOD']=='POST') {
			$detail = $_POST['detail'];
		}
	?>
	<div class="edit">
		<form method="POST">
		
			<textarea rows="10" cols="10" name="detail" id="editor1"></textarea>
			<br>
			<input type="submit" name="">
		</form>
	</div>
	
		<?php
			if (isset($detail)) {
				echo '<div class="contain_detail">'.$detail.'</div>';
			}
		?>
	<script>
		CKEDITOR.replace('editor1',{
			filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',
			filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?type=Flash',
			filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Image',
			filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
		});
	</script>
</body>

</html>