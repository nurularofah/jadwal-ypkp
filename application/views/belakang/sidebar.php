            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#tutup1"><i class="glyphicon glyphicon-th-list"></i> Data Master</a>
                                </h4>
                            </div>
                            <div id="tutup1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <span class=" glyphicon glyphicon-home"></span> <a href="<?php echo base_url().'pengaturan/prodi'; ?>">Prodi</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <span class="glyphicon glyphicon-road"></span> <a href="<?php echo base_url().'pengaturan/jurusan'; ?>">Jurusan</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-bookmark"></span> <a href="<?php echo base_url().'pengaturan/kelas'; ?>">Kelas</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <span class="glyphicon glyphicon-briefcase"></span> <a href="<?php echo base_url().'pengaturan/dosen'; ?>">Dosen</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-book"></span> <a href="<?php echo base_url().'pengaturan/matakuliah'; ?>">Matakuliah</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-sound-5-1"></span> <a href="<?php echo base_url().'pengaturan/semester'; ?>">Semester</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <span class="glyphicon glyphicon-map-marker"></span> <a href="<?php echo base_url().'pengaturan/lokasi'; ?>">Lokasi</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <span class="glyphicon glyphicon-credit-card"></span> <a href="<?php echo base_url().'pengaturan/ruangan'; ?>">Ruangan</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#tutup2"><span class="glyphicon glyphicon-calendar">
                            </span> Jadwal</a>
                                </h4>
                            </div>
                            <div id="tutup2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-list-alt"></span> <a href="<?php echo base_url().'pengaturan/jadwalmatakuliah'; ?>">Jadwal Matakuliah</a>
                                            </td>
                                        </tr>                                        
                                    </table>
                                </div>
                            </div>
                        </div>                        
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $title; ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <?php $this->load->view($maincontent); ?>