<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
</head>
<body>
	<form method="post" action="<?php echo site_url('auth/proses');?>">
		<fieldset style="width: 275px; margin-left: auto; margin-right: auto;">
			<h2 align="center"><?php echo $fieldset;?></h2>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<p></p>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit"></td>
			</tr>
		</fieldset>
	</form>
</body>
</html>