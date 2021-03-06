<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-info">
			<div class="panel-heading">
		    	<h3 class="panel-title">Daftar Data Dosen</h3>
			</div>
		    <div class="panel-body">
		    	<div class="panel">
		    		<button id="btambah" type="button" class="btn btn-primary" data-toggle="modal" data-target="#formBaru"><i class="glyphicon glyphicon-plus"></i> Tambah Baru</button>	
		    	</div>
		    	<!-- Modal -->
				<div class="modal fade" id="formBaru" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				      	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				        <h4 class="modal-title" id="myModalLabel">Tambah Data Dosen</h4>
				      </div>
				      <div class="modal-body">
				      	<form action="" method="get" role="form">
				      		<div class="form-horizontal">
				      			<div class="form-group">
				      				<label class="col-lg-3">NIP:</label>
							        <div class="col-lg-8">
							            <input type="text" id="tnip1" class="form-control">
							        </div>					  
								</div>
								<div class="form-group">
									<label class="col-lg-3">Nama:</label>
							        <div class="col-lg-8">
							            <input type="text" id="tnama1" class="form-control">
							        </div>				  
								</div>
								<div class="form-group">
									<label class="col-lg-3">Jabatan Fungsional:</label>
							        <div class="col-lg-8">
							            <input type="text" id="tjabatan1" class="form-control">
							        </div>						  					  
								</div>
								<div class="form-group">
									<label class="col-lg-3">Pendidikan:</label>
							        <div class="col-lg-8">
							            <input type="text" id="tpendidikan1" class="form-control">
							        </div>				  
								</div>
								<div class="form-group">
									<label class="col-lg-3">Tempat Lahir:</label>
							        <div class="col-lg-8">
							            <input type="text" id="ttempatlahir1" class="form-control">
							        </div>
								</div>
								<div class="form-group">
									<label class="col-lg-3">Tanggal Lahir:</label>
							        <div class="col-lg-8">
							            <input type="text" id="ttanggallahir1" class="form-control">
							        </div>
								</div>
								<div class="form-group">
									<label class="col-lg-3">Telepon:</label>
							        <div class="col-lg-8">
							            <input type="text" id="ttelepon1" class="form-control">
							        </div>
								</div>
								<div class="form-group">
									<label class="col-lg-3">HandPhone:</label>
							        <div class="col-lg-8">
							            <input type="text" id="thandphone1" class="form-control">
							        </div>
							    </div>
								<div class="form-group">
									<label class="col-lg-3">Alamat:</label>
							        <div class="col-lg-8">
							            <textarea class="form-control" id="talamat1" rows="3"></textarea>
							        </div>					  
								</div>
				      		</div>		      		
				      	</form>		      	
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-collapse-up"></i> Keluar</button>
				        <button id="bSimpanDosen" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Simpan</button>
				      </div>
				    </div>
				  </div>
				</div>

				<!-- Tabel -->
		    	<div class="table-responsive">
				    <table class="table table-hover display" id="example" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>NIP</th>
				                <th>Nama</th>
				                <th>Jabatan Fungsional</th>
				                <th>Pendidikan</th>
				                <th>Tempat Lahir</th>
				                <th>Tanggal Lahir</th>
				                <th>Telepon</th>
				                <th>HandPhone</th>
				                <th>Alamat</th>		                
				            </tr>
				        </thead>
				        <tbody>
				        	<?php foreach ($records as $row): ?>
				            <tr>
				                <td><?php echo $row->nip; ?></td>
				                <td><?php echo $row->nm_dosen; ?></td>
				                <td><?php echo $row->jab_fungsional; ?></td>
				                <td><?php echo $row->pendidikan; ?></td>
				                <td><?php echo $row->tempat_lahir; ?></td>
				                <td><?php echo $row->tgl_lahir; ?></td>
				                <td><?php echo $row->no_tlp; ?></td>
				                <td><?php echo $row->no_hp; ?></td>
				                <td><?php echo $row->alamat; ?></td>
				            </tr>
				            <?php endforeach; ?>
				        </tbody>
				    </table>
				    <!-- Modal -->
					<div class="modal fade" id="formTabel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					      	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>		        
					        <h4 class="modal-title" id="myModalLabel">Ubah Data Dosen</h4>
					      </div>
					      <div class="modal-body">
					      	<form action="" method="get" accept-charset="utf-8">
					      		<div class="form-horizontal">
					      			<div class="form-group">
					      				<label class="col-lg-3">NIP:</label>
								        <div class="col-lg-8">
								            <input type="text" id="tnip" class="form-control">
								        </div>					  
									</div>
									<div class="form-group">
										<label class="col-lg-3">Nama:</label>
								        <div class="col-lg-8">
								            <input type="text" id="tnama" class="form-control">
								        </div>				  
									</div>
									<div class="form-group">
										<label class="col-lg-3">Jabatan Fungsional:</label>
								        <div class="col-lg-8">
								            <input type="text" id="tjabatan" class="form-control">
								        </div>						  					  
									</div>
									<div class="form-group">
										<label class="col-lg-3">Pendidikan:</label>
								        <div class="col-lg-8">
								            <input type="text" id="tpendidikan" class="form-control">
								        </div>				  
									</div>
									<div class="form-group">
										<label class="col-lg-3">Tempat Lahir:</label>
								        <div class="col-lg-8">
								            <input type="text" id="ttempatlahir" class="form-control">
								        </div>
									</div>
									<div class="form-group">
										<label class="col-lg-3">Tanggal Lahir:</label>
								        <div class="col-lg-8">
								            <input type="text" id="ttanggallahir2" class="form-control">
								        </div>
									</div>
									<div class="form-group">
										<label class="col-lg-3">Telepon:</label>
								        <div class="col-lg-8">
								            <input type="text" id="ttelepon" class="form-control">
								        </div>
									</div>
									<div class="form-group">
										<label class="col-lg-3">HandPhone:</label>
								        <div class="col-lg-8">
								            <input type="text" id="thandphone" class="form-control">
								        </div>
								    </div>
									<div class="form-group">
										<label class="col-lg-3">Alamat:</label>
								        <div class="col-lg-8">
								            <textarea class="form-control" id="talamat" rows="3"></textarea>
								        </div>					  
									</div>
					      		</div>
					      	</form>		      	
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-collapse-up"></i> Keluar</button>
					        <button id="bHapusDosen" type="button" class="btn btn-warning"><i class="glyphicon glyphicon-remove"></i> Hapus</button>
				        <button id="bUbahDosen" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Ubah</button>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
		    </div>				
		</div>
	</div>
</div>
