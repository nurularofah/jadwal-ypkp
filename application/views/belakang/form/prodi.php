<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-info">
			<div class="panel-heading">
		    	<h3 class="panel-title">Daftar Data Prodi</h3>
			</div>
		    <div class="panel-body">
		    	<div class="panel">
		    		<button id="btambah" type="button" class="btn btn-primary" data-toggle="modal" data-target="#formBaruProdi"><i class="glyphicon glyphicon-plus"></i> Tambah Baru</button>	
		    	</div>
		    	<!-- Modal -->
				<div class="modal fade" id="formBaruProdi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				      	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				        <h4 class="modal-title" id="myModalLabel">Tambah Data Prodi</h4>
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
									<label class="col-lg-3">Prodi:</label>
							        <div class="col-lg-8">
							            <input type="text" id="tprodi1" class="form-control">
							        </div>				  
								</div>
				      		</div>		      		
				      	</form>		      	
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-collapse-up"></i> Keluar</button>
				        <button id="bSimpanProdi" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Simpan</button>
				      </div>
				    </div>
				  </div>
				</div>

				<!-- Tabel -->
		    	<div class="table-responsive">
				    <table class="table table-hover display" id="tblProdi" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>Kode</th>
				                <th>Prodi</th>		                
				            </tr>
				        </thead>
				        <tbody>
				        	<?php foreach ($records as $row): ?>
				            <tr>
				                <td><?php echo $row->kd_prodi; ?></td>
				                <td><?php echo $row->nm_prodi; ?></td>
				            </tr>
				            <?php endforeach; ?>
				        </tbody>
				    </table>
				    <!-- Modal -->
					<div class="modal fade" id="formTabelProdi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					      	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>		        
					        <h4 class="modal-title" id="myModalLabel">Ubah Data Prodi</h4>
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
									<label class="col-lg-3">Prodi:</label>
							        <div class="col-lg-8">
							            <input type="text" id="tprodi" class="form-control">
							        </div>				  
								</div>					      		
					      	</form>		      	
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-collapse-up"></i> Keluar</button>
					        <button id="bHapusProdi" type="button" class="btn btn-warning"><i class="glyphicon glyphicon-remove"></i> Hapus</button>
				        <button id="bUbahProdi" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Ubah</button>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
		    </div>				
		</div>
	</div>
</div>