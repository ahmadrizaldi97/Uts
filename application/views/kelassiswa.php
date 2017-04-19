<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/DataTables/css/dataTables.bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<style type="text/css">
			img{
				width: 250px;
				height: 100px;

			}
		</style>

	</head>
	<body>
		<h1 class="text-center">Hello World</h1>

		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
			<script src="<?php echo base_url(''); ?>/assets/datatables.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
 		<script type="text/javascript">
 			$(document).ready(function(){
 				$('#example').DataTable();
 			})
 		</script>

		<div class="container-fluid">
			<table class="table table-striped table-hover" id="example">
				<a href="<?php echo site_url('') ?>/Pegawai/tambahkelas">Tambah Kelas</a> <br>
				<a href="<?php echo site_url('') ?>/Pegawai/tambahsiswa">Tambah Siswa</a><br>
				<a href="<?php echo site_url('') ?>/Pegawai/index">kelas</a><br>
				<thead>
					<tr>
						<th>Nama</th>
						<th>Tanggal Lahir</th>
						<th>Foto</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($datasiswa as $key) { ?>
					<tr>
						<td><?php echo $key->nama; ?></td>
						<td><?php echo $key->tanggal_lahir; ?></td>
						<td><img src="<?php echo base_url(''); ?>/assets/uploads/<?php echo $key->foto; ?>"></td>
						<td><a class="btn btn-success" href="<?php echo site_url('') ?>/Pegawai/edit/<?php echo $key->id; ?>">Edit</a>
							<a class="btn btn-danger" href="<?php echo site_url('') ?>/Pegawai/deletes/<?php echo $key->id; ?>">Delete</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>

		<!-- jQuery -->
		
	</body>
</html>