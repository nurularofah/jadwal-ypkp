<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
            <h3 class="panel-title">Daftar Matakuliah</h3>
        </div>
        <div class="panel-body">
            <div class="panel">
                <button id="btambahMatkul" type="button" class="btn btn-primary" data-toggle="modal" data-target="#formBaruMatkul"><i class="glyphicon glyphicon-plus"></i> Tambah Baru</button>    
            </div>
            <!-- Modal -->
            <div class="modal fade" id="formBaruMatkul" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Data Matakuliah</h4>
                  </div>
                  <div class="modal-body">
                    <form action="" method="get" role="form">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="col-lg-3">Kode:</label>
                                <div class="col-lg-8">
                                    <input type="text" id="tkodematkul" class="form-control">
                                </div>                    
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3">Matakuliah:</label>
                                <div class="col-lg-8">
                                    <input type="text" id="tmatkul" class="form-control">
                                </div>                
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3">SKS:</label>
                                <div class="col-lg-8">
                                    <input type="text" id="tsks" class="form-control">
                                </div>                                          
                            </div>
                        </div>                  
                    </form>             
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-collapse-up"></i> Keluar</button>
                    <button id="bSimpanMatkul" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Simpan</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tabel -->
            <div class="table-responsive">
                <table class="table table-hover display" id="gMatkul" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Matakuliah</th>
                            <th>SKS</th>                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($records as $row): ?>
                        <tr>
                            <td><?php echo $row->kd_matkul; ?></td>
                            <td><?php echo $row->nm_matkul; ?></td>
                            <td><?php echo $row->sks; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- Modal -->
                <div class="modal fade" id="formTabelMatkul" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                
                        <h4 class="modal-title" id="myModalLabel">Ubah Data Matakuliah</h4>
                      </div>
                      <div class="modal-body">
                        <form action="" method="get" accept-charset="utf-8">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-lg-3">Kode:</label>
                                    <div class="col-lg-8">
                                        <input type="text" id="tkodematkul1" class="form-control">
                                    </div>                    
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3">Matakuliah:</label>
                                    <div class="col-lg-8">
                                        <input type="text" id="tmatkul1" class="form-control">
                                    </div>                
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3">SKS:</label>
                                    <div class="col-lg-8">
                                        <input type="text" id="tsks1" class="form-control">
                                    </div>                                      
                                </div>                            
                            </div>
                        </form>             
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-collapse-up"></i> Keluar</button>
                        <button id="bHapusMatkul" type="button" class="btn btn-warning"><i class="glyphicon glyphicon-remove"></i> Hapus</button>
                    <button id="bUbahMatkul" type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Ubah</button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>    
        <!-- /.table-responsive -->                 
    </div>
    </div>
</div>
