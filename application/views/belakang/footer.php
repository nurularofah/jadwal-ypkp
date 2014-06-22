        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url().'assets/js/jquery-1.10.2.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/plugins/metisMenu/jquery.metisMenu.js'; ?>"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo base_url().'assets/js/sb-admin.js'; ?>"></script>
    
    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="<?php echo base_url().'assets/js/plugins/dataTables/jquery.dataTables.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/js/plugins/dataTables/dataTables.bootstrap.js'; ?>"></script>


    <!-- Coba library -->    
    <script src="<?php echo base_url('assets/js/holder.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js');?>"></script>
    <script src="<?php echo base_url('assets/js/application.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>



    <script>
    $(document).ready(function() {
        $('#example').dataTable();
        var table = $('#example').DataTable();

        $('#example tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
                $(this).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        } );

        $('#example tbody').on('click', 'tr', function () {
            var nama = $('td', this).eq(0).text();
            var alamat = $('td', this).eq(1).text();
            var telepon = $('td', this).eq(2).text();
             
            $('#formTabel').modal({
              show: true
            });

            document.getElementById("tnama").value=nama;
            document.getElementById("talamat").value=alamat;
            document.getElementById("ttelepon").value=telepon;
        } );

            
        $(function(){
            $("#tgl").datepicker({
                format:'yyyy-mm-dd'
            });

            $("#tanggal1").datepicker({
                format:'yyyy-mm-dd'
            });
            
            $("#tanggal2").datepicker({
                format:'yyyy-mm-dd'
            });
            
            $("#tanggal").datepicker({
                format:'yyyy-mm-dd'
            });
        })

    } );
    </script>

</body>
</html>