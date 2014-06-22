<div class="panel panel-default">
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
					            <input type="text" class="form-control">
					        </div>					  
						</div>
						<div class="form-group">
							<label class="col-lg-3">Nama:</label>
					        <div class="col-lg-8">
					            <input type="text" class="form-control">
					        </div>				  
						</div>
						<div class="form-group">
							<label class="col-lg-3">Jabatan Fungsional:</label>
					        <div class="col-lg-8">
					            <input type="text" class="form-control">
					        </div>						  					  
						</div>
						<div class="form-group">
							<label class="col-lg-3">Pendidikan:</label>
					        <div class="col-lg-8">
					            <input type="text" class="form-control">
					        </div>				  
						</div>
						<div class="form-group">
							<label class="col-lg-3">Tempat Lahir:</label>
					        <div class="col-lg-8">
					            <input type="text" class="form-control">
					        </div>
						</div>
						<div class="form-group">
							<label class="col-lg-3">Tanggal Lahir:</label>
					        <div class="col-lg-8">
					            <input type="text" id="tanggal1" class="form-control">
					        </div>
						</div>
						<div class="form-group">
							<label class="col-lg-3">Telepon:</label>
					        <div class="col-lg-8">
					            <input type="text" class="form-control">
					        </div>
						</div>
						<div class="form-group">
							<label class="col-lg-3">HandPhone:</label>
					        <div class="col-lg-8">
					            <input type="text" class="form-control">
					        </div>
					    </div>
						<div class="form-group">
							<label class="col-lg-3">Alamat:</label>
					        <div class="col-lg-8">
					            <textarea class="form-control" rows="3"></textarea>
					        </div>					  
						</div>
		      		</div>		      		
		      	</form>		      	
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-collapse-up"></i> Keluar</button>
		        <button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Simpan</button>
		      </div>
		    </div>
		  </div>
		</div>

		<!-- Tabel -->
    	<div class="table-responsive">
		    <table class="table table-striped table-bordered table-hover display" id="example" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>Rendering engine</th>
		                <th>Browser</th>
		                <th>Platform(s)</th>
		                <th>Engine version</th>
		                <th>CSS grade</th>
		            </tr>
		        </thead>
		        <tbody>
		            <tr class="odd gradeX">
		                <td>Trident</td>
		                <td>Internet Explorer 4.0</td>
		                <td>Win 95+</td>
		                <td class="center">4</td>
		                <td class="center">X</td>
		            </tr>
		            <tr class="even gradeC">
		                <td>Trident</td>
		                <td>Internet Explorer 5.0</td>
		                <td>Win 95+</td>
		                <td class="center">5</td>
		                <td class="center">C</td>
		            </tr>
		            <tr class="odd gradeA">
		                <td>Trident</td>
		                <td>Internet Explorer 5.5</td>
		                <td>Win 95+</td>
		                <td class="center">5.5</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="even gradeA">
		                <td>Trident</td>
		                <td>Internet Explorer 6</td>
		                <td>Win 98+</td>
		                <td class="center">6</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="odd gradeA">
		                <td>Trident</td>
		                <td>Internet Explorer 7</td>
		                <td>Win XP SP2+</td>
		                <td class="center">7</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="even gradeA">
		                <td>Trident</td>
		                <td>AOL browser (AOL desktop)</td>
		                <td>Win XP</td>
		                <td class="center">6</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Gecko</td>
		                <td>Firefox 1.0</td>
		                <td>Win 98+ / OSX.2+</td>
		                <td class="center">1.7</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Gecko</td>
		                <td>Firefox 1.5</td>
		                <td>Win 98+ / OSX.2+</td>
		                <td class="center">1.8</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Gecko</td>
		                <td>Firefox 2.0</td>
		                <td>Win 98+ / OSX.2+</td>
		                <td class="center">1.8</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Gecko</td>
		                <td>Firefox 3.0</td>
		                <td>Win 2k+ / OSX.3+</td>
		                <td class="center">1.9</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Gecko</td>
		                <td>Camino 1.0</td>
		                <td>OSX.2+</td>
		                <td class="center">1.8</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Gecko</td>
		                <td>Camino 1.5</td>
		                <td>OSX.3+</td>
		                <td class="center">1.8</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Gecko</td>
		                <td>Netscape 7.2</td>
		                <td>Win 95+ / Mac OS 8.6-9.2</td>
		                <td class="center">1.7</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Gecko</td>
		                <td>Netscape Browser 8</td>
		                <td>Win 98SE+</td>
		                <td class="center">1.7</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Gecko</td>
		                <td>Netscape Navigator 9</td>
		                <td>Win 98+ / OSX.2+</td>
		                <td class="center">1.8</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Gecko</td>
		                <td>Mozilla 1.0</td>
		                <td>Win 95+ / OSX.1+</td>
		                <td class="center">1</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Gecko</td>
		                <td>Mozilla 1.1</td>
		                <td>Win 95+ / OSX.1+</td>
		                <td class="center">1.1</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Gecko</td>
		                <td>Mozilla 1.2</td>
		                <td>Win 95+ / OSX.1+</td>
		                <td class="center">1.2</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Gecko</td>
		                <td>Mozilla 1.3</td>
		                <td>Win 95+ / OSX.1+</td>
		                <td class="center">1.3</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Gecko</td>
		                <td>Mozilla 1.4</td>
		                <td>Win 95+ / OSX.1+</td>
		                <td class="center">1.4</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Gecko</td>
		                <td>Mozilla 1.5</td>
		                <td>Win 95+ / OSX.1+</td>
		                <td class="center">1.5</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Gecko</td>
		                <td>Mozilla 1.6</td>
		                <td>Win 95+ / OSX.1+</td>
		                <td class="center">1.6</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Gecko</td>
		                <td>Mozilla 1.7</td>
		                <td>Win 98+ / OSX.1+</td>
		                <td class="center">1.7</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Gecko</td>
		                <td>Mozilla 1.8</td>
		                <td>Win 98+ / OSX.1+</td>
		                <td class="center">1.8</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Gecko</td>
		                <td>Seamonkey 1.1</td>
		                <td>Win 98+ / OSX.2+</td>
		                <td class="center">1.8</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Gecko</td>
		                <td>Epiphany 2.20</td>
		                <td>Gnome</td>
		                <td class="center">1.8</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Webkit</td>
		                <td>Safari 1.2</td>
		                <td>OSX.3</td>
		                <td class="center">125.5</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Webkit</td>
		                <td>Safari 1.3</td>
		                <td>OSX.3</td>
		                <td class="center">312.8</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Webkit</td>
		                <td>Safari 2.0</td>
		                <td>OSX.4+</td>
		                <td class="center">419.3</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Webkit</td>
		                <td>Safari 3.0</td>
		                <td>OSX.4+</td>
		                <td class="center">522.1</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Webkit</td>
		                <td>OmniWeb 5.5</td>
		                <td>OSX.4+</td>
		                <td class="center">420</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Webkit</td>
		                <td>iPod Touch / iPhone</td>
		                <td>iPod</td>
		                <td class="center">420.1</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Webkit</td>
		                <td>S60</td>
		                <td>S60</td>
		                <td class="center">413</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Presto</td>
		                <td>Opera 7.0</td>
		                <td>Win 95+ / OSX.1+</td>
		                <td class="center">-</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Presto</td>
		                <td>Opera 7.5</td>
		                <td>Win 95+ / OSX.2+</td>
		                <td class="center">-</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Presto</td>
		                <td>Opera 8.0</td>
		                <td>Win 95+ / OSX.2+</td>
		                <td class="center">-</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Presto</td>
		                <td>Opera 8.5</td>
		                <td>Win 95+ / OSX.2+</td>
		                <td class="center">-</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Presto</td>
		                <td>Opera 9.0</td>
		                <td>Win 95+ / OSX.3+</td>
		                <td class="center">-</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Presto</td>
		                <td>Opera 9.2</td>
		                <td>Win 88+ / OSX.3+</td>
		                <td class="center">-</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Presto</td>
		                <td>Opera 9.5</td>
		                <td>Win 88+ / OSX.3+</td>
		                <td class="center">-</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Presto</td>
		                <td>Opera for Wii</td>
		                <td>Wii</td>
		                <td class="center">-</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Presto</td>
		                <td>Nokia N800</td>
		                <td>N800</td>
		                <td class="center">-</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Presto</td>
		                <td>Nintendo DS browser</td>
		                <td>Nintendo DS</td>
		                <td class="center">8.5</td>
		                <td class="center">C/A<sup>1</sup>
		                </td>
		            </tr>
		            <tr class="gradeC">
		                <td>KHTML</td>
		                <td>Konqureror 3.1</td>
		                <td>KDE 3.1</td>
		                <td class="center">3.1</td>
		                <td class="center">C</td>
		            </tr>
		            <tr class="gradeA">
		                <td>KHTML</td>
		                <td>Konqureror 3.3</td>
		                <td>KDE 3.3</td>
		                <td class="center">3.3</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeA">
		                <td>KHTML</td>
		                <td>Konqureror 3.5</td>
		                <td>KDE 3.5</td>
		                <td class="center">3.5</td>
		                <td class="center">A</td>
		            </tr>
		            <tr class="gradeX">
		                <td>Tasman</td>
		                <td>Internet Explorer 4.5</td>
		                <td>Mac OS 8-9</td>
		                <td class="center">-</td>
		                <td class="center">X</td>
		            </tr>
		            <tr class="gradeC">
		                <td>Tasman</td>
		                <td>Internet Explorer 5.1</td>
		                <td>Mac OS 7.6-9</td>
		                <td class="center">1</td>
		                <td class="center">C</td>
		            </tr>
		            <tr class="gradeC">
		                <td>Tasman</td>
		                <td>Internet Explorer 5.2</td>
		                <td>Mac OS 8-X</td>
		                <td class="center">1</td>
		                <td class="center">C</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Misc</td>
		                <td>NetFront 3.1</td>
		                <td>Embedded devices</td>
		                <td class="center">-</td>
		                <td class="center">C</td>
		            </tr>
		            <tr class="gradeA">
		                <td>Misc</td>
		                <td>NetFront 3.4</td>
		                <td>Embedded devices</td>
		                <td class="center">-</td>
		                <td class="center">A</td>
		            </tr>		            
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
						            <input type="text" class="form-control">
						        </div>					  
							</div>
							<div class="form-group">
								<label class="col-lg-3">Nama:</label>
						        <div class="col-lg-8">
						            <input type="text" class="form-control">
						        </div>				  
							</div>
							<div class="form-group">
								<label class="col-lg-3">Jabatan Fungsional:</label>
						        <div class="col-lg-8">
						            <input type="text" class="form-control">
						        </div>						  					  
							</div>
							<div class="form-group">
								<label class="col-lg-3">Pendidikan:</label>
						        <div class="col-lg-8">
						            <input type="text" class="form-control">
						        </div>				  
							</div>
							<div class="form-group">
								<label class="col-lg-3">Tempat Lahir:</label>
						        <div class="col-lg-8">
						            <input type="text" class="form-control">
						        </div>
							</div>
							<div class="form-group">
								<label class="col-lg-3">Tanggal Lahir:</label>
						        <div class="col-lg-8">
						            <input type="text" id="tanggal1" class="form-control">
						        </div>
							</div>
							<div class="form-group">
								<label class="col-lg-3">Telepon:</label>
						        <div class="col-lg-8">
						            <input type="text" class="form-control">
						        </div>
							</div>
							<div class="form-group">
								<label class="col-lg-3">HandPhone:</label>
						        <div class="col-lg-8">
						            <input type="text" class="form-control">
						        </div>
						    </div>
							<div class="form-group">
								<label class="col-lg-3">Alamat:</label>
						        <div class="col-lg-8">
						            <textarea class="form-control" rows="3"></textarea>
						        </div>					  
							</div>
			      		</div>
			      	</form>		      	
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-collapse-up"></i> Keluar</button>
			        <button type="button" class="btn btn-warning"><i class="glyphicon glyphicon-remove"></i> Hapus</button>
		        <button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Ubah</button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
    </div>
	
	<!-- /.table-responsive -->					
</div>	


