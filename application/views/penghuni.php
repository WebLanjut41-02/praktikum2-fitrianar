<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<body>
	<div class="container">
	<div class="row">
		<div class="row mt-3"></div>
		<div class="col-md-6">
<center>
	<h1>Form Penghuni</h1>
	<form action="<?php echo base_url().'index.php/c_penghuni/prosesT'; ?>" method="post">
	<table>
		<tr>
			<td>No KTP</td>
			<td>:</td>
			<td><input type="text" name="noKTP"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Unit</td>
			<td>:</td>
			<td><input type="text" name="unit"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" class="btn btn-primary" name="submit" value="Tambah"></td>
			<td></td>
		</tr>
	</table>
</form>
</center>
</body>
</html>