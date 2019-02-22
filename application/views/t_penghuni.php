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
	<center><h1>--- P O S T ---</h1></center>
	<center><?php echo anchor('c_penghuni/tambah','Tambah Data'); ?>
	<table class="table table-striped table-danger">
		<tr>
			<th>No</th>
			<th>No KTP</th>
			<th>Nama</th>
			<th>Unit</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($penghuni as $a){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $a->noKTP ?></td>
			<td><?php echo $a->nama ?></td>
			<td><?php echo $a->unit ?></td>
			<td>
			      <?php echo anchor('c_penghuni/edit/'.$a->noKTP,'Edit'); ?>
                         
			</td>
		</tr>
		<?php } ?>
	</table>
	</center>
</body>
</html>