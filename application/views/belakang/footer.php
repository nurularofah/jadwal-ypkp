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

        $('#example tbody').on('dblclick', 'tr', function () {
            var name = $('td', this).eq(1).text();
            alert( 'You clicked on '+name+'\'s row' );            
        } );
    } );

    </script>

</body>
</html>