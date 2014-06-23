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
        var tnip = $('td', this).eq(0).text();            
        var tnama = $('td', this).eq(1).text();
        var tjabatan = $('td', this).eq(2).text();
        var tpendidikan = $('td', this).eq(3).text();
        var ttempatlahir = $('td', this).eq(4).text();
        var ttanggallahir2 = $('td', this).eq(5).text();
        var ttelepon = $('td', this).eq(6).text();
        var thandphone = $('td', this).eq(7).text();
        var talamat = $('td', this).eq(8).text();

        $('#formTabel').modal({
          show: true
        });

        document.getElementById("tnip").value=tnip;
        document.getElementById("tnama").value=tnama;
        document.getElementById("tjabatan").value=tjabatan;
        document.getElementById("tpendidikan").value=tpendidikan;
        document.getElementById("ttempatlahir").value=ttempatlahir;
        document.getElementById("ttanggallahir2").value=ttanggallahir2;
        document.getElementById("ttelepon").value=ttelepon;
        document.getElementById("thandphone").value=thandphone;
        document.getElementById("talamat").value=talamat;
    } );

        
    $(function(){
        $("#ttanggallahir1").datepicker({
            format:'yyyy-mm-dd'
        });

        $("#ttanggallahir2").datepicker({
            format:'yyyy-mm-dd'
        });            
    })

    $("#bSimpanDosen").click(function(){
        var nip=$("#tnip1").val();

        $.ajax({
            url: "TambahDosen",
            type: "POST",
            data:{
                nip:nip
            },
            cache: false,
            success: function(){
                
            }
        });
    });

} );