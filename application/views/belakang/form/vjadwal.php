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
					        <div class="col-md-3 col-md-offset-1">
					            <input type="text" id="tkode" class="form-control" readonly="readonly">
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
					            <input type="text" id="tkelas" class="form-control">
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
				<!-- Tabel -->
		    	<div class="table-responsive">
				    <table class="table table-hover display" id="tblvjadwal" cellspacing="0" width="100%">
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
				            <tr>
				                <td>"Roni"</td>
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
		</div>
	</div>
</div>
