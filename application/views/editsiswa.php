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
		<style type="text/css">
			img{
				width: 250px;
				height: 100px;
			}
		</style>
	</head>
	<body>
		<h1 class="text-center">Hello World</h1>

		<div class="container-fluid">
			<?php echo form_open_multipart('Pegawai/edit/'.$this->uri->segment(3)); ?>
			<?php echo validation_errors(); ?>
				<legend>Form title</legend>
			
				<div class="form-group">
					<label for="">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?php 
					echo $datasiswa[0]->nama ?>"><br>
					<label for="">Tanggal Lahir</label>
					<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php 
					echo $datasiswa[0]->tanggal_lahir ?>"><br>
					<label for="">Foto</label><br>
					<img src="<?php echo base_url(''); ?>/assets/uploads/<?php echo $datasiswa[0]->foto; ?>">
					
					<input type="file" class="form-control" id="foto" name="foto"><br>
					<label>Kelas</label>
					<select name="kelas" class="form-control">
					<?php foreach ($datakelas as $key) { ?>
						<option value="<?php echo $key->id; ?>"><?php echo $key->nama; ?></option>
					<?php } ?>
						
					</select>
				</div>
			
				
			
				<button type="submit" class="btn btn-primary">Edit</button>
			<?php echo form_close(); ?>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>