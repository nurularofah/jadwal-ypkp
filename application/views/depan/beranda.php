<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Jadwal</title>
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">	      
	      <a class="navbar-brand" href="#">UNIVERSITAS SANGGA BUANA</a>	 	      
	    </div><!-- /.navbar-collapse -->
	    <ul class="nav navbar-nav navbar-right nav-pills">
	      	<li><p class="navbar-text "><?php echo date('D, d-M-Y'); ?></p></li>	            
	    </ul>  
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="panel panel-primary">
	  <!-- Default panel contents -->
	  <div class="panel-heading">
	  	<center><b>JADWAL PERKULIAHAN</b></center>
	  </div>
	  <!-- Table -->
	  <div class="table-responsive">
	  	<table class="table table-hover table-bordered">	  	
	  	<thead>
	  		<tr class="success">
	  			<th>Mata Kuliah</th>
	  			<th>Kelas</th>
	  			<th>Waktu</th>
	  			<th>Ruangan</th>
	  			<th>Dosen</th>
	  			<th>Status Dosen</th>
	  		</tr>
	  	</thead>
	  	<tbody>
	  		<tr>
	  			<td>data</td>
	  			<td>data</td>
	  			<td>data</td>
	  			<td>data</td>
	  			<td>data</td>
	  			<td>data</td>
	  		</tr>
	  	</tbody>
	  </table>
	  </div>	  	 
	</div>

</body>
</html>