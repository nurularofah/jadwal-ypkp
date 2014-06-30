<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-info">
			<div class="panel-heading">
		    	<h3 class="panel-title">Daftar Data Ruangan</h3>
			</div>
		    <div class="panel-body">
		    	<div class="panel">
		    		<button id="btambah" type="button" class="btn btn-primary" data-toggle="modal" data-target="#formBaruRuangan"><i class="glyphicon glyphicon-plus"></i> Tambah Baru</button>	
		    	</div>
		    	<!-- Modal -->
				<div class="modal fade" id="formBaruRuangan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Tambah Data Ruangan</h4>
							</div>
							<div class="modal-body">
								<form action="" method="get" role="form">
									<div class="form-horizontal">
										<div class="form-group">
											<label class="col-lg-3">No Ruangan:</label>
											<div class="col-lg-8">
												<input type="text" id="tkode1" class="form-control">
											</div>					  
										</div>
										<div class="form-group">
											<label class="col-lg-3">Nama Ruangan:</label>
											<div class="col-lg-8">
												<input type="text" id="truangan1" class="form-control">
											</div>				  
										</div>
										<div class="form-group">
											<label class="col-lg-3">Kapasitas:</label>
											<div class="col-lg-8">
												<input type="text" id="tkapasitas1" class="form-control">
											</div>				  
										</div>
										<div class="form-group">
											<label class="col-lg-3">Jenis Ruangan:</label>
											<div class="col-lg-8">
												<select name="tjenis1" class="form-control" id="tjenis1">
									            	<option>Ruang Teori</option>
									            	<option>Lab. Komputer</option>
									            	<option>Lab. Jaringan</option>
						                        </select>
											</div>				  
										</div>
										<div class="form-group">
											<label class="col-lg-3">Lokasi:</label>
											<div class="col-lg-8">
												<select name="tlokasi" class="form-control" id="tlokasi1">
													<?php foreach ($lokasi as $lokas): ?>
													<option value="<?php echo $lokas->kd_lokasi; ?>"><?php echo $lokas->nm_lokasi; ?></option>
													<?php endforeach;?>
												</select>
											</div>				  
										</div>
									</div>		      		
								</form>		      	
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-collapse-up"></i> Keluar</button>
								<button id="bSimpanRuangan" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Simpan</button>
							</div>
						</div>
					</div>
				</div>

				<!-- Tabel -->
		    	<div class="table-responsive">
				    <table class="table table-hover display" id="tblRuangan" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>No Ruangan</th>
				                <th>Nama Ruangan</th>
				                <th>Kapasitas</th>
				                <th>Jenis Ruangan</th>	
				                <th>Kode Lokasi</th>	                
				            </tr>
				        </thead>
				        <tbody>
				        	<?php foreach ($records as $row): ?>
				            <tr>
				                <td><?php echo $row->kd_ruang; ?></td>
				                <td><?php echo $row->nm_ruang; ?></td>
				                <td><?php echo $row->kapasitas; ?></td>
				                <td><?php echo $row->jenis_ruang; ?></td>
				                <td><?php echo $row->kd_lokasi; ?></td>
				            </tr>
				            <?php endforeach; ?>
				        </tbody>
				    </table>
				    <!-- Modal -->
					<div class="modal fade" id="formTabelRuangan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>		        
									<h4 class="modal-title" id="myModalLabel">Ubah Data Ruangan</h4>
								</div>
								<div class="modal-body">
									<form action="" method="get" accept-charset="utf-8">
										<div  class="form-horizontal">
											<div class="form-group">
												<label class="col-lg-3">No Ruangan:</label>
												<div class="col-lg-8">
													<input type="text" id="tkode" class="form-control">
												</div>					  
											</div>
											<div class="form-group">
												<label class="col-lg-3">Nama Ruangan:</label>
												<div class="col-lg-8">
													<input type="text" id="truangan" class="form-control">
												</div>				  
											</div>
											<div class="form-group">
												<label class="col-lg-3">Kapasitas:</label>
												<div class="col-lg-8">
													<input type="text" id="tkapasitas" class="form-control">
												</div>				  
											</div>
											<div class="form-group">
												<label class="col-lg-3">Jenis Ruangan:</label>
												<div class="col-lg-8">
													<select name="tjenis" class="form-control" id="tjenis">
										            	<option>Ruang Teori</option>
										            	<option>Lab. Komputer</option>
										            	<option>Lab. Jaringan</option>
							                        </select>
												</div>				  
											</div>
											<div class="form-group">
												<label class="col-lg-3">Lokasi:</label>
												<div class="col-lg-8">
													<select name="tlokasi" class="form-control" id="tlokasi">
														<?php foreach ($lokasi as $lokas): ?>
														<option value="<?php echo $lokas->kd_lokasi; ?>"><?php echo $lokas->nm_lokasi; ?></option>
														<?php endforeach;?>
													</select>
												</div>				  
											</div>
										</div>
									</form>		      	
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-collapse-up"></i> Keluar</button>
									<button id="bHapusRuangan" type="button" class="btn btn-warning"><i class="glyphicon glyphicon-remove"></i> Hapus</button>
									<button id="bUbahRuangan" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Ubah</button>
								</div>
							</div>
						</div>
					</div>
				</div>
		    </div>				
		</div>
	</div>
</div>