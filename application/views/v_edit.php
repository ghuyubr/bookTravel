<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($show as $u){ ?>
	<form action="<?php echo base_url(). 'Action/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Username</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->userid ?>">
					<input type="text" name="username" value="<?php echo $u->username ?>">
				</td>
			</tr>
			<tr>
				<td>Fullname</td>
				<td><input type="text" name="fullname" value="<?php echo $u->fullname ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $u->email ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>