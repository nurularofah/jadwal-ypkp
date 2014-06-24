<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-info">
			<div class="panel-heading">
		    	<h3 class="panel-title">Daftar Jadwal Matakuliah</h3>
			</div>
		    <div class="panel-body">
		    	<div class="panel">
		    		<button id="btambahjadwalmatkul" type="button" class="btn btn-primary" data-toggle="modal" data-target="#formBaru"><i class="glyphicon glyphicon-plus"></i> Tambah Baru</button>	
		    	</div>
		    	<!-- Modal -->
				<div class="modal fade" id="formBaruJadwalMatkul" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				      	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				        <h4 class="modal-title" id="myModalLabel">Tambah Data Jadwal Matakuliah</h4>
				      </div>
				      <div class="modal-body">
		      	
				      </div>
				      <div class="modal-footer">

				      </div>
				    </div>
				  </div>
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
		    </div>					
		</div>
	</div>
</div>
