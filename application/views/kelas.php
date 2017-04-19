<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1 class="text-center">Hello World</h1>

		<div class="container-fluid">
			<table class="table table-striped table-hover">
				<a href="<?php echo site_url('') ?>/Pegawai/tambahkelas">Tambah Kelas</a> <br>
				<a href="<?php echo site_url('') ?>/Pegawai/tambahsiswa">Tambah Siswa</a><br>
				<a href="<?php echo site_url('') ?>/Pegawai/indexsiswa">Siswa</a><br>
				<thead>
					<tr>
						<th>Nama</th>
						<th>Siswa</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($datakelas as $key) { ?>
					<tr>
						<td><?php echo $key->nama; ?></td>
						<td><a class="btn btn-info" href="<?php echo site_url('') ?>/Pegawai/kelassiswa/<?php echo $key->id; ?>">Siswa</a><br></td>
						
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>