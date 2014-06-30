$(document).ready(function() {
    $('#tblRuangan').dataTable();
    var table = $('#tblRuangan').DataTable();

    $('#tblRuangan tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );

    $('#tblRuangan tbody').on('click', 'tr', function () {
        var tkode = $('td', this).eq(0).text();            
        var truangan = $('td', this).eq(1).text();
        var tkapasitas = $('td', this).eq(2).text();
        var tjenis = $('td', this).eq(3).text();
        var tlokasi = $('td', this).eq(4).text();
        $('#formTabelRuangan').modal({
          show: true
        });

        document.getElementById("tkode1").value=tkode;
        document.getElementById("truangan1").value=truangan;
        document.getElementById("tkapasitas1").value=tkapasitas;
        document.getElementById("tjenis1").value=tjenis;
        document.getElementById("tlokasi1").value=tlokasi;
    } );

    $("#bSimpanRuangan").click(function(){
        var kode=$("#tkode1").val();
        var ruangan=$("#truangan1").val();
        var kapasitas=$("#tkapasitas1").val();
        var jenis=$("#tjenis1").val();
        var lokasi=$("#tlokasi1").val();

        $.ajax({
            url: "TambahRuangan",
            type: "POST",
            data:{
                kode:kode,
                ruangan:ruangan,
                kapasitas:kapasitas,
                jenis:jenis,
                lokasi:lokasi
            },
            cache: false,
            success: function(){
                
            }
        });
    } );




} );