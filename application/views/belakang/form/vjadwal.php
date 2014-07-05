<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-info">
			<div class="panel-heading">
		    	<h3 class="panel-title">Jadwal Matakuliah</h3>
			</div>
		    <div class="panel-body">		    	
				<form class="form-horizontal" action="<?php echo "";?>" method="post">
		            <div class="col-md-6">
		                <div class="form-group">
		                	<label class="col-lg-2 control-label">Kode</label>
					        <div class="col-md-4 col-md-offset-1">
					            <input type="text" id="tkode" class="form-control" readonly="readonly" value="<?php echo $nooto; ?>">
					        </div>
		                </div>
		                <div class="form-group">
		                	<label class="col-lg-2 control-label">Tahun</label>
					        <div class="col-md-4 col-md-offset-1">
					            <input type="text" id="ttahun" class="form-control">
					        </div>
		                </div>
		                <div class="form-group">
		                	<label class="col-lg-2 control-label">Semester</label>
					        <div class="col-md-4 col-md-offset-1">
					            <select name="tsemester" class="form-control" id="tsemester">
									<?php foreach ($semester as $smt): ?>
									<option value="<?php echo $smt->kd_smstr; ?>"><?php echo $smt->keterangan; ?></option>
									<?php endforeach;?>
								</select>
					        </div>
		                </div>           
		            </div>
		            <div class="col-md-6">		            	
		            	<div class="form-group">
		                	<label class="col-lg-2 control-label">Kelas</label>
					        <div class="col-md-4 col-md-offset-1">
					            <select name="tkelas" class="form-control" id="tkelas">
									<?php foreach ($kelas as $kls): ?>
									<option value="<?php echo $kls->kd_kelas; ?>"><?php echo $kls->nm_kelas; ?></option>
									<?php endforeach;?>
								</select>
					        </div>
		                </div>
		                <div class="form-group">
		                	<label class="col-lg-2 control-label">Jurusan</label>
					        <div class="col-md-6 col-md-offset-1">
					            <input type="text" id="tjurusan" class="form-control" readonly="readonly">
					        </div>
		                </div>		               
		            </div>
		        </form>
		    </div>					
		</div>

		<div class="panel panel-success">
			<div class="panel-heading">
		    	<h3 class="panel-title">Detail Jadwal Matakuliah</h3>
			</div>
		    <div class="panel-body">
		    	<div class="form-group">	
					<button id="bCariDetail" class="btn btn-success" data-toggle="modal" data-target="#formCariDetailJadwalMatakuliah">
						<i class="glyphicon glyphicon-search"></i> Cari
					</button>
				</div>

				<!-- Modal -->
				<div class="modal fade" id="formCariDetailJadwalMatakuliah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Tambah Detail Jadwal Matakuliah</h4>
							</div>
							<div class="modal-body">
								<form action="" method="get" role="form">
									<div class="form-horizontal">
										<div class="form-group">
											<label class="col-lg-3">Hari</label>
											<div class="col-lg-8">
												<select name="tkelas" placeholder="Hari" class="form-control" id="tkelas">
													<option value="Senin">Senin</option>
													<option value="Selasa">Selasa</option>									
													<option value="Rabu">Rabu</option>
													<option value="Kamis">Kamis</option>
													<option value="Jumat">Jum'at</option>
													<option value="Sabtu">Sabtu</option>
												</select>
											</div>					  
										</div>

										<div class="form-group">
											<label class="col-lg-3">Matakuliah</label>
											<div class="col-lg-8">
												<select class="form-control" id="tdetailmatakuliah">									
													<?php foreach ($matakuliah as $mt): ?>
													<option value="<?php echo $mt->kd_matkul; ?>"><?php echo $mt->nm_matkul; ?></option>
													<?php endforeach;?>
												</select>
											</div>					  
										</div>

										<div class="form-group">
											<label class="col-lg-3">SKS</label>
											<div class="col-lg-8">
												<input type="text" id="tjurusan" class="form-control">
											</div>					  
										</div>

										<div class="form-group">
											<label class="col-lg-3">Jam</label>
											<div class="col-lg-4">
												<input type="text" id="tJamMulaiDetail" placeholder="Jam Mulai" class="form-control">
											</div>
											<div class="col-lg-4">
												<input type="text" id="tJamAkhirDetail" placeholder="Jam Akhir" class="form-control">
											</div>											
										</div>

										<div class="form-group">
											<label class="col-lg-3">Ruangan</label>
											<div class="col-lg-8">
												<select class="form-control" id="tdetailruangan">									
													<?php foreach ($ruangan as $r): ?>
													<option value="<?php echo $r->kd_ruang; ?>"><?php echo $r->nm_ruang; ?></option>
													<?php endforeach;?>
												</select>
											</div>					  
										</div>

										<div class="form-group">
											<label class="col-lg-3">Dosen</label>
											<div class="col-lg-8">
												<select class="form-control" id="tdetailruangan">									
													<?php foreach ($dosen as $d): ?>
													<option value="<?php echo $d->nip; ?>"><?php echo $d->nm_dosen; ?></option>
													<?php endforeach;?>
												</select>
											</div>					  
										</div>

									</div>		      		
								</form>		      	
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-collapse-up"></i> Tutup</button>
								<button id="bTambahDetailJadwalKuliah" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
							</div>
						</div>
					</div>
				</div>

				<!-- Tabel -->
		    	<div class="table-responsive">
				    <table class="table table-hover display" id="tblvjadwal" cellspacing="0" width="100%">
				        <thead>
				            <tr>				                
				                <th>Hari</th>
				                <th>Matakuliah</th>
				                <th>SKS</th>
				                <th>Jam</th>
				                <th>Ruangan</th>
				                <th>Dosen</th>		                
				            </tr>
				        </thead>
				        <tbody>				        	
				            <tr>				                
				                <td>"Roni"</td>
				                <td>"Roni"</td>
				                <td>"Roni"</td>
				                <td>"Roni"</td>
				                <td>"Roni"</td>
				                <td>"Roni"</td>
				            </tr>				            
				        </tbody>
				    </table>
				</div>
		    </div>
		    <div class="modal-footer">
		    	<a href="<?php echo base_url('pengaturan/jadwalmatakuliah');?>" class="btn btn-danger"><i class="glyphicon glyphicon-collapse-up"></i> Keluar</a>
				<button id="bSimpanVJadwal" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
			</div>					
		</div>
	</div>
</div>