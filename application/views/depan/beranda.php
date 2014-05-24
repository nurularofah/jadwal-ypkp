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
	<nav class="navbar navbar-inverse" role="navigation">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">	      
	      <a class="navbar-brand" href="#">UNIVERSITAS SANGGA BUANA</a>	 	      
	    </div><!-- /.navbar-collapse -->
	    <ul class="nav navbar-nav navbar-right nav-pills">
	      	<li><p class="navbar-text "><?php echo date('l, d-M-Y'); ?></p></li>	            
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
	  		<tr class="info">
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
	  		<tr>
	  			<td>data</td>
	  			<td>data</td>
	  			<td>data</td>
	  			<td>data</td>
	  			<td>data</td>
	  			<td>data</td>
	  		</tr>
	  		<tr>
	  			<td>data</td>
	  			<td>data</td>
	  			<td>data</td>
	  			<td>data</td>
	  			<td>data</td>
	  			<td>data</td>
	  		</tr>
	  		<tr>
	  			<td>data</td>
	  			<td>data</td>
	  			<td>data</td>
	  			<td>data</td>
	  			<td>data</td>
	  			<td>data</td>
	  		</tr>
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

	<div class="row">
		<div class="col-md-6">
			<div id="nurul-slide" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#nurul-slide" data-slide-to="0" class="active"></li>
			    <li data-target="#nurul-slide" data-slide-to="1"></li>
			    <li data-target="#nurul-slide" data-slide-to="2"></li>
			    <li data-target="#nurul-slide" data-slide-to="3"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item active">
			      <img src="images/slide-1.jpg" alt="Gambar 1">	      
			      <div class="carousel-caption">
			        <h3>Gambar 1</h3>
			      </div>	      
			    </div>
			    <div class="item">
			      <img src="images/slide-2.jpg" alt="Gambar 2">	      
			      <div class="carousel-caption">
			        <h3>Gambar 2</h3>
			      </div>
			    </div>
			    <div class="item">
			      <img src="images/slide-3.jpg" alt="Gambar 3">	      
			      <div class="carousel-caption">
			        <h3>Gambar 3</h3>
			      </div>
			    </div>
			    <div class="item">
			      <img src="images/slide-4.jpg" alt="Gambar 4">	      
			      <div class="carousel-caption">
			        <h3>Gambar 4</h3>
			      </div>
			    </div>	    	    
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#nurul-slide" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			  </a>
			  <a class="right carousel-control" href="#nurul-slide" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
			</div>
		</div>
 		<div class="col-md-4">Berita</div>
	</div><br>

	


	<!-- Running Text -->
	<div class="alert alert-success">
		<marquee direction="right">
			Nurul Arofah
		</marquee>
	</div>
</body>
</html>