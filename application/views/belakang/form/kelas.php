<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-info">
			<div class="panel-heading">
		    	<h3 class="panel-title">Daftar Data Kelas</h3>
			</div>
		    <div class="panel-body">
		    	<div class="panel">
		    		<button id="btambah" type="button" class="btn btn-primary" data-toggle="modal" data-target="#formBaruKelas"><i class="glyphicon glyphicon-plus"></i> Tambah Baru</button>	
		    	</div>
		    	<!-- Modal -->
				<div class="modal fade" id="formBaruKelas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				      	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				        <h4 class="modal-title" id="myModalLabel">Tambah Data Kelas</h4>
				      </div>
				      <div class="modal-body">
				      	<form action="" method="get" role="form">
				      		<div class="form-horizontal">
				      			<div class="form-group">
				      				<label class="col-lg-3">Kode:</label>
							        <div class="col-lg-8">
							            <input type="text" id="tkode1" class="form-control">
							        </div>					  
								</div>
								<div class="form-group">
				      				<label class="col-lg-3">Kelas:</label>
							        <div class="col-lg-8">
							            <input type="text" id="tkelas1" class="form-control">
							        </div>					  
								</div>
								<div class="form-group">
				      				<label class="col-lg-3">Jurusan:</label>
							        <div class="col-lg-8">
							            <select name="tjurusan1" class="form-control" id="tjurusan1">
											<?php foreach ($jurusan as $jrs): ?>
											<option value="<?php echo $jrs->kd_jurusan; ?>"><?php echo $jrs->nm_jurusan; ?></option>
											<?php endforeach;?>
										</select>
							        </div>					  
								</div>								
				      		</div>		      		
				      	</form>		      	
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-collapse-up"></i> Keluar</button>
				        <button id="bSimpanKelas" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Simpan</button>
				      </div>
				    </div>
				  </div>
				</div>

				<!-- Tabel -->
		    	<div class="table-responsive">
				    <table class="table table-hover display" id="tblKelas" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>Kode</th>
				                <th>Kelas</th>
				                <th>Jurusan</th>
				                <th>Prodi</th>				                		                
				            </tr>
				        </thead>
				        <tbody>
				        	<?php foreach ($records as $row): ?>
				            <tr>
				                <td><?php echo $row->kd_kelas; ?></td>
				                <td><?php echo $row->nm_kelas; ?></td>
				                <td><?php echo $row->nm_jurusan; ?></td>
				                <td><?php echo $row->nm_prodi; ?></td>				               				                
				            </tr>
				            <?php endforeach; ?>
				        </tbody>
				    </table>
				    <!-- Modal -->
					<div class="modal fade" id="formTabelKelas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
						    <div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>		        
									<h4 class="modal-title" id="myModalLabel">Ubah Data Kelas</h4>
								</div>
								<div class="modal-body">
									<form action="" method="get" accept-charset="utf-8">
										<div class="form-horizontal"> 
								      		<div class="form-group">
							      				<label class="col-lg-3">Kode:</label>
										        <div class="col-lg-8">
										            <input type="text" id="tkode" class="form-control">
										        </div>					  
											</div>
											<div class="form-group">
							      				<label class="col-lg-3">Kelas:</label>
										        <div class="col-lg-8">
										            <input type="text" id="tkelas" class="form-control">
										        </div>					  
											</div>
											<div class="form-group">
							      				<label class="col-lg-3">Jurusan:</label>
										        <div class="col-lg-8">
										            <select name="tjurusan" class="form-control" id="tjurusan">
														<?php foreach ($jurusan as $jrs): ?>
														<option value="<?php echo $jrs->kd_jurusan; ?>"><?php echo $jrs->nm_jurusan; ?></option>
														<?php endforeach;?>
													</select>
										        </div>					  
											</div>
									    </div>
									</form>
								</div>				
								<div class="modal-footer">
							        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-collapse-up"></i> Keluar</button>
							        <button id="bHapusKelas" type="button" class="btn btn-warning"><i class="glyphicon glyphicon-remove"></i> Hapus</button>
						        	<button id="bUbahKelas" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Ubah</button>
						    	</div>						    
							</div>
						</div>
					</div>
		    	</div>				
			</div>
		</div>
	</div>
</div>