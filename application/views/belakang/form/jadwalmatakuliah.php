<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-info">
			<div class="panel-heading">
		    	<h3 class="panel-title">Daftar Jadwal Matakuliah</h3>
			</div>
		    <div class="panel-body">
		    	<div class="panel">		    		
		    		<a href="<?php echo base_url('pengaturan/vjadwal');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Baru</a>
		    	</div>
		    	
				<!-- Tabel -->
		    	<div class="table-responsive">
				    <table class="table table-hover display" id="tblJadwalMatkul" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>Kode</th>
				                <th>Hari</th>
				                <th>Matakuliah</th>
				                <th>SKS</th>
				                <th>Jam</th>
				                <th>Ruangan</th>
				                <th>Dosen</th>		                
				            </tr>
				        </thead>
				        <tbody>
				        	<?php foreach ($records as $row): ?>
				            <tr>
				                <td><?php echo $row->kode; ?></td>
				                <td><?php echo $row->hari; ?></td>
				                <td><?php echo $row->matakuliah; ?></td>
				                <td><?php echo $row->sks; ?></td>
				                <td><?php echo $row->jam; ?></td>
				                <td><?php echo $row->ruangan; ?></td>
				                <td><?php echo $row->dosen; ?></td>
				            </tr>
				            <?php endforeach; ?>
				        </tbody>
				    </table>
				</div>

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
