<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title;?></title>
</head>
<body>
	<div><?php echo $heading;?></div>

    <?php echo form_open_multipart('upload/do_upload');?>

    <input type="file" name="userfile" size="20" />

    <br /><br />

    <input type="submit" value="upload" />

</body>
</html>