<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<title>uploadfile test</title>
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<form action="UploadTest.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>单文件上传</label>
			<input type="file" name="upload">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<hr>
	<form action="UploadTest.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>多文件上传</label>
			<input type="file" name="upload[]">
			<input type="file" name="upload[]">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</body>
</html>
